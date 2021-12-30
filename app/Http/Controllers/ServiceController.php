<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = Service::latest()->paginate(15);

        return view('backend.service.index',[
            'all_data'=> $all_data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
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
            'title'=>'required',
            'icon'=>'required',
            'description'=>'required| max:200',
        ]);

        Service::create([
           'title'=> $request->title,
           'icon'=> $request->icon,
           'description' => $request->description,
        ]);

        return redirect()->back()->with('success','Service Added Successful');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Service::find($id);
        return view('backend.service.show',[
            'single_data'=>$data
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
        $data = Service::find($id);

        return view('backend.service.edit',[
            'single_data'=>$data
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
        $update_data = Service::find($id);

        $this->validate($request,[
            'title'=> 'required',
            'icon'=>'required',
            'description'=> 'required|max:200',
        ]);

        $update_data->title = $request->title;
        $update_data-> icon = $request->icon;
        $update_data->description = $request-> description;
        $update_data-> update();

        return redirect()->back()->with('success','Information Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Service::find($id);
        $data -> delete();

        return redirect()->route('service.index')->with('success','Service Deleted Successfully!');
    }
    public function statusChange($id){
        $data = Service::find($id);
        if (  $data -> status == 0)
        {
            $data->status = 1;
            $data->update();
            return redirect()->back()->with('success', 'Successfully information updated!' );
        }
        elseif (  $data -> status == 1)
        {

            $data->status = 0;
            $data->update();
            return redirect()->back()->with('success', 'Successfully information updated');
        }
    }
}
