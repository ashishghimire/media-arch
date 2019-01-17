<!-- Services Section -->
	<section id="services">
		<div class="container content-lg">
			<div class="title-v1">
						<h2>Services
				</h2>
			
				</div>

				<div class="row service-box-v1">
					@foreach($ourservice as $row)
					<div class="col-md-4 col-sm-6">
						<div class="service-block service-block-default">
							<img style="" class="img-circle img-responsive" src="{{url('uploads'.'/'.$row->image)}}" alt=""> <br><br>
							<i class="{{$row->icon}}"></i>
							<a  href="{{url('/singlepage',$row->id)}}">
								<h2  class="heading-lg" style=" color: green;">{!! str_limit($row->title,50) !!}</h2>
							<p>{!! str_limit($row->description, 250) !!}</p>
						</a>

						

						</div>
					</div>
				@endforeach
		
				
				</div>
				
				
		</div>

		

		<div class="call-action-v1">
			<div class="container">
				<div class="call-action-v1-box">
					<div class="call-action-v1-in">
						<p>Unify creative technology company providing key digital services and focused on helping our clients to build a successful business on web and mobile.</p>
					</div>
					<div class="call-action-v1-in inner-btn page-scroll">
						<a href="#portfolio" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-block">View Our Portfolio</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section -->