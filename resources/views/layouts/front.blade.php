<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title',config('app.name'))</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon / icons
    ============================================ -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-icon-180x180.png') }}">
		<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/android-icon-192x192.png') }}">
		<link rel="shortcut icon" type="image/x-icon" sizes="32x32"  href="{{ asset('img/favicon-32x32.ico') }}">
		<link rel="manifest" href="{{ asset('manifest.json') }}">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="{{ asset('img/ms-icon-144x144.png') }}">
		<meta name="theme-color" content="#ffffff">

		<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Raleway" rel="stylesheet">
   
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Owl carousel
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">

    <!-- Jquery
    ============================================ -->
    <script src="{{ asset('js/jQuery-2.1.4.min.js') }}"></script>
    <!-- Boostrap JS
    ============================================ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Carousel
    ============================================ -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  </head>
  <body id="main-body">
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Navigation -->
    <header class="navbar navbar-default" role="navigation" style="margin:0">
      <div class="container">
      	<div class="row">
      		<div class="col-md-6">
      			<!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-main-manu">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="{{route('front')}}">
		            <span class="pull-left"><img src="{{ asset('img/logo_completo.png') }}" height="70" alt="logo"></span>
		          </a>
		        </div>
		      </div>
		      <div class="col-md-6">
		      	<div class="col-md-12">
	      			<div class="collapse navbar-collapse nav-main-menu">
	      				<ul class="nav navbar-nav navbar-right main-menu-top">
			            <li><a href="#">Carro (0)</a></li>
	      					<li><a href="#">Login</a></li>
	      					<!--
			            <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Logged <span class="caret"></span></a>
			              <ul class="dropdown-menu">
			                <li><a href="#">Login</a></li>
			                <li><a href="{{ url('/car') }}">Mi cuenta</a></li>
			                <li><a href="{{ url('/van') }}">Salir</a></li>
			              </ul>
			            </li>
			            -->
	      				</ul>
	      			</div>
	      		</div>
	      		<div class="col-md-12 border-bottom"></div>
	      		<div class="col-md-12">
			        <!-- Collect the nav links, forms, and other content for toggling -->
			        <div class="collapse navbar-collapse nav-main-menu">
			          <ul class="nav navbar-nav navbar-right">
			            <li><a href="{{ route('front') }}">Inicio</a></li>
			            <li><a href="#">Reservas</a></li>
			            <li><a href="#">Tienda</a></li>
			            <li><a class="link-scroll" href="#">Contacto</a></li>
			          </ul>
			        </div> <!-- /.navbar-collapse -->
			      </div>
      		</div>
		    </div>
      </div><!-- /.container -->
    </header>
		
		@yield('content')

    <!-- Footer -->
    <footer>
      <div class="container-fluid">
        <div class="row main-foot">
          <div class="col-md-3 ">
            <h4>Enlaces</h4>
            <ul class="list-unstyled footer-quote-list">
            </ul>
          </div>
          <div class="col-xs-12 col-md-3 pull-right">
            <div class="redes">
              <h4>Follow us</h4>
              <a href="http://facebook.com/Clinispa"><i class="fa fa-facebook fa-fw">&nbsp;CliniSpa</i></a><br>
              <a href="http://instagram.com/clinispa"><i class="fa fa-instagram fa-fw">&nbsp;@CliniSpa</i></a><br>
              <a href="http://twitter.com/clinispamx"><i class="fa fa-twitter fa-fw">&nbsp;@CliniSpamx</i></a>
            </div>
           </div>
           <div class="col-xs-12 col-md-2 pull-right">
              <h4>Ubicacion</h4>
              <p>Mexico</p>
           </div>
           <div class="col-xs-12 text-center">
              <p class="copyright small">
                Copyright &copy; <b>Clinispa</b> 2017. Todos los derechos reservados.
              </p>
          </div>
        </div>
        <div class="row design">
        	<div class="col-md-4 col-md-offset-4 text-center">
        		Developed by: <a href="http://wwww.project4design.com.ve">Project 4 Design</a>
        	</div>
        </div>
      </div>
    </footer>
		@yield('scripts')
  </body>
</html>