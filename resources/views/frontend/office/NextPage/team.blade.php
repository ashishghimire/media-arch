@extends('frontend.office.master')
@section('content')
		<div class="team-v1 bg-grey content-lg">
			<div class="container">
				<div class="title-v1">
					<h2>{{$titledescription4->title}}</h2>
					<p>{!!$titledescription4->description!!}</p>
				</div>

				<ul class="list-unstyled row">

					@foreach($team as $row)
					<li class="col-sm-3 col-xs-4">
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
		@endsection