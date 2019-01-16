@extends('frontend.office.master')
@section('content')
<!-- Services Section -->
	<section id="services">
		<div class="container content-lg">
			<div class="title-v1">
				<h2>{{$titledescription5->title}}</h2>
				<p>{!!$titledescription5->description!!}</p>
				</div>

				<div class="row service-box-v1">
					@foreach($ourservice as $row)
					<div class="col-md-4 col-sm-6">
						<div class="service-block service-block-default">
							<i class="{{$row->icon}}"></i>
							<img class="img-responsive" src="{{url('uploads/'.$row->image)}}" alt="">
							<a  href="{{url('/singlepage',$row->id)}}">
								<h2  class="heading-lg" style=" color: green;">{!! str_limit($row->title,50) !!}</h2>
							<p>{!! str_limit($row->description, 250) !!}</p>
						</a>

						</div>
					</div>
					@endforeach
				</div>
		</div>

		{{-- <ul class="list-unstyled row portfolio-box-v1">

			@foreach($ourservice1 as $row)
			<li class="col-sm-4">
				<img class="img-responsive" src="{{url('uploads'.'/'.$row->image)}}" alt="">
				<div class="portfolio-box-v1-in">
					<h3>{{$row->title}}</h3>
					<p>{!!$row->description!!}</p>
					<a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#">Read More</a>
				</div>
			</li>
			@endforeach
		</ul>

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
		</div> --}}
	</section>
	<!-- End Services Section -->
@endsection