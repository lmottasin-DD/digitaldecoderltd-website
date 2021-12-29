<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutFeature;
use App\Models\Front;
use App\Models\Service;
use App\Models\Admin\Quote;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    //Home Page Controller Here..........

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

    //About Page Controller Here..........

    public function about()
    {
        $aboutItem = About::where('status', 1)->latest()->first();
        $featureItem = AboutFeature::where('status', 1)->limit(4)->latest()->get();
        return view('front.about', compact('aboutItem', 'featureItem'));
    }

    //Service Page Controller Here..........

    public function service()
    {
        $serviceItem = Service::where('status', 1)->limit(6)->latest()->get();
        $serviceFeature = AboutFeature::where('status',1)->first();

        return view('front.service',compact('serviceItem','serviceFeature'));
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
