<?php
session_start();
$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: index.php");

}else{

    echo "<h1> BIENVENIDO $sesion </h1><br>";

    echo "<a href='logica/salir.php'>Salir</a>";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Meta -->
    <meta name="description" content="SityCab is a taxi company responsive html template.">
	<meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, uikit, multicolor, parallax, retina, taxi business" />
    <meta name="author" content="dhsign">
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="3 days" />	
    <title>Bienvenido a CityCab </title>
	
	<!-- Styles -->	
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">	
	<!-- jQuery UI CSS -->
    <link href="assets/css/jquery-ui.css" rel="stylesheet">		
    <!-- Uikit CSS -->
    <link href="assets/css/uikit.almost-flat.css" rel="stylesheet">		
    <!-- OWL Carousel CSS -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">	
    <!-- Template CSS -->
	<link href="assets/css/quotes.css" rel="stylesheet">
	<link href="assets/css/product.css" rel="stylesheet">
    <link href="citycab.css" rel="stylesheet">	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
  </head>

  <body>


  
    <!-- Wrap all page content -->
    <div class="page-wrapper" id="page-top">
	  <header class="header-wrapper" id="header-wrapper" >
	    <!-- Main Navigation  -->
	    <div class="container main-navigation">
		  <div id="header" class="row">
            <div class="col-md-12 col-pad-0">
	          <!-- Fixed navbar -->
              <div class="navbar navbar-default navbar-fixed-top" role="navigation"> 
				<!-- Brand and toggle get grouped -->
				<div class="navbar-header">
				  <a id="offcanvas-toggler" class="navbar-toggle" data-toggle="collapse"></a>
                  <div class="navbar-brand">
                    <a href="index.html"><img src="images/logo.png" alt="Logo"></a>
                  </div>
				</div>
		        <h2 class="navbar-text navbar-right"><i class="glyphicon glyphicon-earphone glyphicon-align-left" aria-hidden="true"></i> 555.777.343</h2>
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-nav-center">
                    <li class="active"><a href="index.html">Inicio</a></li>
                    <li><a href="about.html">Acerca de </a></li>
                    <li><a href="faq.html">Información</a></li>
                    <li><a href="blog.html">blog</a></li>
                    <li data-uk-dropdown="" class="uk-parent">
                      <a href="index.html">Más <i class="uk-icon-caret-down"></i></a>
                      <div class="uk-dropdown uk-dropdown-navbar" style="">
                        <ul class="uk-nav uk-nav-navbar">
                          <li><a href="buttons.html">botones</a></li>
                          <li><a href="icons.html">icons</a></li>
                          <li class="uk-nav-divider"></li>
                          <li><a href="typography.html">typography</a></li>
                          <li><a href="error-404.html">error 404</a></li>
                          <li class="uk-nav-divider"></li>
                          <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                          <li><a href="blog-right-sidebar.html">right sidebar</a></li>						  
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
			</div>  
          </div>
		</div>
		<!-- /Main Navigation -->
	  </header>

      <!-- Gap -->
      <div id="taxiStripe" class="container-fluid gap-fullsize">
	  </div>
	  <!-- /Gap -->	  

      <!-- Slider -->
	  <section>
        <div class="container-fluid">
	      <div class="row">                        
            <div class="col-md-12">
              <div id="owl-slider" class="carousel owl-carousel owl-theme">
                <div class="item active">
			      <img src="images/slide1.jpg" alt="order cab now">
				  <div class="container-fluid">
                    <div class="carousel-caption">
                      <p class="lead uk-text-black">Somos</p>
                      <p class="lead-large uk-text-white">Lo mejort</p>
                      <p class="lead uk-text-black">En la Ciudad</p>
                      <a class="btn btn-lg os-btn os-btn-white" href="index.html#">Ordenar Ahora</a>
                    </div>
                  </div>
		        </div>
                <div class="item">
			      <img src="images/slider2.jpg" alt="rush our city cab">
				  <div class="container-fluid">
                    <div class="carousel-caption">
                      <p class="lead-large uk-text-white">Hora Pico</p>
                      <p class="lead uk-text-yellow">¿A quien vas a llamar?</p>
                      <p class="lead-large uk-text-white">city cab</p>
                    </div>
                  </div>
			    </div>
                <div class="item">
			      <img src="images/slider3.jpg" alt="city cab app!">
				  <div class="container-fluid">
                    <div class="carousel-caption carousel-caption-phone">
				      <table class="table">
                        <tr>
                          <td>					    
					        <p class="lead uk-text-black">Ahorrar tiempo con</p>
                            <p class="lead uk-text-yellow">city cab app!</p>
                            <a class="btn btn-lg os-btn os-btn-black" href="index.html#">Descargar ahora</a></td>
                          <td><img src="images/phone.png" alt="city cab app!"></td>
                        </tr>
                      </table> 
                    </div>
                  </div>
			    </div>
              </div>
		    </div>
		  </div>
	    </div>
	  </section>
	  <!-- /Slider -->
	  
      <!-- Choose Car -->
	  <section class="choose-car" id="choose-car">
        <div class="container">
	      <div class="row">                        
            <div class="col-md-12">
              <div> <h3 class="header header-car">Escoge tú vehículo</h3>
			  </div>
			  <div>
			    <ul class="nav nav-tabs nav-tabs-center cc-nav-tabs">
                  <li class="active"><a data-toggle="tab" href="index.html#town-taxi">Taxi Pequeño</a></li>
                  <li><a data-toggle="tab" href="index.html#hybrid-taxi">Taxi Hibrido</a></li>
                  <li><a data-toggle="tab" href="index.html#limousine-taxi">Taxi Privado</a></li>
                  <li><a data-toggle="tab" href="index.html#suv-taxi">SUV Taxi</a></li>
                </ul>
                <div class="tab-content">
                  <div id="town-taxi" class="tab-pane fade in active">
                    <img alt="Town Taxi" src="images/town.jpg" title="Town Taxi">
				    <div class="uk-grid uk-grid-divider uk-text-center">
                      <div class="uk-width-medium-1-3">
					    <div class="uk-panel uk-panel-box uk-panel-box-primary">
              Tasa básica:<h3 class="uk-text-white">$4.000</h3>
                        </div>
					  </div>
                      <div class="uk-width-medium-1-3">
					    <div class="uk-panel uk-panel-box uk-panel-box-primary">
                          Por milla/ Km:<h3 class="uk-text-white">$4.000</h3>
                        </div>
					  </div>
                      <div class="uk-width-medium-1-3">
					    <div class="uk-panel uk-panel-box uk-panel-box-primary">
                          Clase:<h3 class="uk-text-white">Pequeño</h3>
                        </div>
					  </div>
                    </div>                
				  </div>
                  <div id="hybrid-taxi" class="tab-pane fade">
	                <img alt="Hybrid Taxi" src="images/hybrid.jpg" title="Hybrid Taxi">			  
				    <div class="uk-grid uk-grid-divider uk-text-center">
                      <div class="uk-width-medium-1-3">
					    <div class="uk-panel uk-panel-box uk-panel-box-primary">
              Tasa básica:<h3 class="uk-text-white">$3.000</h3>
                        </div>
					  </div>
                      <div class="uk-width-medium-1-3">
					    <div class="uk-panel uk-panel-box uk-panel-box-primary">
                          Por milla/ Km:<h3 class="uk-text-white">$3.000</h3>
                        </div>
					  </div>
                      <div class="uk-width-medium-1-3">
					    <div class="uk-panel uk-panel-box uk-panel-box-primary">
                          Class:<h3 class="uk-text-white">Taxi Privado</h3>
                        </div>
					  </div>
                    </div>					
				  </div>
                  <div id="limousine-taxi" class="tab-pane fade">
	                <img alt="Limousine Taxi" src="images/limo.jpg" title="Limousine Taxi">
				    <div class="uk-grid uk-grid-divider uk-text-center">
                      <div class="uk-width-medium-1-3">
					    <div class="uk-panel uk-panel-box uk-panel-box-primary">
              Tasa básica:<h3 class="uk-text-white">$8.000</h3>
                        </div>
					  </div>
                      <div class="uk-width-medium-1-3">
					    <div class="uk-panel uk-panel-box uk-panel-box-primary">
                          Por milla/ Km:<h3 class="uk-text-white">$8.000</h3>
                        </div>
					  </div>
                      <div class="uk-width-medium-1-3">
					    <div class="uk-panel uk-panel-box uk-panel-box-primary">
                          Clase:<h3 class="uk-text-white">limousina</h3>
                        </div>
					  </div>
                    </div>	                
				  </div>
                  <div id="suv-taxi" class="tab-pane fade">
	                <img alt="SUV Taxi" src="images/suv.jpg" title="SUV Taxi">
				      <div class="uk-grid uk-grid-divider uk-text-center">
                        <div class="uk-width-medium-1-3">
					      <div class="uk-panel uk-panel-box uk-panel-box-primary">
                Tasa básica:<h3 class="uk-text-white">$7.000</h3>
                          </div>
					    </div>
                      <div class="uk-width-medium-1-3">
					    <div class="uk-panel uk-panel-box uk-panel-box-primary">
                          Por milla/ Km:<h3 class="uk-text-white">$7.000</h3>
                        </div>
					  </div>
                      <div class="uk-width-medium-1-3">
					    <div class="uk-panel uk-panel-box uk-panel-box-primary">
                          Class:<h3 class="uk-text-white">suv</h3>
                        </div>
					  </div>
                    </div>	                
				  </div>
                </div>
			  </div>
		    </div>
		  </div>
	    </div>
	  </section>
	  <!-- /Choose Car -->
	  
      <!-- Book Taxi -->
	  <section class="book-taxi" id="book-taxi">
        <div class="container">
	      <div class="row">                        
            <div class="col-md-6">
              <div> <h3 class="header book-now">Reservar Taxi Ahora</h3>
              </div>
			  <div>
                <form class="form-horizontal" role="form" action="Datos.php" method="post">
                  <div class="form-group">
                    <label for="inputWhen" class="control-label label-left col-xs-3">Fecha *</label>
                    <div class="col-xs-9">
                      <input type="date" class="form-control" id="inputWhen" name="when">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputHour" class="control-label label-left col-xs-3">Hora *</label>
                    <div class="col-xs-9">
                      <input type="time" class="form-control" id="inputHour" name="hour">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputStartDestination" class="control-label label-left col-xs-3">Inicio Destino *</label>
                    <div class="col-xs-9">
                      <input type="text" class="form-control" id="inputStartDestination" placeholder="startdestination" name="startDestination">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEndDestination" class="control-label label-left col-xs-3">Fin Destino *</label>
                    <div class="col-xs-9">
                      <input type="text" class="form-control" id="inputEndDestination" placeholder="enddestination" name="endDestination">
                    </div>
                  </div>
                  <label for="inputEndDestination" class="control-label label-left col-xs-3">Tipo vehículo *</label>
                  
                  <select name="TipoVehiculo"  class="control-label label-left col-xs-3">
                  <option value="Particular">Particular</option>
                  <option  value="Privado">Privado</option>
                  <option  value="SUB">SUB</option>
                  </select>
               
<br><br>
                  <div class="form-group" >
                    <label class="control-label label-left col-xs-3" for="phoneNumber">Telefono *</label>
                    <div class="col-xs-9">
                      <input type="tel" class="form-control" id="phoneNumber" placeholder="phone number" name="phoneNumber">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                      <button type="submit" class="btn btn-primary">Pedir Ahora</button>
                    </div>
                  </div>
                </form>
			  </div>
		    </div>
		    <div class="col-md-6">
              <div>
                <p><img data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:600}" 
				  style="display: block; margin-right: auto; margin-left: auto;" 
				  src="images/girl.png" alt="girl">
				</p>			  
			  </div>
		    </div>
		  </div>
	    </div>
	  </section>	
	  <!-- /Book Taxi -->	  	  

      <!-- Download App -->
	  <section class="download-app" id="downloadApp">
        <div class="container">
	      <div class="row">                        
            <div class="col-md-12">
              <h3 class="header header-car">Descargar Aplicación Ahora</h3>
		    </div>
		  </div>
	      <div class="row">                        
		    <div class="col-md-6">
              <div>
                <p class="uk-text-a2"><img class="uk-text-center" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:600}" alt="download our app" src="images/app.jpg">
				</p>			  
			  </div>
		    </div>
            <div class="col-md-6">
              <h4 class="text-center uk-text-black">book your taxi in just a few second!</h4>
              <p class="uk-text-a2 text-center p-mar-5">Our app is easy to use and very user friendly. Just choose your start and end location, select the car you like and in just a few minutes we'll be at your doorstep.</p>
              <br>
              <h4 class="text-center uk-text-black p-mar-5">taxi app key features:</h4>
              <h5 class="uk-text-a2 blocknumber blocknumber-ltr"><span class="circle da-span">01</span> easy taxi booking // lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h5>
              <h5 class="uk-text-a2 blocknumber blocknumber-ltr"><span class="circle da-span">02</span> check the rate in real time // lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h5>
              <h5 class="uk-text-a2 blocknumber blocknumber-ltr"><span class="circle da-span">03</span> calculate the trip mileage // lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h5>
              <br>
              <h4 class="text-center uk-text-black p-mar-5">download now:</h4>
              <p class="uk-text-a2 text-center p-mar-5">This app is available for: Android, iOS &amp; Windows Mobile!</p>
              <p class="uk-text-a2 text-center p-mar-15">CityCab is reserving the rights to change prices, rates, vehicles in our disgrace.</p>
              <br>
              <p class="uk-text-a2 text-center p-mar-15">
			    <a href="index.html#" class="btn btn-inverse da-a"><i class="uk-icon-apple"></i></a>
                <a href="index.html#" class="btn btn-inverse da-a"><i class="uk-icon-android"></i></a>
                <a href="index.html#" class="btn btn-inverse da-a"><i class="uk-icon-windows"></i></a>
              </p>
		    </div>
		  </div>		
	    </div>
	  </section>
	  <!-- /Download App -->
	  
      <!-- Testimonials -->
      <section class="vertical-testimonials" id="verticalTestimonials" data-type="background" data-speed="5">	
        <div class="container">
          <div class="row">                        
            <div class="col-md-12">
              <h3 class="header header-testimonials">testimonials</h3>
		    </div>
		  </div>		
	    </div>	  
        <div class="container">
	      <div class="row">                        
            <div class="col-md-12">
			  <div>
                <div class="tab-content">
                  <div id="tab1" class="tab-pane fade in active">
                    <div class="sprocket-quotes">
                 	  <ul class="sprocket-quotes-container cols-2">
					    <li>
	                      <div class="sprocket-quotes-item quotes-bottomright-arrow">
					        <span class="sprocket-quotes-text">
				              CityCab is my favorite taxi company ever! Cool drivers, amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :)			
					        </span>
					        <div class="sprocket-quotes-info">
					    	  <img src="images/3.png" class="sprocket-quotes-image" alt="image">
						      <span class="sprocket-quotes-author">
					            Diego Furlan
						      </span>
						      <span class="sprocket-quotes-subtext">
					            Lives in: Barcelona
					    	  </span>
					        </div>
			              </div>
                        </li>
					    <li>
	                      <div class="sprocket-quotes-item quotes-bottomleft-arrow">
					        <span class="sprocket-quotes-text">
				              CityCab is my favorite taxi company ever! Cool drivers, amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :)
						    </span>
						    <div class="sprocket-quotes-info">
						  	  <img src="images/4.png" class="sprocket-quotes-image" alt="image">
							  <span class="sprocket-quotes-author">
					            Samantha Jones
							  </span>
							  <span class="sprocket-quotes-subtext">
					            Lives in: Vienna
							  </span>
					        </div>
			              </div>
                        </li>
					  </ul>
                    </div>               
				  </div>	                
				  <div id="tab2" class="tab-pane fade">
                    <div class="sprocket-quotes">
                	  <ul class="sprocket-quotes-container cols-2">
		                <li>
	                      <div class="sprocket-quotes-item quotes-bottomright-arrow">
					        <span class="sprocket-quotes-text">
				              CityCab is my favorite taxi company ever! Cool drivers, amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :)
						    </span>
						    <div class="sprocket-quotes-info">
							  <img src="images/1.png" class="sprocket-quotes-image" alt="image">
							  <span class="sprocket-quotes-author">
					            Michael Buffalo
							  </span>
							  <span class="sprocket-quotes-subtext">
					            Lives in: New York
							  </span>
					        </div>
			              </div>
                        </li>
                        <li>
	                      <div class="sprocket-quotes-item quotes-bottomleft-arrow">
					        <span class="sprocket-quotes-text">
				              CityCab is my favorite taxi company ever! Cool drivers, amazing cars, top notch services! You won't believe it, but they actually didn't took any tip :)
						     </span>
						     <div class="sprocket-quotes-info">
							  <img src="images/2.png" class="sprocket-quotes-image" alt="image">
							  <span class="sprocket-quotes-author">
					            Nora Martinez
							  </span>
							  <span class="sprocket-quotes-subtext">
					            Lives in: Paris
							  </span>
					        </div>
			              </div>
                        </li>
	                  </ul>
                    </div>					
				  </div>
			      <div id="sprocketTabs">	
			        <ul class="nav nav-tabs sp-nav-tabs nav-tabs-center-testimonials">
                      <li class="active"><a data-toggle="tab" href="index.html#tab1">1</a></li>
                      <li><a data-toggle="tab" href="index.html#tab2">2</a></li>
                    </ul>
			      </div>
                </div>
			  </div>
		    </div>
		  </div>
	    </div>
	  </section>  
	  <!-- /Testimonials -->
	  
      <!-- Lost Property -->
	  <section class="lost-property" id="lostProperty">
        <div class="container">
	      <div class="row">                        
            <div class="col-md-12">
              <h3 class="header header-lost">lost property</h3>
			  <h4 class="header-text text-center">did you lost something in one of our taxis?</h4>
              <p class="header-p text-center">no need to panic! we're keeping all lost & found items in our storage. just follow these 3 easy steps:</p>
              <br>
		    </div>
		  </div>
	      <div class="row">                        
		    <div class="col-md-12">
              <div class="uk-grid uk-grid-divider-2 uk-container-center">
                <div class="uk-width-medium-1-3">
                  <div class="uk-overlay">
                    <img class="uk-border-circle" title="Step 1" src="images/step1.jpg" alt="step 1" />
                    <div class="uk-overlay-area uk-border-circle">
                      <div class="uk-overlay-area-content">
                        <h4>remember when did you lose it</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-width-medium-1-3">
                  <div class="uk-overlay">
                    <img class="uk-border-circle" title="Step 2" src="images/step2.jpg" alt="step 2" />
                    <div class="uk-overlay-area uk-border-circle">
                      <div class="uk-overlay-area-content">
                        <h4>contact us via email or call us</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-width-medium-1-3">
                  <div class="uk-overlay">
                    <img class="uk-border-circle" title="Step 3" src="images/step3.jpg" alt="step 3" />
                    <div class="uk-overlay-area uk-border-circle">
                      <div class="uk-overlay-area-content">
                        <h4>come to our storage and pick your item</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <h4 class="header-text text-center">we value our clients deeply and we want you to be happy :)</h4>
			  <h4 class="uk-text-center"><a href="index.html#" class="btn btn-primary btn-lg">contact us now</a></h4>	
            </div>
		  </div>		
	    </div>
	  </section>
	  <!-- /Lost Property -->	 

      <!-- Taxi Driver For Hire -->
      <section class="vertical-driver" id="verticalDriver" data-type="background" data-speed="5">	
          <div class="container">
            <div class="row">                        
              <div class="col-md-12">
                <h3 class="header header-driver">taxi driver for hire</h3>
		      </div>
		    </div>		
	      </div>	  
          <div id="drivers" class="container">
	        <div class="row">                        
              <div class="col-md-3">
                <div class="uk-panel uk-panel-box">
                  <div class="uk-overlay">
                    <img alt="" src="images/driver1.jpg">
                    <div class="uk-overlay-area">
                      <div class="uk-overlay-area-content vd-uk-overlay-area-content">
                        <p><a href="index.html#">full-time driver</a></p>
                        <p> will drive top of the line taxi in the streets of london	</p>
                        <p><a href="index.html#" class="btn btn-primary btn-inverse btn-sm">Read More</a></p>
                      </div>
                    </div>
                  </div>
	    		</div>
	    	  </div>
              <div class="col-md-3">
                <div class="uk-panel uk-panel-box">
                  <div class="uk-overlay">
                    <img alt="" src="images/driver2.jpg">
                    <div class="uk-overlay-area">
                      <div class="uk-overlay-area-content vd-uk-overlay-area-content">
                        <p><a href="index.html#">night watch driver</a></p>
                        <p>we're looking for a driver working mostly nights at the airport</p>
                        <p><a href="index.html#" class="btn btn-primary btn-inverse btn-sm">Read More</a></p>
                      </div>
                    </div>
                  </div>
		    	</div>
	    	  </div>          
	    	  <div class="col-md-3">
                <div class="uk-panel uk-panel-box">
                  <div class="uk-overlay">
                    <img alt="" src="images/driver3.jpg">
                    <div class="uk-overlay-area">
                      <div class="uk-overlay-area-content vd-uk-overlay-area-content">
                        <p><a href="index.html#">part-time driver</a></p>
                        <p> we need a guy who can step up when the all lines are busy</p>
                        <p><a href="index.html#" class="btn btn-primary btn-inverse btn-sm">Read More</a></p>
                      </div>
                    </div>
                  </div>
		    	</div>
	    	  </div>          
	    	  <div class="col-md-3">
                <div class="uk-panel uk-panel-box">
                  <div class="uk-overlay">
                    <img alt="" src="images/driver4.jpg">
                    <div class="uk-overlay-area">
                      <div class="uk-overlay-area-content vd-uk-overlay-area-content">
                        <p><a href="index.html#">big apple cab driver</a></p>
                        <p> will drive mercedes benz gl for our top customers </p>
                        <p><a href="index.html#" class="btn btn-primary btn-inverse btn-sm">Read More</a></p>
                      </div>
                    </div>
                  </div>
	    		</div>
		      </div>
		    </div>
	      </div>
	  </section>  
	  <!-- /Taxi Driver For Hire -->

	  <!-- Taxis For Sale -->
	  <section class="taxis-sale" id="taxisSale">
        <div class="container">
	      <div class="row">                        
            <div class="col-md-12">
              <h3 class="header header-lost">taxis for sale</h3>
		    </div>
	      </div>
	      <div class="row">                        
		    <div class="col-md-12">
		      <div class="sprocket-tables">
	            <ul class="sprocket-tables-container cols-5">
		          <li class="sprocket-tables-block">
                    <div class="sprocket-tables-item">
			    	  <img src="images/cab1.jpg" class="sprocket-tables-image" alt="image">
					  <div class="sprocket-tables-desc sprocket-tables-cell sprocket-tables-bg1">
					    <span class="sprocket-tables-text">
					      Location: New York
					    </span>
				      </div>
					  <span class="sprocket-tables-price sprocket-tables-cell sprocket-tables-bg2">
				        $ 15 000
					  </span>
					  <span class="sprocket-tables-feature sprocket-tables-cell sprocket-tables-bg1">
				        Mileage: 250 000
				      </span>
					  <div class="sprocket-tables-link sprocket-tables-cell sprocket-tables-bg1">
			            <a href="index.html#" class="readon">Read More</a>
		              </div>
			        </div>
                  </li>
                  <li class="sprocket-tables-block">
	                <div class="sprocket-tables-item">
			   	      <img src="images/cab2.jpg" class="sprocket-tables-image" alt="image">
					  <div class="sprocket-tables-desc sprocket-tables-cell sprocket-tables-bg1">
					    <span class="sprocket-tables-text">
					      Location: Chicago
				        </span>
					  </div>
					  <span class="sprocket-tables-price sprocket-tables-cell sprocket-tables-bg2">
				        $ 9 000
				      </span>
					  <span class="sprocket-tables-feature sprocket-tables-cell sprocket-tables-bg1">
				        Mileage: 380 000
					  </span>
					  <div class="sprocket-tables-link sprocket-tables-cell sprocket-tables-bg1">
			            <a href="index.html#" class="readon">Read More</a>
		              </div>
			        </div>
                  </li>
                  <li class="sprocket-tables-block">
	                <div class="sprocket-tables-item">
					  <img src="images/cab3.jpg" class="sprocket-tables-image" alt="image">
					    <div class="sprocket-tables-desc sprocket-tables-cell sprocket-tables-bg1">
					      <span class="sprocket-tables-text">
					        Location: London
						  </span>
					    </div>
					    <span class="sprocket-tables-price sprocket-tables-cell sprocket-tables-bg2">
				          $ 18 000
					    </span>
					    <span class="sprocket-tables-feature sprocket-tables-cell sprocket-tables-bg1">
				          Mileage: 130 000
					    </span>
					    <div class="sprocket-tables-link sprocket-tables-cell sprocket-tables-bg1">
			              <a href="index.html#" class="readon">Read More</a>
		                </div>
			          </div>
                    </li>
                    <li class="sprocket-tables-block">
	                  <div class="sprocket-tables-item">
					  <img src="images/cab4.jpg" class="sprocket-tables-image" alt="image">
					  <div class="sprocket-tables-desc sprocket-tables-cell sprocket-tables-bg1">
					    <span class="sprocket-tables-text">
					      Location: Los Angeles
					    </span>
					  </div>
					  <span class="sprocket-tables-price sprocket-tables-cell sprocket-tables-bg2">
				        $ 12 000
					  </span>
					  <span class="sprocket-tables-feature sprocket-tables-cell sprocket-tables-bg1">
				        Mileage: 520 000
					  </span>
					  <div class="sprocket-tables-link sprocket-tables-cell sprocket-tables-bg1">
			            <a href="index.html#" class="readon">Read More</a>
		              </div>
			        </div>
                  </li>
                  <li class="sprocket-tables-block">
	                <div class="sprocket-tables-item">
				      <img src="images/cab5.jpg" class="sprocket-tables-image" alt="image">
					  <div class="sprocket-tables-desc sprocket-tables-cell sprocket-tables-bg1">
					    <span class="sprocket-tables-text">
					      Location: London
					    </span>
					  </div>
					  <span class="sprocket-tables-price sprocket-tables-cell sprocket-tables-bg2">
				        $ 12 000		
					  </span>
					  <span class="sprocket-tables-feature sprocket-tables-cell sprocket-tables-bg1">
				        Mileage: 275 000
					  </span>
					  <div class="sprocket-tables-link sprocket-tables-cell sprocket-tables-bg1">
			            <a href="index.html#" class="readon">Read More</a>
		              </div>
			        </div>
                  </li>
                </ul>
              </div>						  
            </div>
		  </div>		
	    </div>
	  </section>
	  <!-- /Taxis For Sale -->
  
      <!-- Taxi Advertising -->
	  
      <section class="advertising" id="advertising">	  
        <div class="container">
          <div class="row a-row">                        
            <div class="col-md-12">
              <h3 class="header header-advertising">taxi advertising</h3>
		    </div>
		  </div>		
	      <div class="row a-row">                        
            <div class="col-md-4">
              <h3 class="uk-text-black">advertise on our taxis now!</h3>
              <br>
              <p class="a-p">Grab people's attention with awesome advertising campaigns on our taxi cars. Reach thousands of people with your creative ad.</p>
              <h3 class="uk-text-black">3 easy steps:</h3>
              <ul class="spot a-spot">
                <li>Choose a taxi model</li>
                <li>Choose advertising position</li>
                <li>Select time period</li>
              </ul>
              <br>
              <h3>contact us and get started!</h3>
              <br>
              <h3><a href="index.html#" class="btn btn-inverse btn-lg a-a">contact us for pricing</a></h3>	  
		    </div>
            <div class="col-md-4">
              <img class="uk-text-center uk-scrollspy-init-inview uk-scrollspy-inview uk-animation-scale-up" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:300, repeat: true}" alt="ad1" src="images/ad1.png">	  
		    </div>
            <div class="col-md-4">
              <img class="uk-text-center uk-scrollspy-init-inview uk-scrollspy-inview uk-animation-scale-up" data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:600, repeat: true}" alt="ad2" src="images/ad2.png">	  
		    </div>		  
	      </div>
	    </div>
      </section>  
	  <!-- /Taxi Advertising -->

      <!-- Bottom -->
      <section class="bottom" id="bottom">	  
        <div class="container">
	      <div class="row bottom-row">                        
            <div class="col-md-3">
              <h3 class="header header-bottom">about city cab</h3>
	          <p> 
			    Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
			  </p>
		    </div>
            <div class="col-md-3">
              <h3 class="header header-bottom">downloads</h3>
		      <p>	Now you can download our app on every mobile device: </p>
              <p>
                <a href="index.html#" class="btn btn-primary"><i class="uk-icon-apple"></i></a>
                <a href="index.html#" class="btn btn-primary"><i class="uk-icon-android"></i></a>
                <a href="index.html#" class="btn btn-primary"><i class="uk-icon-windows"></i></a>
              </p>
		    </div>
            <div class="col-md-3">
              <h3 class="header header-bottom">more stuff</h3>
		      <p>
                <i class="uk-icon-check "></i>&nbsp; <a href="index.html#">Taxi drivers for hire in your city</a><br>
                <i class="uk-icon-check "></i>&nbsp; <a href="index.html#">Latest from our blog</a><br>
                <i class="uk-icon-check "></i>&nbsp; <a href="index.html#">Useful links - check the complete list</a><br>
                <i class="uk-icon-check "></i>&nbsp; <a href="index.html#">New bigger &amp; better F.A.Q. section</a>		
			  </p> 
		    </div>	
            <div class="col-md-3">
              <h3 class="header header-bottom">contacts</h3>
		      <p>
                <i class="uk-icon-envelope "></i>&nbsp; citycab (@) yoursite.com<br>
			    <i class="uk-icon-phone "></i>&nbsp; +3005513943<br>
			    <i class="uk-icon-print "></i>&nbsp; +3005513943  <br>
			    <i class="uk-icon-building "></i>&nbsp; 2nd Ave and Jamison			
			  </p>
		    </div>		  		  
		  </div>
	    </div> 
	  </section>
	  <!-- /Bottom -->

	  <!-- Footer -->
      <footer class="footer-wrapper" id="footer-wrapper">
	    <div class="container">
		  <div id="footer" class="row">
            <div class="col-md-4">
			  <span class="copyright">copyright &copy;  2015 city cab</span>
			</div>
            <div class="col-md-4 uk-text-center">
              <div>
			    <a href="index.html#" class="btn btn-inverse social"><i class="uk-icon-facebook"></i></a>				
			    <a href="index.html#" class="btn btn-inverse social"><i class="uk-icon-twitter"></i></a>				
			    <a href="index.html#" class="btn btn-inverse social"><i class="uk-icon-pinterest"></i></a>				
			    <a href="index.html#" class="btn btn-inverse social"><i class="uk-icon-google-plus"></i></a>				
			    <a href="index.html#" class="btn btn-inverse social"><i class="uk-icon-youtube-play"></i></a>				
			  </div>
			  	<a class="totop" rel="nofollow" href="index.html#page-top" title="Goto Top" data-uk-smooth-scroll><i class="uk-icon-caret-up"></i></a>
			</div>
            <div class="col-md-4 uk-text-right">	
	          <a>about</a> | <a>contacts</a>
			</div>  
	      </div>
        </div>

	  </footer>
      <!-- /Footer -->

	  <!-- Off Canvas Menu -->
      <div class="offcanvas-menu">
        <a class="close-offcanvas" href="index.html#"><i class="uk-icon-remove"></i></a>
        <div class="offcanvas-inner">
	      <ul class="nav menu">
            <li class="active"><a href="index.html">home</a></li>
            <li><a href="about.html">about</a></li>
            <li><a href="faq.html">f.a.q.</a></li>
            <li><a href="blog.html">blog</a></li>
            <li class="deeper parent active">
              <a href="index.html">more</a>
              <ul class="nav-child unstyled small">
                <li><a href="buttons.html">buttons</a></li>
                <li><a href="icons.html">icons</a></li>
                <li><a href="typography.html">typography</a></li>
                <li><a href="error-404.html">error 404</a></li>
                <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                <li><a href="blog-right-sidebar.html">right sidebar</a></li>						  
              </ul>
            </li>	
	      </ul>
        </div>  
      </div>
	  <!-- /Off Canvas Menu -->
	  
    </div>



    <!-- Scripts placed at the end of the document so the pages load faster -->
	
    <!-- Jquery scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>	
	
    <!-- Uikit scripts -->
	<script src="assets/js/uikit.min.js"></script> 	
	
	<!-- OWL Carousel scripts -->
	<script src="assets/js/owl.carousel.min.js"></script>
	
    <!-- Template scripts -->
	<script src="assets/js/template.js"></script>  
	
	<!-- Bootstrap core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
