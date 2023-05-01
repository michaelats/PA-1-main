<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
    <link rel="icon" href="{{asset('img')}}/logo.png">
	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('aos')}}/aos.css">
	<link rel="stylesheet" href="{{asset('bootstrap')}}/bootstrap.css">
	<link rel="stylesheet" href="{{asset('css')}}/misc.css">
	<link rel="stylesheet" href="{{asset('css')}}/green-scheme.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!-- JavaScripts -->
	<script src="{{asset('aos')}}/aos.js"></script>
	<script src="{{asset('js')}}/jquery-1.10.2.min.js"></script>
	<script src="{{asset('js')}}/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <style>
            .logoharian,.logodel{
                width: 100px;            
                padding-top: 50px;
                padding-bottom: 40px;
            }
    </style>
	<div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="{{url('/indexPengguna')}}">Beranda</a></li>
            <li><a href="{{url('/galeriPengguna')}}">Galeri</a></li>
            <li><a href="">Informasi</a>
                <ul>
                    <li><a href="{{url('/infoWisataPengguna')}}">Informasi Wisata</a></li>
					<li><a href="{{url('/kulinerPengguna')}}">Informasi Wisata Kuliner</a></li>
					<li><a href="{{url('/budayaPengguna')}}">Informasi Wisata Budaya</a></li>
                    <li><a href="{{url('/infostatistikPengguna')}}">Informasi Statistik</a></li>
                </ul>
            </li>
            <li><a href="{{url('/tanyaPengguna')}}">Tanya Jawab</a></li>
            <li><a href="{{url('/aboutUsPengguna')}}">Tentang Kami</a></li>
                        <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										Halo, {{ Auth::user()->name }} <i class="fas fa-chevron-down"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('logout') }}"
						   onclick="event.preventDefault();														 document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</div>
			</li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">
			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="{{url('/indexPengguna')}}"> 
							<img src="{{asset('img')}}/logo.png" alt="" style="width:100px; height:50px">
						</a>
					</div> <!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li><a href="{{url('/indexPengguna')}}">Beranda</a></li>
					            <li><a href="{{url('/galeriPengguna')}}">Galeri</a></li>
								<li><a>Informasi</a>
									<ul>
										<li><a href="{{url('/infoWisataPengguna')}}">Informasi Wisata</a></li>
										<li><a href="{{url('/kulinerPengguna')}}">Informasi Wisata Kuliner</a></li>
										<li><a href="{{url('/budayaPengguna')}}">Informasi Wisata Budaya</a></li>
										<li><a href="{{url('/infostatistikPengguna')}}">Informasi Statistik</a></li>
									</ul>
								</li>
					            <li><a href="{{url('/tanyaPengguna')}}">Tanya Jawab</a></li>
								@guest
								@if (Route::has('login'))
									<li class="nav-item">
										<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
									</li>
								@endif
							@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										Halo, {{ Auth::user()->name }} <i class="fas fa-chevron-down"></i>
									</a>
	
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
										   onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
	
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</div>
								</li>
							@endguest
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->
    @yield('container')
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="footer-nav clearfix">
						<ul class="footer-menu">
                            <li><a href="{{url('/indexPengguna')}}">Beranda</a></li>
                            <li><a href="{{url('/galeriPengguna')}}">Galeri</a></li>
							<li><a href="{{url('/infoWisataPengguna')}}">Informasi Wisata</a></li>
							<li><a href="{{url('/kulinerPengguna')}}">Informasi Wisata Kuliner</a></li>
							<li><a href="{{url('/budayaPengguna')}}">Informasi Wisata Budaya</a></li>
							<li><a href="{{url('/infostatistikPengguna')}}">Informasi Statistik</a></li>
                            <li><a href="{{url('/tanyaPengguna')}}"">Tanya Jawab</a></li>
                            <li><a href="{{url('/aboutUsPengguna')}}">Tentang Kami</a></li>
						</ul> <!-- /.footer-menu -->
					</nav> <!-- /.footer-nav -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-12"> 
                <center>
                    <a href="{{url('/indexPengguna')}}"><img src="{{asset('img')}}/logo.png" alt="logo harian" class="logoharian"></a>  
                    <a href="https://www.del.ac.id/"><img src="{{asset('img')}}/Logo_Del.png" alt="logo del" class="logodel"></a>
                </center>
                    <p class="copyright-text">&copy;CopyRight @ 2021 All Rights Reservered || Developed by Kelompok 9 PA 1 || D4 TRPL</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->

	<!-- Scripts -->
	<script src="{{asset('js')}}/min/plugins.min.js"></script>
	<script src="{{asset('js')}}/min/medigo-custom.min.js"></script>
	<script>
		AOS.init();
	  </script>
</body>
</html>