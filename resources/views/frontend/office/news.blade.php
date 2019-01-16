<!-- News Section -->
	<section id="news" class="news-section">
		<div class="container content-lg">
			<div class="title-v1">
				<h2>LATEST NEWS</h2>
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

		<div class="parallax-twitter parallaxBg">
			<div class="container parallax-twitter-in">
				<div class="margin-bottom-30">
					<i class="icon-custom rounded-x icon-bg-blue fa fa-twitter"></i>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<ul class="list-unstyled owl-twitter-v1">

							@foreach($breakingnews as $row)
							<li class="item">
								<p>{!! str_limit($row->description, 150) !!}</a></p>
								<span>30 min ago via <a href="https://twitter.com/htmlstream">@wrapbootstrap</a></span>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End News Section -->