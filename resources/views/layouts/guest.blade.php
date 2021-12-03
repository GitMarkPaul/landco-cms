<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="Cache-control" content="public">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="For more than 25 years, we have created world-class leisure and residential communities in the most coveted destinations in the Philippines" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Landco Pacific Corporation</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="img/png" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,700&amp;family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&amp;family=Roboto:wght@400;500;700&amp;display=swap">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/overwrites.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/default.css') }}" />
    @stack('styles')
    @yield('styles')
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<noscript>
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZG5WBTWHEX"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-ZG5WBTWHEX');
		</script>
	</noscript>
</head>
	
<body>
    <!-- .preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
			<img src="{{ asset('assets/img/loader.gif') }}" alt="Preloader" />
        </div>
    </div>

    <!-- header -->
    <header class="header-absolute header-two sticky-header">
        <div class="container wow fadeInDown">
            <div class="nav-container d-flex align-items-end justify-content-between">
                <!-- Site Logo -->
				<div class="site-logo">
                    <a href="{{ route('index') }}" class="main-logo"><img src="{{ asset('assets/img/logo-landco-reverse.png') }}" alt="Logo"></a>
                    <a href="{{ route('index') }}" class="sticky-logo"><img src="{{ asset('assets/img/logo-landco-inverse.png') }}" alt="Logo"></a>
                </div>
				
                <!-- .nav-menu -->
                <div class="nav-menu d-lg-flex">
                    <!-- Navbar Close Icon -->
                    <div class="navbar-close">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
					
                    <!-- .menu-items -->
                    <div class="menu-items">
						<a href="{{ route('index') }}" class="for-mobile mobile-logo mb-50"><img src="assets/img/logo-landco-reverse.png" alt="Logo"></a>
                        <ul>
                            <li><a href="{{ route('index') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
							<li><a href="{{ route('about_us') }}" class="{{ Request::is('about-us') ? 'active' : '' }}">About Us</a></li>
							<li><a href="{{ route('projects') }}" class="{{ Request::is('projects') ? 'active' : '' }}">Projects</a></li>
							<li><a href="https://pay.aqwire.io/landco" target="_blank" rel="noopener">Reservations</a></li>
							<li><a href="{{ route('faq') }}" class="{{ Request::is('faq') ? 'active' : '' }}">FAQ</a></li>
							<li><a href="{{ route('privilege_club') }}" class="{{ Request::is('privilege-club') ? 'active' : '' }}">Privilege Club</a></li>
							<li><a href="{{ route('publications') }}" class="{{ Request::is('publications') ? 'active' : '' }}">Publications</a></li>
							<li><a href="{{ route('careers') }}" class="{{ Request::is('careers') ? 'active' : '' }}">Careers</a></li>
                            <li><a href="{{ route('contact_us') }}" class="{{ Request::is('contact-us') ? 'active' : '' }}">Contact</a></li>
                        </ul>
                        <ul class="for-mobile list-social">
							<li><a href="https://www.facebook.com/LandcoPacificCorporation/" target="_blank" rel="noopener" aria-label="Share us on Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.instagram.com/landco_official/?hl=en" target="_blank" rel="noopener" aria-label="Share us on Instagram"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.youtube.com/user/landcoofficial" target="_blank" rel="noopener" aria-label="Subscribe us on Youtube"><i class="fab fa-youtube-square"></i></a></li>
						</ul>
                    </div>

                    <!-- .nav-pushed-item -->
                    <div class="nav-pushed-item"></div>
                </div>

                <!-- .navbar-toggler -->
                <div class="navbar-toggler">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->

	<main>
        @yield('content')
		
		<!-- .back-to-top -->
		<a href="#" class="back-to-top" id="backToTop">
			<i class="fal fa-angle-double-up"></i>
		</a>
		<!-- /.back-to-top -->
	</main>
	
    <!-- .footer -->
    <footer class="footer-two">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 order-1 wow fadeInLeft">
                        <!-- Site Info Widget -->
                        <div class="widget site-info-widget mb-50">
                            <div class="footer-logo mb-50">
                                <img src="{{ asset('assets/img/logo-landco-reverse.png') }}" width="160" alt="Logo">
                            </div>
                            <p>For more than 25 years, we have created world-class leisure and residential communities in the most coveted destinations in the Philippines</p>
                            <div class="social-links mt-40">
                                <a href="https://www.facebook.com/LandcoPacificCorporation" target="_blank" rel="noopener" aria-label="Share us on Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/landco_official/" target="_blank" rel="noopener" aria-label="Share us on Instagram"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/user/landcoofficial" target="_blank" rel="noopener" aria-label="Subscribe us on Youtube"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-3 order-lg-2 wow fadeInLeft" data-wow-delay="0.2s">
                        <!-- Nav Widget -->
                        <div class="row widget nav-widget mb-50">
                            <div class="col-lg-6 mb-5">
                                <h4 class="widget-title">Quick Links</h4>
                                <ul>
                                    <li><a href="{{ route('about_us') }}">The Company</a></li>
                                    <li><a href="{{ route('projects') }}">Our Projects</a></li>
                                    <li><a href="{{ route('privilege_club') }}">Privilege Club</a></li>
                                    <li><a href="{{ route('careers') }}">Careers</a></li>
                                    <li class="hidden"><a href="sellers.html">Sellers</a></li>
                                    <li><a href="https://pay.aqwire.io/landco" target="_blank" rel="noopener">Reservations</a></li>
                                </ul>
                            </div>
							<div class="col-lg-6 mb-5 wow fadeInLeft" data-wow-delay="0.4s">
                                <h4 class="widget-title">Publications</h4>
                                <ul>
                                    <li><a href="{{ route('publications.blogs') }}">Blog</a></li>
                                    <li><a href="{{ route('publications.media') }}">Media</a></li>
                                    <li><a href="{{ route('publications.news') }}">News and Features</a></li>
                                    <li><a href="{{ route('publications.magazine') }}">Landco Magazine</a></li>
                                    <li class="hidden"><a href="construction.html">Construction Updates</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 order-2 order-lg-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <!-- Contact Widget -->
                        <div class="widget contact-widget mb-50">
                            <h4 class="widget-title">Contact Us</h4>
                            <div class="contact-lists">
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-location-pin"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">Office Address</h6>
                                        25th Floor Tower 1, Insular Life Centre, Insular Drive, Filinvest Corporate City, Alabang, Muntinlupa City
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">Phone Number</h6>
                                        (+63 2) 8836-5055<br />(+63 2) 8836-5000<br />(+63 918) 836-5000
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-message"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">Email Address</h6>
                                        <a href="mailto:info@landco.ph">info@landco.ph</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area pt-30 pb-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5 order-2 order-md-1 wow fadeInLeft">
                        <p class="copyright-text copyright-two">Copyright &copy; Landco Pacific Corporation 2021 All Rights Reserved</p>
                    </div>
                    <div class="col-lg-6 col-md-7 order-1 order-md-2 wow fadeInRight">
                        <div class="footer-menu text-center text-md-right">
                            <ul>
                                <li><a href="terms-of-use.html">Terms of use</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
								<li><a href="hlurb.html">HLURB</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
	
    <!-- Modal -->
    <div class="modal fade" id="modal_beachtowns" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header hidden">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="https://www.youtube.com/embed/ezRHGDymxtM?controls=0" id="iframe_beachtowns" style="height: 400px; width: 100%;" title="Landco Corporate Video" frameborder="0" autoplay allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_connect" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h5 class="modal-title">Connect via Email and SMS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/img/Landco_Update_Contact.png') }}" class="img-fluid" alt="Landco Update Contact" />
                </div>
            </div>
        </div>
    </div>

    <!-- jquery js -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>	
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>