<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
    </div>
    <div class="clearfix"></div>
    <div class="fh5co_tags_all">
        <a href="#" class="fh5co_tagg">Business</a>
        <a href="#" class="fh5co_tagg">Technology</a>
        <a href="#" class="fh5co_tagg">Sport</a>
        <a href="#" class="fh5co_tagg">Art</a>
        <a href="#" class="fh5co_tagg">Lifestyle</a>
        <a href="#" class="fh5co_tagg">Three</a>
        <a href="#" class="fh5co_tagg">Photography</a>
        <a href="#" class="fh5co_tagg">Lifestyle</a>
        <a href="#" class="fh5co_tagg">Art</a>
        <a href="#" class="fh5co_tagg">Education</a>
        <a href="#" class="fh5co_tagg">Social</a>
        <a href="#" class="fh5co_tagg">Three</a>
    </div>
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
    </div>
    @foreach ($sed as $item)
        
    <div class="row pb-3">
        <div class="col-5 align-self-center">
            <img src="{{asset('images/download (1).jpg')}}" alt="img" class="fh5co_most_trading"/>
        </div>
        <div class="col-7 paddding">
            <div class="most_fh5co_treding_font"> {{{$item->title}}}.</div>
            <div class="most_fh5co_treding_font_123"> {{{$item->created_at }}}</div>
        </div>
    </div>
    @endforeach


</div>