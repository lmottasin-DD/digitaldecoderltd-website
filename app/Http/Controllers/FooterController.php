<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\UsefulLinks;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Footer::find(1);

        return view('backend.footer.index',[
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
        return view('backend.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $data = Footer::
        //validation
        $this->validate($request,[
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'logo'=>'required'
        ]);
        // photo
        if ( $request->hasFile('logo'))
        {
            $img = $request->file('logo');
            $unique_name = md5(time().rand()).'.'.$img->getClientOriginalExtension();
            $img->move(public_path('media/footer_image'),$unique_name);
        }

        Footer::create([
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'facebook_link'=>$request->facebook_link,
            'linkedin_link'=>$request->linkedin_link,
            'instagram_link'=>$request->instagram_link,
            'twitter_link'=>$request->twitter_link,
            'youtube_link'=>$request->youtube_link,
            'logo'=> $unique_name,

        ]);

        return redirect()->back()->with('success','Added Successfully!');
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
    public function edit($id=1)
    {

        $data = Footer::find($id);

        return view('backend.footer.edit',[
            'all_data' => $data,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=1)
    {
        $update_data = Footer::find($id);



        $update_data->address  = $request->address;
        $update_data->phone  = $request->phone;
        $update_data->email  = $request->email;
        $update_data->facebook_link  = $request->facebook_link;
        $update_data->linkedin_link  = $request->linkedin_link;
        $update_data->instagram_link  = $request->instagram_link;
        $update_data->twitter_link  = $request->twitter_link;
        $update_data->youtube_link  = $request->youtube_link;


        $unique_name = $request->old_photo;

        if ( $request->hasFile('new_photo')){

            $file = $request->file('new_photo');
            $unique_name = md5(time().rand()). '.'.$file->getClientOriginalExtension();
            $file->move(public_path('media/footer_image/'),$unique_name);

            if ( file_exists(public_path('media/footer_image/').$request->old_photo))
            {
                //photo delete
                unlink(public_path('media/footer_image/').$request->old_photo);
            }

        }

        $update_data -> logo = $unique_name;
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
        $data = UsefulLinks::find($id);
        $data -> delete();

        return redirect()->back()->with('success','Deleted successfully!');
    }
    public function load_page(){

        return view('backend.footer.add_useful_links');
    }

    public function add_useful_service(Request $request){
        $data = Footer::find(1);
        //useful links
        $useful = json_decode($data->useful_links);
        array_push($useful, ['title'=> $request-> useful_link_title,  'link'=> $request->useful_link_weblink ]);

        $data -> useful_links = json_encode($useful);

        // our service
        $service = json_decode($data->our_service);
        array_push($service,['title'=> $request-> our_service_title,  'link'=> $request->our_service_weblink ]);

        $data -> our_service = json_encode( $service);

        $data->update();
        return redirect()->back()->with('success','Updated Successfully');
    }

    public  function add_useful(Request $request){
        $this->validate($request,[
            'useful_link_title' => 'required',
            'useful_link_weblink' => 'required',
        ]);

        UsefulLinks::create([
           'title'=>$request-> useful_link_title,
           'links'=>$request-> useful_link_weblink,
        ]);

        return redirect()->back()->with('success','inserted successfully');
    }
    public function showAllUseful(){

        $data = UsefulLinks::latest()->paginate(15);

        return view('backend.footer.showAllUseful',[
            'all_data' => $data,
        ]);
    }


}
