@extends('frontend.office.master')
@section('content')
<!-- Portfolio Section -->
<section id="portfolio" class="about-section intro">
	<div class="container content-lg">
		<ul class="breadcrumb" style="margin-top: 60px; background:#f3f3f3;">
			<li><a href="/">Home</a></li>
			<li class="active">Portfolio</li>
		</ul>

		<div class="cube-portfolio">
			<div id="grid-container" class="cbp-l-grid-gallery">
				@foreach($portfolio as $row)
				<div class="cbp-item print motion" style="border:1px solid #f3f3f3">
					@if($row->id == 2)
					@include('frontend.partials.portfolio1')
					@elseif($row->id == 3)
					@include('frontend.partials.portfolio2')
					@elseif($row->id == 4)
					@include('frontend.partials.portfolio3')
					@elseif($row->id == 5)
					@include('frontend.partials.portfolio4')
					@elseif($row->id == 6)
					@include('frontend.partials.portfolio5')
					@elseif($row->id == 7)
					@include('frontend.partials.portfolio6')
					@elseif($row->id == 8)
					@include('frontend.partials.portfolio7')
					@elseif($row->id == 9)
					@include('frontend.partials.portfolio8')
					@elseif($row->id == 10)
					@include('frontend.partials.portfolio9')
					@else
					"Hi"
					@endif

				</div>
				@endforeach
			</div>

			<div class="cbp-l-loadMore-button">
				<a href="office/assets/ajax/loadMore.html" class="cbp-l-loadMore-button-link">LOAD MORE</a>
			</div>
		</div>
	</div>




</section>
<!-- End Portfolio Section -->
@endsection