<?php

namespace App\Http\Controllers;

use App\Models\Front;
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
        return view('front.service');
    }

    public function testimonial(){
        return view('front.testimonial');
    }

    public function portfolio(){
        return view('front.portfolio');
    }

    public function contact(){
        return view('front.contact');
    }

    public function blog(){
        return view('front.blog');
    }
    public function index()
    {
        $all_data = Slider::where('status','=',1)->get();
//        return $all_data;

        return view('front.index',[
            'all_data'=>$all_data,
        ]);
    }
}
