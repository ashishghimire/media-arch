@extends('frontend.office.master')
@section('content')
<!-- News Section -->
	<section id="news" class="news-section">
		<div class="container content-lg">
			<div class="title-v1">
				<h2>{{$titledescription6->title}}</h2>
				<p>{!!$titledescription6->description!!}</p>
			</div>

			<div class="row news-v1">

				@foreach($blog1 as $row)
				<div class="col-md-4">
					<div class="news-v1-in">
						<img class="img-responsive" src="{{url('office/assets/img/contents/img3.jpg')}}" alt="">
						<h3><a href="#">{{$row->title}}</a></h3>
						<p>{!! str_limit($row->description, 30) !!}</p>
						<ul class="list-inline news-v1-info">
							<li><span>By</span> <a href="#">{{$row->user->first_name}}</a></li>
							<li>|</li>
							<li><i class="fa fa-clock-o"></i> {{$row->updated_at->diffForHumans()}}</li>
							<li class="pull-right"><a href="#"><i class="fa fa-comments-o"></i> 22</a></li>
						</ul>
					</div>
				</div>

			@endforeach
			</div>



		</div>
	</section>
	<!-- End News Section -->
@endsection