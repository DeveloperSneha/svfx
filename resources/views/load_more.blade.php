<div class="cbp-loadMore-block1">
	@foreach($portfolios as $portfolio)    
    <div class="cbp-item {{$portfolio->service->slug}}">
      <div class="cbp-slider-inline">
        <div class="cbp-slider-wrapper">
          <div class="cbp-slider-item cbp-slider-item--active" style="height: 400px; ">
            <a href="{{asset('img/logos/'.$portfolio->image)}}" class="cbp-lightbox">
              <img src="{{asset('img/logos/'.$portfolio->image)}}" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>