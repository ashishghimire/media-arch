<!-- Services Section -->
	<section id="services">
		<div class="container content-lg">
			<div class="title-v1">
				<h2>Services</h2>
			</div>

			<div class="row service-box-v1">
				@foreach($ourservice as $row)
					<div class="col-md-4 col-sm-6">
						<div class="service-block service-block-default">
							<img class="img-responsive"
								src="{{url('uploads'.'/'.$row->icon)}}"
								data-toggle="modal" 
								data-target="{{'#exampleModal'.$row->id}}">
							<a data-toggle="modal" data-target="{{'#exampleModal'.$row->id}}">
								<div>
									<h2 class="heading-lg slider-heading">{!! str_limit($row->title,50) !!}</h2>
								</div>
								<p class="para">{!! str_limit($row->description, 140) !!}</p>
							</a>
							<!-- Service Modal -->
						<div class="modal fade team-modal" id="{{'exampleModal'.$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content modal-content-v2">
									<div class="modal-header" style="border-bottom:2px solid black !important">
										<h1 class="modal-title" id="{{'exampleModals'.$row->id}}">{{$row->title}}</h1>
										{{-- <p>{{$row->position}}</p> --}}
										<button type="button"
												class="close" data-dismiss="modal" aria-label="Close">
											<i class="far fa-times-circle"></i>
										</button>
									</div>
									<div class="modal-body" style="height:auto;">
										<div class="container-fluid col-md-12">
											<img class="img-responsive"src="{{url('uploads'.'/'.$row->icon)}}">	
											<div>
												<p>{!!$row->description!!}</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Of Modal -->
						</div>
					</div>
				@endforeach
			</div>	
		</div>

		<div class="call-action-v1 bg-grey">
			<div class="container">
				<div class="call-action-v1-box">
					<div class="call-action-v1-in">
						<p>Media Arch Inc is actively working for various renouned companies providing them these services since 2015.
							View our portfolio for more details.  </p>
					</div>
					<div class="call-action-v1-in inner-btn page-scroll">
					<a href="{{url('portfolio')}}" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-block">View Our Portfolio</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section -->