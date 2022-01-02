<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Portfolio::latest()->paginate(15 );

        return view('backend.portfolio.index',[
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
        return view('backend.portfolio.create');
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
            'photo'=>'required',
            'type'=>'required',
            'link'=>'required'
        ]);
        // photo
        if ( $request->hasFile('photo'))
        {
            $img = $request->file('photo');
            $unique_name = md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img->move(public_path('media/portfolio_image'),$unique_name);
        }
        Portfolio::create([
            'title'=>$request->title,
            'type'=>$request->type,
            'link'=>$request->link,
            'photo'=> $unique_name,

        ]);

        return redirect()->route('portfolio.create')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Portfolio::find($id);

        return view('backend.portfolio.show',[
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
        $data = Portfolio::find($id);
        return view('backend.portfolio.edit',[
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
        $update_data = Portfolio::find($id);

        //validation
        $this->validate($request,[
           'type' => 'required',
           'link' => 'required',
           'title' => 'required',
        ]);




        $update_data->title = $request->title;
        $update_data->link = $request->link;
        $update_data->type = $request->type;





        $unique_name = $request->old_photo;

        if ( $request->hasFile('new_photo')){

            $file = $request->file('new_photo');
            $unique_name = md5(time().rand()). '.'.$file->getClientOriginalExtension();
            $file->move(public_path('media/portfolio_image/'),$unique_name);

            if ( file_exists(public_path('media/portfolio_image/').$request->old_photo))
            {
                //photo delete
                unlink(public_path('media/portfolio_image/').$request->old_photo);
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
        $data = Portfolio::find($id);
        $data -> delete();

        //photo delete
        unlink(public_path('media/portfolio_image/').$data->photo);

        return redirect()->route('portfolio.index')->with('success','Deleted Successful!');
    }
    public function statusChange($id){
        $data = Portfolio::find($id);
        if (  $data -> status == 0)
        {


            $data->status = 1;
            $data->update();

            return redirect()->back()->with('success', 'Successfully published');
        }

        elseif (  $data -> status == 1)
        {


            $data->status = 0;
            $data->update();

            return redirect()->back()->with('success', 'Successfully unpublished');
        }
    }
}
