<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = Contact::latest()->paginate(15);

        return view('backend.contact.index',[
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
        return view('backend.contact.create');
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
            'location' => 'required',
            'email' => 'required',
            'call' => 'required'
        ]);

        Contact::create([
            'location'=> $request->location,
            'email' => $request->email,
            'call' => $request->call,

        ]);

        return redirect()->back()->with('success', 'Data inserted successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single_data = Contact::find($id);
        return view('backend.contact.edit',[
           'single_data' => $single_data,
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
           'location'=>'required',
           'email' => 'required',
           'call' => 'required',
        ]);
        $update_data = Contact::find($id);

        $update_data-> location = $request->location;
        $update_data-> email = $request->email;
        $update_data-> call = $request->call;

        $update_data-> update();

        return redirect()->back()->with('success','Information Updated Successfullly');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Contact::find($id);
        $data -> delete();

        return redirect()->route('contact.index')->with('success','Contact Deleted Successfully!');
    }

    public function statusChange($id){
        $data = Contact::find($id);
        if (  $data -> status == 0)
        {
            // all data unpublished starts

            $all_data = Contact::all();
            foreach( $all_data  as $temp )
            {
                $temp2 = Contact::find($temp->id);
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
            return redirect()->back()->with('success', 'Successfully published.' );
            // all data unpublished ends

        }

        elseif (  $data -> status == 1)
        {


            $data->status = 0;
            $data->update();

            return redirect()->back()->with('success', 'Successfully unpublished.' );
        }
    }
}
