@extends('layouts.app')
@section('stylesheet')

    <!-- Font awesome Core CSS -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/et-line.css')}}">

	<!-- owl carousel CSS -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

	<!-- magnific-popup CSS -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- main style CSS -->
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<!-- Custom style CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

@endsection
    @section('content')
    <br> <br>
<div class="main">
@include('inc.homenav')
	<!-- ====== Preloader ======  -->
	<!-- <div class="loading">
		<div class="spinner">
			<div class="rect1"></div>
			<div class="rect2"></div>
			<div class="rect3"></div>
			<div class="rect4"></div>
			<div class="rect5"></div>
		</div>
	</div> -->
	<!-- ======End Preloader ======  -->


	<!-- ====== Header ======  -->
	<header id="home" class="particle" data-stellar-background-ratio="0.5">
			<div class="header-overlay"></div>
			<div class="bg-slide">
					<div class="img"></div>
					<div class="img"></div>
					<div class="img"></div>
					<div class="img"></div>
			</div>
		<div class="header-container">
					<div class="left-item">
						<div id="particles-js"></div>
							<div class="bg-overlay">
								<div class="bg-change">
									<!-- header left content -->
									<div class="caption v-middle">
										<div class="type">
										<br>
											<span class="busy">Connect & Build <br> with 
												<h2></h2>
											</span>
										</div>
										<br>
										<p class="mb-2">Create, track and build  Dynamic Scalable <br> Software and view it's development process<br>  with Real-Time Insights.</p>
										<br>
										<a href="{{ route('register') }}" class="btn-mol">Get Started</a>
										<a href="#" class="btn-mol-r">Mentorship</a>
									</div>
								</div>
							</div>
					</div>
					<!-- header right content -->			
					<div class="right-item">
						<div class="bg-overlay">
							

						</div>
					</div>
	</div>

		<div class="button-scroll" data-scrollTo="about">
				<span></span>
		</div>
	</header>
	<!-- ====== End Header ======  -->


	<!--====== Footer ======-->
	<footer class="footer text-center">
		<p>Copy Right &copy; By
			<span>Molecule</span> 2018</p>

		<div class="social-icon">
			<a href="#0">
				<span>
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</span>
			</a>
			<a href="#0">
				<span>
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</span>
			</a>
			<a href="#0">
				<span>
					<i class="fa fa-youtube" aria-hidden="true"></i>
				</span>
			</a>
			<a href="#0">
				<span>
					<i class="fa fa-linkedin" aria-hidden="true"></i>
				</span>
			</a>
			<a href="#0">
				<span>
					<i class="fa fa-github" aria-hidden="true"></i>
				</span>
			</a>
		</div>
	</footer>
	<!--====== End Footer ======-->




	<!--====== js ======-->


	<!-- jQuery -->
	<script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{ asset('https://code.jquery.com/jquery-migrate-3.0.0.min.js')}}"></script>

	<!-- bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>

	<!-- singlePageNav -->
	<script src="{{ asset('js/jquery.singlePageNav.min.js')}}"></script>

	<!-- owl carousel -->
	<script src="{{ asset('js/owl.carousel.min.js')}}"></script>

	<!-- stellar js -->
	<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>

	<!-- jquery.magnific-popup.min js -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>

	<!-- typed js -->
	<script src="{{ asset('js/typed.js')}}"></script>

	<!-- isotope.pkgd.min js -->
	<script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>

	<!-- particles.min js -->
	<script src="{{ asset('js/particles.min.js')}}"></script>

	<!-- app js -->
	<script src="{{ asset('js/app.js')}}"></script>

	<!-- validator js -->
	<script src="{{ asset('js/validator.js')}}"></script>

	<!-- custom js -->
	<script src="{{ asset('js/custom.js')}}" ></script>

@endsection