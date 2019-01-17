<!-- Portfolio Section -->
	<section id="portfolio" class="about-section">
		<div class="container content-lg">
			<div class="title-v1">
				<h2>Portfolio
				</h2>
			
			</div>


			<div class="cube-portfolio">

				<div id="grid-container" class="cbp-l-grid-gallery">
					@foreach($portfolio as $row)
					<div class="cbp-item print motion">
						<a href="assets/ajax/project1.html" class="cbp-caption cbp-singlePageInline"
						data-title="World Clock Widget<br>by Paul Flavius Nechita">
							<div class="cbp-caption-defaultWrap">
								<img src="{{url('uploads'.'/'.$row->image)}}" alt="">
							</div>
							<div class="cbp-caption-activeWrap">
								<div class="cbp-l-caption-alignLeft">
									<div class="cbp-l-caption-body">
										<div class="cbp-l-caption-title">{{$row->title}}</div>
										<div class="cbp-l-caption-desc">{!! str_limit($row->description, 20) !!}</div>
									</div>
								</div>
							</div>
						</a>
					</div>
						@endforeach
				</div>

				<div class="cbp-l-loadMore-button">
					<a href="assets/ajax/loadMore.html" class="cbp-l-loadMore-button-link">LOAD MORE</a>
				</div>
			</div>
		</div>

		<div class="clients-section parallaxBg">
			<div class="container">
				<div class="title-v1">
					<h2>Our Client</h2>
				</div>
				<ul class="owl-clients-v2">
					@foreach($client as $row)
					<li class="item"><a href="#"><img src="{{url('uploads'.'/'.$row->image)}}" alt=""></a></li>
					@endforeach
				</ul>
			</div>
		</div>

		<div class="testimonials-v3">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<ul class="list-unstyled owl-ts-v1">

							@foreach($testimonial as $row)
							<li class="item">
								<img class="rounded-x img-bordered" src="{{url('uploads'.'/'.$row->image)}}" alt="">
								<div class="testimonials-v3-title">
									<p>{{$row->title}}</p>
									<span>{{$row->position}}</span>
								</div>
								<p>{!!$row->description!!}</p>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Portfolio Section -->