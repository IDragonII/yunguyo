<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Yunguyo</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body style="background-color: #919191 ;">
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!--header-top start -->
		<header id="header-top" class="header-top" style="background-color: #fff ;">
			<ul>
				<li>
					<div class="header-top-left">
						<ul>
							<li class="select-opt">
								<select name="language" id="language">
									<option value="default">EN</option>
									<option value="Bangla">BN</option>
									<option value="Arabic">AB</option>
								</select>
							</li>
							<li class="select-opt">
								<select name="currency" id="currency">
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="bdt">BDT</option>
								</select>
							</li>
							<li class="select-opt">
								<a href="#"><span class="lnr lnr-magnifier"></span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="head-responsive-right pull-right">
					<div class="header-top-right">
						<ul>
							<li class="header-top-contact">
								+1 XXXXXXXXXX
							</li>
							<li class="header-top-contact">
								<a href="<?php echo base_url(); ?>/login">login</a>
							</li>
							<li class="header-top-contact">
								<a href="<?php echo base_url(); ?>/register">register</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
					
		</header><!--/.header-top-->
		<!--header-top end -->

		<!-- top-area Start -->
		<section class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="<?php echo base_url(); ?>/index">Rutas<span>Yunguyo</span></a>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class=""><a href="<?php echo base_url(); ?>/lugares">Destinos</a></li>
			                    <li class=""><a href="<?php echo base_url(); ?>/hoteles">Hoteles</a></li>
								<li class=""><a href="<?php echo base_url(); ?>/restaurantes">restaurantes</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->
		<!--reviews start -->
		<section id="reviews" class="reviews">
			<div class="section-header">
				<h2>Hoteles disponibles</h2>
			</div><!--/.section-header-->
			<div class="reviews-content">
				<div class="testimonial-carousel">
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/Hoteles/Copacabana.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">best rated</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							<div class="testimonial-info">
								<div class="testimonial-person">
									<h2>Onkel Inn Copacabana tresmil</h2>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
								El Hostal Piedra Andina, situado en Copacabana, a 800 metros del centro de la ciudad y a menos de 1 km de la Horca del Inca
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/Hoteles/Rosario.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">best rated</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							<div class="testimonial-info">
								<div class="testimonial-person">
									<h2>Hotel Rosario Lago Titicaca</h2>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
								Situado justo al lado de las orillas del lago Titicaca en la ciudad de Copacabana. Al lado del Lago Titicaca.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/Hoteles/Piedra.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">best rated</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							<div class="testimonial-info">
								<div class="testimonial-person">
									<h2>Hostal Piedra Andina</h2>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
								El Hostal Piedra Andina, situado en Copacabana, a 800 metros del centro de la ciudad y a menos de 1 km de la Horca del Inca
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/Hoteles/Wendy.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">best rated</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							<div class="testimonial-info">
								<div class="testimonial-person">
									<h2>Hotel Wendy Mar</h2>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
								El HOTEL WENDY MAR ofrece alojamiento de 2 estrellas en Copacabana, a 500 metros de la catedral de Nuestra Señora de Copacabana, y cuenta con terraza, restaurante y bar. Se encuentra a 13 km del baño Inka. Hay servicio de habitaciones, recepción 24 horas y servicio de cambio de divisa.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/Hoteles/Gloria.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">best rated</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							<div class="testimonial-info">
								<div class="testimonial-person">
									<h2>Hotel Gloria Copacabana</h2>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
								El establecimiento Gloria Copacabana se encuentra a sólo 100 metros del lago Titicaca y a 200 metros de la iglesia de Copacabana, alberga un restaurante y ofrece habitaciones con vistas panorámicas al lago y conexión Wi-Fi gratuita, así como desayuno.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/Hoteles/Paraiso.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">best rated</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							<div class="testimonial-info">
								<div class="testimonial-person">
									<h2>Hotel Paraiso</h2>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
								El hotel Paraíso Hotel Trujillo, de 3 estrellas, está situado en el mismísimo corazón de Trujillo, a 5 minutos a pie del Centro histórico de Trujillo. El hotel está situado cerca de la Plaza de Armas de Trujillo, y cuenta con una piscina exterior, así como vistas a la ciudad.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/Hoteles/Estelar.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">best rated</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							<div class="testimonial-info">
								<div class="testimonial-person">
									<h2>Hotel Estelar del Titicaca</h2>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
								Ubicado sobre la Avenida Costanera y frente a la Playa de Copacabana y al Lago Titicaca, el Hotel Estelar de Titicaca se halla a 300 m de la Plaza Sucre y a 200 m del Puerto de la ciudad. Cuenta con Wi-Fi de cortesía y estacionamiento por un suplemento con valet parking.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/Hoteles/Perla.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">best rated</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							<div class="testimonial-info">
								<div class="testimonial-person">
									<h2>Hotel Perla Del Lago</h2>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
								Bienvenido a Hotel Perla Del Lago, una fantástica opción para viajeros como tú, Perla del Lago tiene servicio de habitaciones, espacio para guardar el equipaje y cambio de divisas. Para los huéspedes que tengan coche, hay garaje para aparcar disponible
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/Hoteles/Inca.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">best rated</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							<div class="testimonial-info">
								<div class="testimonial-person">
									<h2>La Aldea del Inca</h2>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
								El Hotel Aldea del inca está ubicado en la Zona Colquepata calle San Antonio y Av. Jáuregui Nº 2 es un hotel tematizado en la cultura Inca de Bolivia en su decoración y estructura, misma que se aprecia en cada una de sus sus amplias habitaciones confortables
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				</div>
			</div>

		</section><!--/.reviews-->
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>