<?php

namespace App\Http\Controllers;

use App\Models\SubAbout;
use Illuminate\Http\Request;

class SubAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SubAbout::latest()->paginate(15);
        return view('backend.about.sub_about.index',[
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
        return view('backend.about.sub_about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'sub_heading' =>'required',
           'sub_description' =>'required',
           'icon' =>'required',

        ]);

        SubAbout::create([
            'sub_heading' => $request->sub_heading,
            'sub_description' => $request->sub_description,
            'icon' =>$request->icon,
        ]);

        return redirect()->back()->with('success','Sub heading added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = SubAbout::find($id);

        return view('backend.about.sub_about.show',[
            'single_data' => $data,
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
        $data = SubAbout::find($id);
        return view('backend.about.sub_about.edit',[
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
           'sub_heading' => 'required',
            'sub_description' => 'required',
            'icon' => 'required'
        ]);
        $update_data = SubAbout::find($id);

        $update_data->sub_heading = $request->sub_heading;
        $update_data->sub_description = $request->sub_description;
        $update_data->icon = $request->icon;

        $update_data ->update();

        return redirect()->back()-> with('success','Updated Successful!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SubAbout::find($id);
        $data -> delete();



        return redirect()->route('sub-about.index')->with('success','Deleted Successful!');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|void
     */

    public function statusChange($id){
        $data = SubAbout::find($id);
        if (  $data -> status == 0)
        {
            $data->status = 1;
            $data->update();
            return redirect()->back()->with('success', 'Successfully  updated!' );
        }
        elseif (  $data -> status == 1)
        {

            $data->status = 0;
            $data->update();
            return redirect()->back()->with('success', 'Successfully  updated');
        }
    }
}
