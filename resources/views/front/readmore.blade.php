@extends('backend.layouts.admin_master')
@section('content')

<img src="{{asset('uploads/slider/'.$readSlug->image)}}" alt="Slider_Image">
<h2>{{$readSlug->title}}</h2>
<p>{{$readSlug->description}}</p>

@endsection