<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index(){
        return view('backend.pages.slider.index');
    }

    public function create(){
        return view('backend.pages.slider.create');
    }

    public function store(Request $request){
        $slider = new Slider();
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->link = $request->input('link');
        $slider->link_name = $request->input('link_name');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/slider/',$filename);
            $slider->image = $filename;
        }
        $slider->status =$request->input('status') == true ? '1':'0';
        $slidr->save();
       return redirect()->back()->with('status','Slider Added Successfully!');
    }
}
