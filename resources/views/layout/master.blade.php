<!DOCTYPE HTML>
<html>
	<head>
		<title>MARVEL - @yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
		<style>
			.marvel_logo {
				color: #ffffff;
				background-color: #d60000;
				width: 20%;
				text-align: center;
				padding: 10px 5px 10px 5px;
			}
		</style>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
                <!-- Header -->
                
					<header id="header">
						<div class="inner">
							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>
						</div>
                    </header>
                    
				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="{{ url('/') }}">Inicio</a></li>
							<li><a href="{{ url('/sucursal/registro') }}">Sucursal registro</a></li>
							<li><a href="{{ url('/comics') }}">Comics</a></li>
						</ul>
					</nav>

                <!-- Main -->
                
                @yield('content')

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Marcos Villavicencio</h2>
								<ul class="icons">
									<li>
										<a href="http://engixpro.com/" target="_blank" class="icon brands style2">
												<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
												width="16" height="16"
												viewBox="0 0 16 16"
												style=" fill:#000000;"><g id="surface1"><path style=" " d="M 4 2 C 2.902344 2 2 2.902344 2 4 L 2 12 C 2 13.097656 2.902344 14 4 14 L 12 14 C 13.097656 14 14 13.097656 14 12 L 14 4 C 14 2.902344 13.097656 2 12 2 Z M 4 3 L 12 3 C 12.558594 3 13 3.441406 13 4 L 13 12 C 13 12.558594 12.558594 13 12 13 L 4 13 C 3.441406 13 3 12.558594 3 12 L 3 4 C 3 3.441406 3.441406 3 4 3 Z M 7 4 L 7 5 L 10.292969 5 L 6.023438 9.273438 L 6.726563 9.976563 L 11 5.707031 L 11 9 L 12 9 L 12 4 Z "></path></g></svg>
										</a>
									</li>
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>

			@yield('javascript')
	</body>
</html>