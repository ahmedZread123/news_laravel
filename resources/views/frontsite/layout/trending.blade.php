<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            @foreach ($post1 as $post1)
                
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="{{asset('post_image/'.$post1->image)}}" alt=""
                                                           class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="{{route('single',$post1->id)}}" class="text-white"> {{$post1->title}}</a>
                        <div class="fh5co_latest_trading_date_and_name_color">@auth
                            {{Auth::user()->name}}
                        @endauth  - {{$post1->created_at}}</div>
                    </div>
                </div>
            </div>
            @endforeach
            
          
        </div>
    </div>
</div>