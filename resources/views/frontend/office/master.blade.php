<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
@include('frontend.office.head')
@include('frontend.office.header')


<!--
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery">



@yield('content')







@include('frontend.office.contact')





	<!--=== Style Switcher ===-->
	

	<!-- JS Global Compulsory -->
	<script src="{{url('office/assets/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{url('office/assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
	<script src="{{url('office/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- JS Implementing Plugins -->
	<script src="{{url('office/assets/plugins/smoothScroll.js')}}"></script>
	<script src="{{url('office/assets/plugins/jquery.easing.min.js')}}"></script>
	<script src="{{url('office/assets/plugins/pace/pace.min.js')}}"></script>
	<script src="{{url('office/assets/plugins/jquery.parallax.js')}}"></script>
	<script src="{{url('office/assets/plugins/counter/waypoints.min.js')}}"></script>
	<script src="{{url('office/assets/plugins/counter/jquery.counterup.min.js')}}"></script>
	<script src="{{url('office/assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
	<script src="{{url('office/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js')}}"></script>
	<script src="{{url('office/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js')}}"></script>
	<script src="{{url('office/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{url('office/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{url('office/assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
	<!-- JS Page Level-->
	<script src="{{url('office/assets/js/one.app.js')}}"></script>
	<script src="{{url('office/assets/js/forms/login.js')}}"></script>
	<script src="{{url('office/assets/js/forms/contact.js')}}"></script>
	<script src="{{url('office/assets/js/plugins/pace-loader.js')}}"></script>
	<script src="{{url('office/assets/js/plugins/owl-carousel.js')}}"></script>
	<script src="{{url('office/assets/js/plugins/style-switcher.js')}}"></script>
	<script src="{{url('office/assets/js/plugins/revolution-slider.js')}}"></script>
	<script src="{{url('office/assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js')}}"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
			App.initCounter();
			App.initParallaxBg();
			LoginForm.initLoginForm();
			ContactForm.initContactForm();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
			RevolutionSlider.initRSfullScreen();
		});
	</script>
	<!--[if lt IE 9]>
		<script src="{{url('office/assets/plugins/respond.js')}}"></script>
		<script src="{{url('office/assets/plugins/html5shiv.js')}}"></script>
		<script src="{{url('office/assets/js/plugins/placeholder-IE-fixes.js')}}"></script>
		<script src="{{url('office/assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js')}}"></script>
	<![endif]-->

	<!--[if lt IE 10]>
		<script src="{{url('office/assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js')}}"></script>
	<![endif]-->
</body>
</html>
