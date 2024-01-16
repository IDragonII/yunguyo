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
		<header id="header-top" class="header-top" style="background-color: #fff;">
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
							<li class="header-top-contact" >
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
		<section id="reviews" class="reviews" >
			<div class="section-header">
				<h2>Destinos turisticos</h2>
			</div><!--/.section-header-->
			<div class="reviews-content">
				<div class="testimonial-carousel">
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/explore/Playa.jpg" alt="explore image">
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
									<h2>Playa de yunguyo</h2>
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
								Localizada a orillas del lago Titicaca, en una pronunciada y abrigada bahía delimitada por los distritos de Yunguyo y Pomata, en las proximidades del sector de Inka Qamaña, cuenta con una extensión aproximada de 1 km., su superficie es completamente plana, con limpia y fina arena bañada por las suaves y cristalinas aguas del lago, tiene un sector protegido por las faldas de un cerro aledaño, que llegan cortadas verticalmente sobre la playa</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/explore/Pajana.jpg" alt="explore image">
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
									<h2>Pajana San Agustín</h2>
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
								El centro Poblado Villa Pajana San Agustin asentado a las riveras del Wiñaymarca parte del lago sagrado de los Inca el Titicaca, es uno de los asentamientos mas antiguos del altiplano tal como le demuestra su pasado histórico, así como los vestigios arqueológicos que se encuentran a doquier a cada paso dentro de la comunidad, lo que nos refiere que el centro poblado tendría una antigüedad de unos 10 000 años y que se desarrolla dentro de la cultura Qaluyo</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/explore/Monolitos.jpg" alt="explore image">
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
									<h2>Monolitos de Kaninsaya y Jurana</h2>
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
								Lugar con características de un centro ceremonial religioso preinca, se encuentra ubicada al sureste de la ciudad de Yunguyo a 3,860 m.s.n.m., sobre una extensa planicie muy cerca a las orillas del lago Titicaca, en el sector denominado Kaninsaya del centro poblado Yanapata, Distrito y Provincia de Yunguyo.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/explore/Basilica.jpg" alt="explore image">
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
									<h2>Basílica de Nuestra Señora de Copacabana</h2>
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
								La Basílica posee una imponente belleza y una gran colección de objetos religiosos. El templo fue construido en estilo renacentista entre los años 1601 y 1619, por el arquitecto Francisco Jiménez de Siguenza, y concluido junto con el atrio y posas que lo rodean el año 1640. A decir de los historiadores, D. José de Mesa y Teresa Gisbert, lo más extraordinario del conjunto de Copacabana es que conserva la Capilla Abierta o Capilla de Indios, que se puede ver adosada a la nave del templo.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/explore/Islas.jpg" alt="explore image">
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
									<h2>Islas del sol </h2>
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
								La Isla del Sol es una importante zona ritual, tanto para quechuas como aymaras. Está ubicada a 18 kilómetros al noroeste de Copacabana, Bolivia, en pleno lago Titicaca. Está a más de 4.000 metros sobre el nivel del mar, tiene una superficie de 14 km2 y unos 10 kilómetros de longitud.	
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/explore/Luna.jpg" alt="explore image">
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
									<h2>Islas de la luna </h2>
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
								La Isla de la Luna, también llamada Isla Koati, es una isla de Bolivia que se encuentra en el lago Titicaca, junto a la isla del Sol en el departamento de La Paz. Es una isla pequeña y cuenta con una superficie de 105 hectáreas.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
					<div class="single-testimonial-box">
						<div class="testimonial-description">
						<div class="single-explore-img">
									<img src="assets/images/explore/Cerro.jpg" alt="explore image">
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
									<h2>Cerro calvario </h2>
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
								El cerro El Calvario está ubicado en una colina, que está en medio de la ciudad de Copacabana al oeste de Bolivia, a orillas del Lago Titicaca. Administrativamente se encuentra en el municipio de Copacabana de la provincia de Manco Kapac en el departamento de La Paz, sobre la península de Copacabana.
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