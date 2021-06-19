@extends('frontsite.layout.index_layout')
@section('title')
    single
@endsection
@section('contact')
<body class="single">


<div id="fh5co-title-box" style="background-image: url({{asset('post_image/'.$post->image)}}); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">
        <img src="{{asset('post_image/'.$post->image)}}" alt="Free HTML5 by FreeHTMl5.co">
        <span>{{$post->created_at}}</span>
        <h2>{{$post->title}}</h2>
    </div>
</div>

<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <p>
                    {{$post->body}}
                </p>
            </div>
            {{-- sedpare --}}
  @include('frontsite.layout.sedpare') 
        </div>
    </div>
</div>


{{-- Trending  --}}
@include('frontsite.layout.trending')
@endsection