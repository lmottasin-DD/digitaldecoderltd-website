<?php

namespace App\Http\Controllers;

use App\Models\Front;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $sliderItem = Slider::where('status',1)->latest()->get();
        // return $sliderItem;
        return view('front.index',compact('sliderItem'));
    }

    public function showRead($slug){
       
        $readSlug = Slider::where("slug",$slug)->first();

        return view('front.readmore',compact('readSlug'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function service()
    {
        return view('front.service');
    }

    public function testimonial()
    {
        return view('front.testimonial');
    }

    public function portfolio()
    {
        return view('front.portfolio');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function blog()
    {
        return view('front.blog');
    }
}
