<?php

namespace App\Http\Controllers;

use App\Models\Front;
use Illuminate\Http\Request;

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
}
