		<!--Header-->
		<div class="header">
			<div class="bd-example">
			  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			    <div class="carousel-inner">
			    	<ol class="carousel-indicators">
@foreach($sliders as $key => $slide)
			      <li data-target="#carouselExampleCaptions" data-slide-to="{{ $key }}" class="@if($key == 0)active @endif"></li>		    
@endforeach
</ol>
@foreach($sliders as $key => $slide)
			      <div class="carousel-item @if ($key == 0 ) active @endif" id="carousel-block">
			        <img src="{{ asset('img/'.$slide['img']) }}" class="d-block w-100" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			          <h1>{{ $slide['preview'] }}</h1>
			          <p>{!! $slide['text'] !!}</p>
			        </div>
			      </div>
@endforeach
			    </div>
@if($key >= 1)
			    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			      <span class="carousel-control-next-icon" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
			    </div>
			</div>
@else
			  </div>
			</div>
@endif

		<!--Header end-->