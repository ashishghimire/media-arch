<!-- News Section -->
	<section id="news" class="news-section">
		<div class="container content-lg">
			<div class="title-v1">
				<h2>BLOGS</h2>
			</div>

			<div class="row news-v1">
						@foreach($blog1 as $row)
							<div class="col-md-4 item active">
								<div class="news-v1-in">
									<img class="img-responsive" src="{{('images/background'.'/'.$row->image)}}" alt="" style="height: 293px; width: 100%;">
									<h3><a href="{{route('frontend.singlepagenews', $row->id)}}">{{$row->title}}</a></h3>
									<p>{!! str_limit($row->description, 40) !!}</p>
									<ul class="list-inline news-v1-info">
									<li style="color:#2e302c"><span>By</span> {{$row->user->first_name}} {{$row->user->last_name}}</li>
										<li>|</li>
										<li><i class="far fa-clock"></i> {{$row->updated_at->diffForHumans()}}</li>
										{{-- <li class="pull-right"><i class="far fa-comments"></i> 22</li> --}}
									</ul>
								</div>
							</div>
						@endforeach
				</div>	
			</div>
		</div>

		<div class="call-action-v1 bg-grey">
			<div class="container">
				<div class="call-action-v1-box">
					{{-- <div class="call-action-v1-in">
						<p>Click the button to see more blogs.</p>
					</div> --}}
					<div class="call-action-v1-in inner-btn page-scroll" style="text-align: center;">
						<a href="/news" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-block">More Blogs </a>
					</div>
				</div>
			</div>
		</div>

		<div class="parallax-twitter parallaxBg">
			<div class="container parallax-twitter-in">
				<div class="margin-bottom-30">
					<i class="icon-custom rounded-x icon-bg-orange fas fa-user-tie"></i>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<ul class="list-unstyled owl-twitter-v1">

							@foreach($breakingnews as $row)
							<li class="item">
								<p>{!! str_limit($row->description, 150) !!}</a></p>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End News Section -->