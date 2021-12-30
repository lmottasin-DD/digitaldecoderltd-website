<?php

namespace App\Http\Controllers;

use App\Models\Cta;
use Illuminate\Http\Request;

class CtaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = Cta::latest()->paginate(10);

            return view('backend.cta.index',[
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
        return view('backend.cta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cta::create([
            'header'=> $request->header,
            'description' => $request->description,

        ]);

        return redirect()->back()->with('success','Cta section added successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Cta::find($id);

        return view('backend.cta.show',['single_data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Cta::find($id);
        return view('backend.cta.edit',[
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
        $update_data = Cta::find($id);


        $update_data->header = $request->header;
        $update_data->description = $request->description;


        $update_data->update();

        return redirect()->route('cta.index')->with('success','Information updated');
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
    public function statusChange($id){
        $data = Cta::find($id);
        if (  $data -> status == 0)
        {
            // all data unpublished starts

            $all_data = Cta::all();
            foreach( $all_data  as $temp )
            {
                 $temp2 = Cta::find($temp->id);
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
            return redirect()->back()->with('success', 'Successfully published the slider with title' . $data->title);
            // all data unpublished ends

        }

        elseif (  $data -> status == 1)
        {


            $data->status = 0;
            $data->update();

            return redirect()->back()->with('success', 'Successfully unpublished the slider with title' . $data->title);
        }
    }
    public function delete($id){
        $data = Cta::find($id);
        $data -> delete();

        return redirect()->route('cta.index')->with('success','Cta Deleted Successful!');
    }
}
