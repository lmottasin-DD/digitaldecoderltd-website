<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = About::latest()->paginate(15);

        return view('backend.about.index',[
            'all_data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.create');
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
            'description'=>'required',
            'photo'=> 'required',
        ]);
        // photo

        //return $request;

        if ( $request->hasFile('photo'))
        {
            $img = $request->file('photo');
            $unique_name = md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img->move(public_path('media/about_image'),$unique_name);
        }
        //return $request->uinque_name;
        About::create([
            'title'=>$request->title,
            'description'=> $request->description,
            'photo'=> $unique_name,
        ]);

        return redirect()->back()->with('success','About Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = About::find($id);

        return view('backend.about.show',[
            'single_data'=> $data,
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
        $data = About::find($id);
        return view('backend.about.edit',[
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
        $this->validate($request,[
           'title'=>'required',
           'description' => 'required',

        ]);


        $update_data = About::find($id);

        $update_data->title = $request->title;
        $update_data->description = $request->description;




        $unique_name = $request->old_photo;

        if ( $request->hasFile('new_photo')){

            $file = $request->file('new_photo');
            $unique_name = md5(time().rand()). '.'.$file->getClientOriginalExtension();
            $file->move(public_path('media/about_image/'),$unique_name);

            if ( file_exists(public_path('media/about_image/').$request->old_photo))
            {
                //photo delete
                unlink(public_path('media/about_image/').$request->old_photo);
            }

        }

        $update_data -> photo = $unique_name;
        $update_data->update();

        return redirect()->route('about.index')->with('success','Information updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = About::find($id);
        $data -> delete();

        //photo delete
        unlink(public_path('media/about_image/').$data->photo);

        return redirect()->route('about.index')->with('success','About Deleted Successful!');
    }
    public function statusChange($id){
        $data = About::find($id);
        if (  $data -> status == 0)
        {
            // all data unpublished starts

            $all_data = About::all();
            foreach( $all_data  as $temp )
            {
                $temp2 = About::find($temp->id);
                if( $data -> id == $temp2 ->id)
                {
                    $temp2 ->status = 1;
                    $temp2 -> update();
                }
                else{
                    $temp2 ->status = 0;
                    $temp2 -> update();
                }

            }
            return redirect()->back()->with('success', 'Successfully published');
            // all data unpublished ends

        }

        elseif (  $data -> status == 1)
        {


            $data->status = 0;
            $data->update();

            return redirect()->back()->with('success', 'Successfully unpublished');
        }
    }
}
