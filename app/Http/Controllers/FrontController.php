<?php

namespace App\Http\Controllers;

use App\Models\Front;
use App\Models\Service;
use App\Models\Admin\Quote;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    

    public function index()
    {
        $sliderItem  = Slider::where('status', 1)->latest()->get();

        $quoteItem   = Quote::latest()->first();

        $serviceItem = Service::where('status', 1)->limit(6)->latest()->get();

        return view('front.index', compact('sliderItem', 'quoteItem', 'serviceItem'));
    }

    public function showRead($slug)
    {

        $readSlug = Slider::where("slug", $slug)->first();

        $recentpost = Slider::where('status', 1)->limit(5)->latest()->get();

        return view('front.readmore', compact('readSlug', 'recentpost'));
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
