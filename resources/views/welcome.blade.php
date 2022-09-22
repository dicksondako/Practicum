<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Veritas Ordering System</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href=" {{ asset('school_order/assets/css/bootstrap-5.0.0-alpha-2.min.css')}}" />
    <link rel="stylesheet" href=" {{ asset('school_order/assets/css/LineIcons.2.0.css')}}" />
    <link rel="stylesheet" href=" {{ asset('school_order/assets/css/animate.css')}}" />
    <link rel="stylesheet" href=" {{ asset('school_order/assets/css/main.css')}}" />
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="ytp-spinner">
          <div class="ytp-spinner-container">
            <div class="ytp-spinner-rotator">
              <div class="ytp-spinner-left">
                <div class="ytp-spinner-circle"></div>
              </div>
              <div class="ytp-spinner-right">
                <div class="ytp-spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<!-- preloader end -->


    <!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                  <img src=" {{ asset('school_order/assets/img/logo/logo.svg') }}" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                            <li class="nav-item">
                                <a href="{{ url('/home') }}">Home</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1 class="wow fadeInUp" data-wow-delay=".2s">
								With Veritas Order System
							</h1>
              <p class="wow fadeInUp" data-wow-delay=".4s">
                you can order for Keke, food and other stuff anywhere on campus.
              </p>
              <div class="hero-btns">
								<a href="https://rebrand.ly/appgrids-gg/" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Login Now</a>
								<a href="https://rebrand.ly/appgrids-gg/" class="main-btn border-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Register Now</a>
							</div>
            </div>
					</div>
					<div class="col-lg-6">
						<div class="hero-img wow fadeInUp" data-wow-delay=".5s">
							<img src=" {{ asset('school_order/assets/img/hero/hero-img.png') }}" alt="">
						</div>
					</div>
        </div>
			</div>
			<div class="hero-shape">
				<img src="assets/img/hero/hero-shape-1.svg" alt="" class="shape shape-1">
			</div>
    </section>
		<!-- ========================= hero-section end ========================= -->

		<!-- ========================= feature-section start ========================= -->
		<section id="feature" class="feature-section pt-140">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-5 col-xl-6 col-lg-7">
						<div class="section-title text-center mb-30">
							<h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Welcome</h1>
							<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-8 col-sm-10">
						<div class="single-feature">
							<div class="icon color-1">
								<i class="lni lni-pointer-up"></i>
							</div>
							<div class="content">
								<h3>Easy To Use</h3>
								<p>Lorem ipsum dolor samet consetet sadip scing elitr serewd diam nonumy eirmod tempor invidunt ut labore.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-8 col-sm-10">
						<div class="single-feature">
							<div class="icon color-2">
								<i class="lni lni-laptop-phone"></i>
							</div>
							<div class="content">
								<h3>Fully Responsive</h3>
								<p>Lorem ipsum dolor samet consetet sadip scing elitr serewd diam nonumy eirmod tempor invidunt ut labore.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-8 col-sm-10">
						<div class="single-feature">
							<div class="icon color-3">
								<i class="lni lni-bootstrap"></i>
							</div>
							<div class="content">
								<h3>Bootstrap 5</h3>
								<p>Lorem ipsum dolor samet consetet sadip scing elitr serewd diam nonumy eirmod tempor invidunt ut labore.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= feature-section end ========================= -->

    <!-- ========================= footer start ========================= -->
    <footer id="footer" class="footer">
			<div class="footer-shape">
				<img src="assets/img/footer/footer-shape-1.svg" alt="" class="shape shape-1">
			</div>
			<div class="container">
				<div class="widget-wrapper">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
							<div class="footer-widget">
								<div class="logo">
									<a href="index.html">
										<img src="assets/img/logo/logo-2.svg" alt="" class="logo-2">
										<img src="assets/img/logo/logo.svg" alt="" class="logo-1">
									</a>
								</div>
								<ul class="socials">
									<li>
										<a href="javascript:void(0)"> <i class="lni lni-facebook-filled"></i> </a>
									</li>
									<li>
										<a href="javascript:void(0)"> <i class="lni lni-twitter-filled"></i> </a>
									</li>
									<li>
										<a href="javascript:void(0)"> <i class="lni lni-instagram-filled"></i> </a>
									</li>
									<li>
										<a href="javascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="footer-widget">
								<h3>Features</h3>
								<ul class="links">
									<li> <a href="javascript:void(0)">Easy to use</a> </li>
									<li> <a href="javascript:void(0)">Work on all device</a> </li>
									<li> <a href="javascript:void(0)">Always up to date</a> </li>
									<li> <a href="javascript:void(0)">Track your devices</a> </li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
							<div class="footer-widget">
								<h3>About Us</h3>
								<ul class="links">
									<li> <a href="javascript:void(0)">Home</a> </li>
									<li> <a href="javascript:void(0)">Features</a> </li>
									<li> <a href="javascript:void(0)">Explore</a> </li>
									<li> <a href="javascript:void(0)">Testimonials</a> </li>
								</ul>
							</div>
						</div>

						<div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
							<div class="footer-widget">
								<h3>Support</h3>
								<ul class="links">
									<li> <a href="javascript:void(0)">About Us</a> </li>
									<li> <a href="javascript:void(0)">Privacy Policy</a> </li>
									<li> <a href="javascript:void(0)">Terms of Service</a> </li>
									<li> <a href="javascript:void(0)">Accessibility</a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="copy-right-wrapper">
					<p>Designed and Developed by <a href="https://graygrids.com" rel="nofollow" target="_blank">GrayGrids</a></p>
				</div>
			</div>


		</footer>




    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src=" {{ asset('school_order/assets/js/bootstrap.5.0.0.alpha-2-min.js') }}"></script>
    <script src=" {{ asset('school_order/assets/js/count-up.min.js') }}"></script>
    <script src=" {{ asset('school_order/assets/js/wow.min.js') }}"></script>
    <script src=" {{ asset('school_order/assets/js/main.js') }}"></script>
  </body>
</html>
