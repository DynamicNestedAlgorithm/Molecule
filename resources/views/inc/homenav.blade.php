
	<!-- ====== Navgition ======  -->
	<nav class="navbar navbar-expand-md the-nav land-nav navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle navbar-toggler hamburger collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
				    aria-expanded="false">
					<span class="sr-only ">Toggle navigation</span>
					<span class="fa fas bars"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- logo -->
				<a class="navbar-brand" href="{{ url('/') }}">
					<img src="img/molecule-nav.png" class="img-responsive  logo" alt="logo"><h5 class="logo-text">olecule</h5>
				</a>
			</div>

		</div>
		
			<!-- /.container -->
		<!-- Collect the nav links, and other content for toggling -->
		<div class="right-links collapse  navbar-collapse "  id="bs-example-navbar-collapse-1">

				<!-- links -->
				<ul class="nav " >
					<li>
						<a href="{{ url('/') }}" class="active link">Home</a>
					</li>
					<li>
						<a href="about.html" class="link">About</a>
					</li>
					<li>
						<a href="labs.html" class="link">Labs</a>
					</li>
					<li>
						<a href="solutions.html" class="link">Solutions</a>
					</li>
					@guest
					<li>
						<a href="{{ route('login') }}" class="btn-nav mob-btn-nav">Sign in</a>
					</li>
					@else
					<li class="nav-item ">
						<a class="btn-nav mob-btn-nav " href="/home" role="button">
							Dashboard
						</a>
					</li>
				@endguest
				</ul>
			</div>
			<!-- /.navbar-collapse -->
	</nav>
	<!-- ====== End Navgition ======  -->
