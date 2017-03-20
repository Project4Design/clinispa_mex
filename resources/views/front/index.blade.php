@extends('layouts.front')

@section('title',config('app.name'))

@section('content')
	<section class="section-even" style="padding:0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="padding:0">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img src="{{ asset('img/Spa-Treatments-Banner.jpg') }}" alt="treatments">
					    </div>
					    <div class="item">
					      <img src="{{ asset('img/how-to-spa-main-image.jpg') }}" alt="img1">
					    </div>
					    <div class="item">
					      <img src="{{ asset('img/TotalSkinSpa.jpg') }}" alt="img2">
					    </div>
					  </div>
					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div><!--Row-->
			<div class="row">
				<div class="col-md-12">
    		</div>
    	</div>
    </div>
  </section>

  <section class="section-odd">
  	<div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="section-heading">Reservaciones</h3>
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
        </div>
        <div class="col-lg-5 col-sm-6">
          <p class="lead text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis animi sit ipsam,
            veniam saepe impedit! Id commodi exercitationem beatae sequi, alias temporibus expedita,
            ipsam provident incidunt animi earum vero nihil?
          </p>

          <center><a class="btn btn-pink pink-outline" href="#">Reservar</a></center>
        </div>
        <div class="col-lg-5 col-lg-offset-2 col-sm-6">
          <img class="img-responsive" src="{{ asset('img/515-Treatment-1.jpg') }}" alt="cubicles">
        </div>
      </div>
    </div><!-- /.container -->
  </section>

  <section class="section-even">
  	<div class="container">
  		<div class="row">
        <div class="col-md-12 text-center">
          <h3 class="section-heading">Nuestros productos</h3>
          <hr class="section-heading-spacer">
          <div class="clearfix"></div>
        </div>
  			<div class="col-md-12">
  				<!-- Set up your HTML -->
					<div class="owl-carousel owl-theme">
						<a href="#">
						  <div class="display-products">
						  	<div class="container-img">
						  		<img class="display-img" src="{{ asset('img/thumbs/1.png') }}" alt="img1">
						  	</div>
						  </div>
						</a>
						<a href="#">
						  <div class="display-products">
						  	<div class="container-img">
						  		<img class="display-img" src="{{ asset('img/thumbs/2.jpg') }}" alt="img1">
						  	</div>
						  </div>
						</a>
						<a href="#">
						  <div class="display-products">
						  	<div class="container-img">
						  		<img class="display-img" src="{{ asset('img/thumbs/3.jpg') }}" alt="img1">
						  	</div>
						  </div>
						</a>
						<a href="#">
						  <div class="display-products">
						  	<div class="container-img">
						  		<img class="display-img" src="{{ asset('img/thumbs/4.jpg') }}" alt="img1">
						  	</div>
						  </div>
						</a>
						<a href="#">
						  <div class="display-products">
						  	<div class="container-img">
						  		<img class="display-img" src="{{ asset('img/thumbs/5.jpg') }}" alt="img1">
						  	</div>
						  </div>
						</a>
						<a href="#">
						  <div class="display-products">
						  	<div class="container-img">
						  		<img class="display-img" src="{{ asset('img/thumbs/6.jpg') }}" alt="img1">
						  	</div>
						  </div>
						</a>
						<a href="#">
						  <div class="display-products">
						  	<div class="container-img">
						  		<img class="display-img" src="{{ asset('img/thumbs/7.jpg') }}" alt="img1">
						  	</div>
						  </div>
						</a>
					</div>
  			</div>
  		</div>
  	</div>
  </section>

  <section class="section-odd">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6">
  				<div class="col-md-12">
	  				<h3 class="section-heading">Contáctanos</h3>
	          <hr class="section-heading-spacer" style="float:left">
	          <div class="clearfix"></div>
	        </div>
          <div class="col-md-12">
          	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3746269.7382719256!2d-102.73071343405877!3d23.51571669568183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1489966008721" height="400" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
  			</div>
  			<div class="col-md-6">
  				<div class="col-md-8 col-md-offset-2">
	          <ul class="contact-info">
              <li><i class="fa fa-envelope fa-fw"></i>&nbsp;mail@example.com<br></li>
              <li><i class="fa fa-phone fa-fw"></i>&nbsp;123 456 7890<br></li>
              <li>
                <i class="fa fa-map-marker fa-fw"></i>
                  103 Reddish Lane<br>
                  Manchester<br>
                  Denton – M34 2NF
              </li>
            </ul>
          </div>
  				<div class="col-md-8 col-md-offset-2">
	  				<form action="#" method="POST">
	  					<div class="form-group">
	  						<input id="nombre" class="form-control" type="text" placeholder="Nombre" required>
	  					</div>
	  					<div class="form-group">
	  						<input id="telefono" class="form-control" type="text" name="telefono" placeholder="Telefono" required>
	  					</div>
	  					<div class="form-group">
	  						<input id="correo" class="form-control" type="text" name="correo" placeholder="Correo" required>
	  					</div>
	  					<div class="form-group">
	  						<input id="asunto" class="form-control" type="text" name="asunto" placeholder="Asunto" required>
	  					</div>
	  					<div class="form-group">
	  						<textarea id="comentario" class="form-control" name="comentario"></textarea>
	  					</div>
	  					<center><button class="btn btn-pink btn-block" type="submit">Enviar comentarios</button></center>
	  				</form>
	  			</div>
  			</div>
  		</div>
  	</div>
  </section>
@endsection

@section('scripts')
  <script type="text/javascript">
    $(window).ready(function(){
		  $(".owl-carousel").owlCarousel({
		  	dots:true,
		    items:5,
		    loop:true,
		    margin:10,
		    autoplay: true,
		    autoplayTimeout:1000,
		    autoplayHoverPause:true
		  });
      $('div.alert').not('.alert-important').delay(5000).slideUp(300);
    });
  </script>
@endsection