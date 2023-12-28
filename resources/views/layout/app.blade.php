<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ url('new/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('new/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('new/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('new/css/swiper.css') }}" type="text/css" />

	<!-- Crowdfunding Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ url('new/demos/crowdfunding/crowdfunding.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('new/demos/crowdfunding/css/fonts.css') }}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ url('new/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('new/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('new/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ url('new/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

	<link rel="stylesheet" href="{{ url('new/css/colors.php?color=209EBB') }}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Alive Nigeria</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	{{-- <div id="wrapper" class="clearfix">

		<!-- Login/Register Modal -->
		<div class="modal-register mfp-hide" id="modal-register">
			<div class="card mx-auto" style="max-width: 400px;">
				<div class="card-header py-3 bg-transparent center">
					<h3 class="mb-0 fw-normal">Hello, Welcome Back</h3>
				</div>
				<div class="card-body mx-auto p-5">

					<form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">

						<div class="col-12">
							<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" placeholder="Username" />
						</div>

						<div class="col-12 mt-4">
							<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" placeholder="Password" />
						</div>

						<div class="col-12 text-end mt-2">
							<a href="#" class="text-dark fw-light text-smaller">Forgot Password?</a>
						</div>

						<div class="col-12 mt-4">
							<button class="button w-100 m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
						</div>
					</form>
				</div>
				<div class="card-footer py-4 center">
					<p class="mb-0">Don't have an account? <a href="#"><u>Sign up</u></a></p>
				</div>
			</div>
		</div> --}}

		<!-- Header
		============================================= -->
		@include('layouts.nav')
		<br><br><br>

        @yield('content')



		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background-color: #0d2706">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap pb-4">

					<div class="row">

						{{-- <div class="col-lg-2 col-md-2 col-6">
							<div class="widget">

								<h4 class="ls0 mb-4 nott">Features</h4>

								<ul class="list-unstyled iconlist ms-0">
									<li class="mb-2"><a href="#">Help Center</a></li>
									<li class="mb-2"><a href="#">Paid with Moblie</a></li>
									<li class="mb-2"><a href="#">Status</a></li>
									<li class="mb-2"><a href="#">Changelog</a></li>
									<li class="mb-2"><a href="#">Contact Support</a></li>
								</ul>

							</div>
						</div> --}}
	<div class="col-md-3 col-lg-12">
		<div class="widget clearfix" style="margin-bottom: -20px;">

		<div class="row">

			<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
					<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
					<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
					</a>
				<a href="https://web.facebook.com/alivenigeria"><small style="display: block; margin-top: 3px;"><strong>Follow us</strong><br>on Facebook</small></a>
					</div>

<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
					<a href="#" class="social-icon si-dark si-colored si-twitter mb-0" style="margin-right: 10px;">
					<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
					</a>
				<a href="https://twitter.com/i/flow/login?redirect_after_login=%2FALIVENIGERIA1"><small style="display: block; margin-top: 3px;"><strong>Follow us</strong><br>on Twitter</small></a>
					</div>

				<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
					<a href="#" class="social-icon si-dark si-colored si-instagram mb-0" style="margin-right: 10px;">
					<i class="icon-instagram"></i>
					<i class="icon-instagram"></i>
					</a>
				<a href="https://www.instagram.com/alive.nigeria/"><small style="display: block; margin-top: 3px;"><strong>Follow us</strong><br>on Instagram</small></a> 
				</div>

					<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
					<a href="#" class="social-icon si-dark si-colored si-youtube mb-0" style="margin-right: 10px;">
					<i class="icon-youtube"></i>
								<i class="icon-youtube"></i>
					</a>
				<a href="https://www.youtube.com/user/AlivenigeriaSDA"><small style="display: block; margin-top: 3px;"><strong>Follow and Subscribe to us</strong><br>on Youtube</small></a>
					
				</div>

			<div class="col-12">
				<div class="footer-big-contacts">
					<span>Call Us:</span>
					+2348126922488

			<div class="col-12">
				<div class="footer-big-contacts">
					<span>Send an Email:</span>
					 info@alivenigeria.org
			</div>
				</div>
			</div>
				
			
				</div>
			</div>

		</div>
	</div>


		</div>


				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row justify-content-between align-items-center">
						<div class="col-md-6">
							Copyrights &copy; 2023 All Rights Reserved by Alive-Nigeria.
						</div>

						<div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
							<div class="copyrights-menu copyright-links">
								<a href="https://alivenigeria.org/blogs">Blog</a>/<a href="https://alivenigeria.org/chapters">Chapters</a>/<a href="https://alivenigeria.org/faqs">FAQs</a>/<a href="#">Contact</a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-line-arrow-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ url('new/js/jquery.js') }}"></script>
	<script src="{{ url('new/js/plugins.min.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ url('new/js/functions.js') }}"></script>

	<!-- ADD-ONS JS FILES -->
	<script>



	</script>

</body>
</html>
