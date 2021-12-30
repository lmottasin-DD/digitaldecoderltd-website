<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slider::latest()->paginate(10);

        return view('backend.slider.slider_show',[
            'all_data'=> $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.add_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validation
        $this->validate($request,[
           'title'=>'required',
           'slug'=>'required|unique:sliders',
           'title_description'=> 'required',
           'photo'=>'required'
        ],[
            'slug.unique'=>'Please choose a unique slug',
        ]);
        // photo
        if ( $request->hasFile('photo'))
        {
            $img = $request->file('photo');
            $unique_name = md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img->move(public_path('media/slider_image'),$unique_name);
        }
        Slider::create([
            'title'=>$request->title,
            'description'=> $request->title_description,
            'photo'=> $unique_name,
            'slug'=> Str::slug($request->slug)
        ]);

        return redirect()->back()->with('success','Slider Added Successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $data = Slider::find($id);

            return view('backend.slider.single_slider_show',[
                'single_data'=>$data,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Slider::find($id);
        return view('backend.slider.edit_slider',[
            'single_data'=> $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $update_data = Slider::find($id);

        //validation
        if ( $request->has('new_slug'))
            {
                $temp = Slider::where('slug','=',$request->new_slug)->get();

                if( $temp ->count()==0)
                {
                    $update_data->slug = Str::slug($request->new_slug);


                }
                else{
                    return redirect()->back()->with('slug_error','This slug is already taken.');
                }


            }





        $update_data->title = $request->title;
        $update_data->description = $request->title_description;




        $unique_name = $request->old_photo;

        if ( $request->hasFile('new_photo')){

            $file = $request->file('new_photo');
            $unique_name = md5(time().rand()). '.'.$file->getClientOriginalExtension();
            $file->move(public_path('media/slider_image/'),$unique_name);

            if ( file_exists(public_path('media/slider_image/').$request->old_photo))
            {
                //photo delete
                unlink(public_path('media/slider_image/').$request->old_photo);
            }

        }

        $update_data -> photo = $unique_name;
        $update_data->update();

        return redirect()->back()->with('success','Information updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        $data = Slider::find($id);
        $data -> delete();

        //photo delete
        unlink(public_path('media/slider_image/').$data->photo);

        return redirect()->route('slider.index')->with('success','Slider Deleted Successful!');
    }
    public function statusChange($id){
        $data = Slider::find($id);
        if (  $data -> status == 0)
        {


            $data->status = 1;
            $data->update();

            return redirect()->back()->with('success', 'Successfully published the slider with title' . $data->title);
        }

        elseif (  $data -> status == 1)
        {


            $data->status = 0;
            $data->update();

            return redirect()->back()->with('success', 'Successfully unpublished the slider with title' . $data->title);
        }
    }
}
