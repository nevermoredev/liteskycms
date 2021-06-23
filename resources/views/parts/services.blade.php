	
			<!--Services-->
				<h2>SERVICES</h2>
				<div class="services">
					<section>
						<div class="container">
							<div class="row justify-content-center">
@foreach($services as $key => $service)
								<div class="col-12 col-sm-6 col-md-6 col-lg-6" id="bblock-container">
									<div class="some-block-services">
										        <div class="bblock"><img src="{{ asset('img/'.$service['img']) }}" alt=""></div>
										        <div class="bblock">
										        	<p>{{ $service['name'] }}</p>
										        	<p>{{ $service['preview'] }}</p>
										        	<a class="btn btn-outline-info" href="{!! route('view_service',['id' =>$service['id']]) !!}" role="button">View</a>
										        </div>
									</div>	
								</div>
@endforeach					
								</div>
							</div>
					</section>
				</div>
			<!--Services end-->
		</div>
		<!--Content end-->