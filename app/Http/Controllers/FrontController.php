<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Cta;
use App\Models\Front;
use App\Models\GetContactInfo;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class FrontController extends Controller
{
    public function about()
    {
        return view('front.about');
    }

    public function service(){

        $data = Service::latest()->get();

        //return $data;
        return view('front.service',[
            'service_data' => $data,
        ]);
    }

    public function testimonial(){
        return view('front.testimonial');
    }

    public function portfolio(){
        return view('front.portfolio');
    }

    public function contact(){

        $data = Contact::where('status',1)->first();

        //return $data;
        return view('front.contact',[
            'all_data' => $data,
        ]);
    }

    public function blog(){
        return view('front.blog');
    }
    public function index()
    {
        $data['all_data'] = Slider::where('status','=',1)->get();

        $data['cta_data'] = Cta::where('status',1)->first();

        $data['service_data'] = Service::where('status',1)->get();
//        return $data;

//        return $cta_data[0];

//        return view('front.index',[
//            'all_data'=>$all_data,
//            'cta_data' => $cta_data[0],
//        ]);
        return view('front.index', $data);
    }

     public function getContactInfo( Request  $request){
        GetContactInfo::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request-> subject,
            'message' => $request-> message,
        ]);
        return redirect()->back()->with('success','Your message has been sent. Thank you!');
     }
}
