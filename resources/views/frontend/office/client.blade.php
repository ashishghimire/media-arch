<!-- Portfolio Section -->
<section id="client" class="about-section">
	<div class="container content-lg">
		<div class="clients-section parallaxBg">
			<div class="container-fluid">
				<div class="title-v1">
					<h2>Our Client</h2>
				</div>
				<ul class="owl-clients-v2">
					@foreach($client as $row)
					<li class="item"><a href="#"><img src="{{url('office/assets/img/clients'.'/'.$row->image)}}"></a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>

	<div class="testimonials-v3 bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<ul class="list-unstyled owl-ts-v1">
						@foreach($testimonial as $row)
						<li class="item">
							<img class="rounded-x img-bordered" src="{{url('uploads'.'/'.$row->image)}}" alt="">
							<div class="testimonials-v3-title">
								<span>{{$row->name}}</span>
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
<!-- End Of Client Section -->