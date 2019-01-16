@extends('frontend.office.master')
@section('content')
<!--  About Section -->
	<section  class="about-section section-first">
		<div class="block-v1">
<div class="title-v1">
				<h2>WE ARE MEDIA ARCH INC.</h2>
			<div class="row service-box-v1">
				<p>Unify creative technology company providing key digital services. 


Focused on helping our clients to build a successful business on web and mobile.</p>
			</div>
			</div>
			<div class="container">
				<div class="row content-boxes-v3 ">
					<div class="row service-box-v1">
					@foreach($about1 as $row)
					<div class="col-md-12 col-sm-12">
						<div class="service-block service-block-default">
							<a  href="{{url('/singlepage',$row->id)}}">
								<h2  class="heading-lg" style=" color: green;">{!! str_limit($row->title,50) !!}</h2>
							<p>{!! $row->description!!}</p>
						</a>

						</div>
					</div>
					@endforeach
				</div>


				</div>
			</div>
		</div>


		<div class="container content-lg">

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
					<p>"IF YOU CAN DESIGN ONE THING YOU CAN DESIGN EVERYTHING. JUST BELIEVE IT."</p>

				</div>
			</div>
		</div>



	</section>
	<!--  About Section -->
@endsection