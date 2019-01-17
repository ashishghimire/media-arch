<!--  About Section -->
	<section id="about" class="about-section section-first">
		<div class="block-v1">
			<div class="container">
				<div class="row content-boxes-v3 ">
					@foreach($about as $row)
					<div class="col-md-4 md-margin-bottom-30">
						<i class="{{$row->icon}}"></i>
						<div class="content-boxes-in-v3">
							<h2 class="heading-sm">{{$row->title}}</h2>
							<p>{!! str_limit($row->description, 150) !!}</p>

						</div>
						<span class="page-scroll"><a href="{{url('/singlepage1',$row->id)}}" class="btn-brd btn-brd-hover btn-u-dark" style=" color: grey;">Learn More</a></span>

					</div>
					@endforeach


				</div>
			</div>
		</div>

		<div class="about-image bg-grey">
			<div class="container">
				<div class="title-v1">
					<h1>OUR VISION AND MISSION</h1>
					<p>We meet and get to know you. You tell us and we listen. We build your website to realise your vision and we deliver the ready product.

</p>
					</div>
					<div class="img-center">
						<img class="img-responsive" src="{{url('uploads/',$photo1->image)}}" alt="">
					</div>
				</div>
		</div>

		<div class="container content-lg">
			<div class="title-v1">
				<h2>{{$titledescription2->title}}</h2>
				<p>{!!$titledescription2->description!!}</p>
			</div>

			<div class="row">
				<div class="col-md-6 content-boxes-v3 margin-bottom-40">
					@foreach($about1 as $row)
					<div class="clearfix margin-bottom-30">
						<i class="icon-custom rounded-x icon-bg-u fa fa-lightbulb-o"></i>
						<div class="content-boxes-in-v3">
							<h2 class="heading-sm">{{$row->title}}</h2>
							<p>{!! str_limit($row->description, 70) !!}</p>
						</div>
					</div>

					@endforeach
				</div>

				<div class="col-md-6">
					<img class="img-responsive" src="{{url('uploads/',$photo2->image)}}" alt="">
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

		<div class="team-v1 bg-grey content-lg">
			<div class="container">
				<div class="title-v1">
					<h2> Our Team</h2>
				
				</div>

				<ul class="list-unstyled row">

					@foreach($team as $row)
					<li class="col-sm-3 col-xs-6">
						<div class="team-img">
							<img class="img-responsive" src="{{url('uploads/'.$row->image)}}" alt="">
							<ul>
								<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<h3>{{$row->name}}</h3>
						<h4>/ {{$row->position}}</h4>
						<p>{{$row->description}}</p>
					</li>
					@endforeach
				</ul>
			</div>
		</div>


	</section>
	<!--  About Section -->