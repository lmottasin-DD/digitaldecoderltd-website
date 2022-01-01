<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Testimonial::latest()->paginate(15);

        return view('backend.testimonial.index',[
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
        return view('backend.testimonial.create');
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
           'name' => 'required',
           'quote' => 'required',
           'designation' => 'required',
        ]);

        Testimonial::create([
            'name' => $request->name,
            'quote' => $request->quote,
            'designation' => $request->designation,

        ]);

        return redirect()->back()->with('success','Testimonial Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Testimonial::find($id) ;

        return view('backend.testimonial.show',[
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
        $data = Testimonial::find($id);
        return view('backend.testimonial.edit',[
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
        $update_data = Testimonial::find($id);

        $this->validate($request,[
            'name' => 'required',
            'quote' => 'required',
            'designation' => 'required',
        ]);

        $update_data->name = $request->name;
        $update_data->quote = $request->quote;
        $update_data->designation = $request->designation;

        $update_data->update();

        return redirect()->route('testimonial.index')->with('success', 'Testimonial updated successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Testimonial::find($id);

        $data -> delete();

        return redirect()->route('testimonial.index')->with('success','Testimonial deleted successfully!');
    }
    public function statusChange($id){
        $data = Testimonial::find($id);
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
