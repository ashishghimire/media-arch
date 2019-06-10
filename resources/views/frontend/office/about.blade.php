<!--  About Section -->
<section id="about" class="about-section section-first">
	<div class="content-lg bg-grey">
		<div class="container">
			<div class="title-v1">
				<h2>{{$titledescription2->title}}</h2>
				<p>{!!$titledescription2->description!!}</p>
			</div>

			<div class="row">
				<div class="col-md-6 content-boxes-v3 margin-bottom-40">
					@foreach($about1 as $row)
					<div class="clearfix margin-bottom-30">
						<i class="icon-custom rounded-x icon-bg-u fas fa-check-double"></i>
						<div class="content-boxes-in-v3">
							<h2 class="heading-sm">{{$row->title}}</h2>
							<p>{!! str_limit($row->description, 150) !!}</p>
						</div>
					</div>

					@endforeach
				</div>

				<div class="col-md-6">
					<img class="img-responsive" src="{{url('uploads/',$photo2->image)}}" alt="about">
				</div>
			</div>
		</div>
	</div>

	<div class="block-v1">
		<div class="container">
			<div class="row content-boxes-v3 ">
				@foreach($about as $row)
				<div class="col-md-4 md-margin-bottom-30">
					<i class="{{$row->icon}}"></i>
					<div class="content-boxes-in-v3">
						<h2 class="heading-sm">{{$row->title}}</h2>
						<p>{!! str_limit($row->description, 160) !!} </p>
						<span class="page-scroll">
							<a href="{{url('/singlepage1',$row->id)}}" class="btn-brd btn-brd-hover btn-u-dark">
								Learn More <i class="fas fa-angle-double-right"></i>
							</a>
						</span>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<div class="parallax-quote parallaxBg">
		<div class="container">
			<div class="parallax-quote-in">
				<p>{{$titledescription3->title}}.</p>
			</div>
		</div>
	</div>

	<div class="team-v1 bg-grey content-lg" id="team">
		<div class="container">
			<div class="title-v1">
				<h2> Our Team</h2>
			</div>
			<ul class="list-unstyled row">
				@foreach($team as $row)
				<li class="col-sm-4 col-xs-6 col-md-2 team-list">
					<div class="team-img">
						<img class="img-responsive team-image" src="{{url('uploads/'.$row->image)}}" alt="">
					</div>
					<a data-toggle="modal" class="team-name" data-target="{{'#exampleModalCenter'.$row->id}}">
						<h3 style="">{{$row->name}}</h3>
					</a>
					<!-- Team Modal -->
					<div class="modal fade team-modal" id="{{'exampleModalCenter'.$row->id}}" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content modal-content-v1">
								<div class="row">
									<div class="col-md-z12 col-xs-12">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<i class="far fa-times-circle"></i>
										</button>
									</div>
									<div class="col-md-12 col-xs-12">
										<img class="img-responsive rounded-x" src="{{url('uploads/'.$row->image)}}" alt="">
									</div>
									<div class="modal-title col-md-12" style="margin-top: 10px;">
										<p class="modal-title text-center m-t-3" id="{{'exampleModalCenter'.$row->id}}">
											{{$row->name}}
										</p>
										<p class="text-center">
											({{$row->position}})
										</p>
										<hr />
									</div>
									<div class="col-md-12" style="margin-bottom: 20px;">
										<p style="padding: 0 30px">
											{{$row->description}}
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Of Modal -->
					<h4>{{$row->position}}</h4>
				</li>
				@endforeach
			</ul>
		</div>
	</div>


</section>
<!--  About Section -->