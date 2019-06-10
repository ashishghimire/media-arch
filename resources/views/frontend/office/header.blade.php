<!--=== Header ===-->
<header class="one-page-header navbar navbar-default navbar-fixed-top" id="top-header" role="navigation"
	style="border-bottom: 1px solid #f4f4f4">
	<div class="container">
		<div class="menu-container page-scroll" style="position:relative">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-brand" href="#intro" style="padding: 20px;">
				<img src="{{url('uploads/logo.png')}}" style="height:80px; width:80px;position:absolute;top:-10px; left: -15px;"
					alt="Logo">
				<p style="position:absolute; left:80px;">
					<span>Media</span> <span style="color: #ff8b40"> Arch Inc.</span>
				</p>
			</div>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<div class="menu-container">
				<ul class="nav navbar-nav">
					<li class="page-scroll home active" data-toggle="tooltip" data-placement="bottom" title="Home">
						<a href="{{url(Request::is('/')? '#': '/')}}">
							<i class="fas fa-home"></i>
							Home
						</a>
					</li>
					<li class="page-scroll" data-toggle="tooltip" data-placement="bottom" title="Know about us!!">
						<a href="#about">
							About Us
						</a>
					</li>
					<li class=" page-scroll" data-toggle="tooltip" data-placement="bottom" title="Meet our team!!">
						<a href="#team">
							<i class="fas fa-users"></i> Team
						</a>
					</li>
					<li class="page-scroll" data-toggle="tooltip" data-placement="bottom" title="Eager about our services?">
						<a href="{{request()->url()==url('/') ? '#services' :url('/#services')}}">
							Services
						</a>
					</li>
					<li class="page-scroll" data-toggle="tooltip" data-placement="bottom" title="Well written blogs!!">
						<a href="#news">
							Blogs
						</a>
					</li>
					<li class="page-scroll" data-toggle="tooltip" data-placement="bottom" title="Our Clients?">
						<a href="#client">
							Our Clients
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</header>
<!--=== End Header ===-->