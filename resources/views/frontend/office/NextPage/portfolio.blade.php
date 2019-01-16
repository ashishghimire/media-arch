@extends('frontend.office.master')
@section('content')
<!-- Portfolio Section -->
	<section id="portfolio" class="about-section">
		<div class="container content-lg">
			<div class="title-v1">
				<h2>{{$titledescription7->title}}</h2>
				<p>{!!$titledescription7->description!!}</p>
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




	</section>
	<!-- End Portfolio Section -->
@endsection