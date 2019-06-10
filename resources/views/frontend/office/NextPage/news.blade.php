@extends('frontend.office.master')
@section('content')
<!-- News Section -->
	<section id="news" class="news-section intro">
		<div class="container content-lg">
			<ul class="breadcrumb" style="margin-top: 60px; background:#f3f3f3;">
				<li><a href="/">Home</a></li>
				<li class="active">News</li>
			</ul>

			<div class="row news-v1">

				@foreach($blog1 as $row)
				<div class="col-md-4">
					<div class="news-v1-in">
						<img class="img-responsive" src="{{url('images/background'.'/'.$row->image)}}" alt="" style="height:292px; width:100%;">
						<h3><a href="{{route('frontend.singlepagenews', $row->id)}}">{{$row->title}}</a></h3>
						<p>{!! str_limit($row->description, 30) !!}</p>
						<ul class="list-inline news-v1-info">
							<li><span>By</span> <a href="#">{{$row->user->first_name}}</a></li>
							<li>|</li>
							<li><i class="far fa-clock"></i> {{$row->updated_at->diffForHumans()}}</li>
							{{-- <li class="pull-right"><a href="#"><i class="far fa-comments"></i> 22</a></li> --}}
						</ul>
					</div>
				</div>

			@endforeach
			</div>



		</div>
	</section>
	<!-- End News Section -->
@endsection