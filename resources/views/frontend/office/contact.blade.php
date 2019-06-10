<!-- Contact Section -->
<section id="contact" class="contacts-section">
	<div class="container content-lg">
		<div class="title-v1">
			<h2 id="target">Contact Us</h2>
		</div>

		<div class="row contacts-in">
			<div class="col-md-6 md-margin-bottom-40">
				<ul class="list-unstyled">
					<li><i class="fa fa-home"></i>Shreenath Galli, Kamal Pokhari - 31, Kathmandu</li>
					<li><i class="fa fa-phone"></i> 9851205985</li>
					<li><i class="fa fa-envelope"></i> <a href="info@example.com">info@mediaarchinc.com
						</a></li>
					<li><i class="fa fa-globe"></i> <a href="http://htmlstream.com">www.htmlstream.com</a></li>
				</ul>
			</div>

			<div class="col-md-6">
				<form action="{{url('contact')}}" method="post">
					{{csrf_field()}}
					<fieldset>
						<label>Name</label>
						<div class="row">
							<div class="col-md-7 margin-bottom-20 col-md-offset-0">
								<div>
									<input type="text" name="name" id="name" class="form-control">
								</div>
							</div>
						</div>

						<label>Email <span class="color-red">*</span></label>
						<div class="row">
							<div class="col-md-7 margin-bottom-20 col-md-offset-0">
								<div>
									<input type="text" name="email" id="email" class="form-control">
								</div>
							</div>
						</div>

						<label>Message</label>
						<div class="row">
							<div class="col-md-11 margin-bottom-20 col-md-offset-0">
								<div>
									<textarea rows="8" name="message" id="message" class="form-control"></textarea>
								</div>
							</div>
						</div>

					</fieldset>
					<button type="submit" class="btn btn-primary" style="margin-bottom: 50px;" value="Send">Send</button>

				</form>
			</div>
		</div>
	</div>

	{{-- <div class="copyright-section">
		<div class="row" style='width: 100%'>
			<div class="col-md-4">
				<p style="padding-left: 20px">2019 &copy; Media Arch Inc. </p>
			</div>
			<div class="col-md-8 text-right">
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/mediaarchinc/" data-original-title="Facebook"
							class="social_facebook rounded-x"></a></li>
					<li><a href="https://twitter.com/MediaArchInc" data-original-title="Twitter"
							class="social_twitter rounded-x"></a></li>
					<li><a href="#" data-original-title="Goole Plus" class="social_googleplus rounded-x"></a></li>
					<li><a href="#" data-original-title="Pinterest" class="social_pintrest rounded-x"></a></li>
					<li><a href="https://www.linkedin.com/company/mediaarchinc" data-original-title="Linkedin"
							class="social_linkedin rounded-x"></a></li>
				</ul>
			</div>
		</div>
		<span class="page-top"><i class="fas fa-angle-double-up back-to-top"></i></span>
	</div> --}}
</section>
<!-- End Contact Section -->