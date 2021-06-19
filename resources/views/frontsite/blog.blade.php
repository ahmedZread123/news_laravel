@extends('frontsite.layout.index_layout')
@section('title')
    Blog
@endsection
@section('contact')
    
<body>



<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                </div>
                @foreach ($post3 as $post33)
                    
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="{{asset('post_image/'.$post33->image)}}" alt="image"/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="{{route('single',$post33->id)}}" class="fh5co_magna py-2">{{$post33->title}}
                         </a> <a href="{{route('single',$post33->id)}}" class="fh5co_mini_time py-3">@auth
                            {{Auth::user()->name}}
                         @endauth  
                        {{$post33->created_at}} </a>
                        <div class="fh5co_consectetur">{{$post33->body}}
                        </div>
                    </div>
                </div>
                @endforeach
              
             
            </div>
          {{-- sedpare  --}}
          @include('frontsite.layout.sedpare') 

        </div>


        <div class="">
            {{ $post3->links() }}

        </div>
   



    </div>
</div>


{{-- Trending  --}}
@include('frontsite.layout.trending')
@endsection
