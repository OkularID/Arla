<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Styles -->
	<link href="<?php bloginfo('stylesheet_directory');?>/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('stylesheet_directory');?>/css/animation.css" rel="stylesheet" type="text/css">
	<!--Plug in css-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/animatecss/animate.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
	<!--Icon-->
  	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/images/arla.png">
  	
  	<script type="text/javascript">(function(d,u){var b=d.getElementsByTagName("script")[0],j=d.createElement("script");j.async=true;j.src=u;b.parentNode.insertBefore(j,b);})(document,"//di2xiflr72bem.cloudfront.net/ut/74ab7f21d01d3b50_23.js");</script>

  	<?php wp_head(); ?>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8W4HVD"

	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<!-- End Google Tag Manager (noscript) -->

	<div class="container-fluid">
		<div class="row">
			<!-- Desktop Navbar -->
			<style type="text/css">
                .menu .val .nav ul li:hover ul{height: 103vh;}
                .menu .val .nav ul li a sub{
                    display: block;
                    margin-top: 5px;
                    font-size: 50%;
                }
			</style>
			<div class="col-lg-1 menu pr-0 pl-0 d-none d-lg-block">
				<div class="col-lg-1 val pr-0 pl-0">
					<a class="logo" href="<?php echo home_url();?>"><img alt="Arla Indofood" src="<?php bloginfo('stylesheet_directory');?>/images/arla.png"></a></li>
			    	<a class="logo" href="https://www.indofood.com/" target="_blank"><img alt="Arla Indofood" src="<?php bloginfo('stylesheet_directory');?>/images/indofood-nutrition.png"></a>
					<div id="nav" class='nav'>
						<?php wp_nav_menu(array(
							'name' => 'Main Menu',
							'items_wrap' => my_nav_wrap()
						)); ?>
					</div>
				</div>
			</div>
			<!-- Mobile Navbar -->
			<div class="mnav d-block d-lg-none">
				<ul class="bars">
					<div id="toggle">
						<div class="one"></div>
						<div class="two"></div>
						<div class="three"></div>
					</div>
				</ul>
				<i class="fa fa-times"></i>
				<div class="logo-nav">
					<a href="<?php echo home_url();?>"><img alt="Arla Indofood" src="<?php bloginfo('stylesheet_directory');?>/images/arla.png"></a>
					<a href="https://www.indofood.com/" target="_blank"><img alt="Arla Indofood" src="<?php bloginfo('stylesheet_directory');?>/images/indofood-nutrition.png"></a>
				</div>
				<i class="fa fa-search"></i>
				<div id="msearch" class="msearch">
					<div class="detail1" style="background-image: url('<?php the_field('background',188);?>');">
						<a href="javascript:void(0)" class="mclosebtn" onclick="closeNav()">&times;</a>
						<div id="inputsearch">
							<form action="<?php echo home_url('pencarian');?>" method="get">
			                    <input type="text" name="val" id="search-bar" placeholder="Cari di Arla Indofood" required>
			                    <button type="submit"><img src="<?php bloginfo('stylesheet_directory');?>/images/pencarian-jeruk-kecil.png"></button>
			                </form>
						</div>
					</div>
					<div class="detail2">
						<ul>
							<li><h5><?php the_field('title',188);?></h5></li>
							<?php if(have_rows('populer',188)): ?>
								<?php while (have_rows('populer',188)): the_row(); ?>
									<li><a href=""><?php the_sub_field('title');?></a></li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<div class="sidenav">
					<?php wp_nav_menu(array(
						'name' => 'Main Menu',
						'items_wrap' => my_nav_wrap()
					)); ?>
				</div>
			</div>
			<!-- Main -->

			<div id="product" class="col-lg-11 main">
				<div class="row">
				    
					<!-- Introduction -->
					<div class="col-lg-12 pl-0 pr-0 header">
						<!-- Side Search -->
						<?php include "page-sidesearch.php"; ?>
						<div class="d-none d-lg-block">
							<div class="owl-carousel-headerproduct owl-theme">
								<?php if(have_rows('header')): ?>
									<?php while (have_rows('header')): the_row(); ?>
										<div class="item">
											<div class="prdctbackground" style="background-image: url('<?php the_sub_field('background');?>');">
												<div class="boxv">
													<h1>
														<?php the_sub_field('title');?>
													</h1>
													<div>
														<?php the_sub_field('description');?>
													</div>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
						<div class="d-block d-lg-none">
							<div class="owl-carousel-headerproduct owl-theme">
								<?php if(have_rows('header')): ?>
									<?php while (have_rows('header')): the_row(); ?>
										<div class="item">
											<div class="prdctbackground" style="background-image: url('<?php the_sub_field('background_mobile');?>');">
												<div class="boxv">
													<h1>
														<?php the_sub_field('title');?>
													</h1>
													<div>
														<?php the_sub_field('description');?>
													</div>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>

					<!-- Brief -->
					<div class="col-lg-12 brief" style="background:#e1d8cc;">
						<h4><?php the_field('title_brief');?></h4>
						<div>
							<?php the_field('description_brief');?>
						</div>
						<a href="<?php echo home_url('peternakan-organik');?>"><?php the_field('button_brief');?></a>
					</div>
					
					<!-- Target -->
					<div id="puregrow" class="target-puregrow"></div>

					<!-- Product -->
					<div class="col-lg-12 prdct">
						<div class="row">
							<div class="col-lg-12">
								<div class="tabs" id="tab-360">
									<div class="row">
										<div class="col-lg-6 image">
											<div class="box1">
												<div id="sync1" class="owl-carousel owl-theme">
													<?php if(have_rows('product_image')): ?>
														<?php while (have_rows('product_image')): the_row(); ?>
															<div class="item">
															  	<img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('title');?>" title="<?php the_sub_field('title');?>">
															</div>
														<?php endwhile; ?>
													<?php endif; ?>
												</div>
											</div>
											<div class="box2">
												<div id="sync2" class="owl-carousel owl-theme">
													<?php if(have_rows('product_image')): ?>
														<?php while (have_rows('product_image')): the_row(); ?>
															<div class="item">
															  	<img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('title');?>" title="<?php the_sub_field('title');?>">
															</div>
														<?php endwhile; ?>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 detail">
											<div class="boxv">
												<h3><?php the_field('title');?></h3>
												<p><?php the_field('product_brief');?></p>
												<?php
								                    $weight = get_field('product_weight');  
								                    if( $weight ):
								                ?>
													<ul id="nav-box">
														<a class="nav-tab" target="360">
															<div class="val" style="border: 1px solid #f47f29 !important;">
																<img src="<?php echo $weight['icon']; ?>">
																<div class="boxv">
																	<h5><?php echo $weight['weight_1']; ?></h5>
																	<div class="time"><?php echo $weight['brief_1']; ?></div>
																</div>
															</div>
														</a>
														<a class="nav-tab" target="720">
															<div class="val">
																<div class="boxv">
																	<h5><?php echo $weight['weight_2']; ?></h5>
																	<div class="time"><?php echo $weight['brief_2']; ?></div>
																</div>
															</div>
														</a>
													</ul>
												<?php endif; ?>
												<button class="btn-orange">Beli Sekarang<br> 360gr</button>
											</div>
										</div>
									</div>
								</div>
								<div class="tabs" id="tab-720">
									<div class="row">
										<div class="col-lg-6 image">
											<div class="box1">
												<div id="sync3" class="owl-carousel owl-theme">
													<?php if(have_rows('product_image_2')): ?>
														<?php while (have_rows('product_image_2')): the_row(); ?>
															<div class="item">
															    <img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('title');?>" title="<?php the_sub_field('title');?>">
															</div>
														<?php endwhile; ?>
													<?php endif; ?>
												</div>
											</div>
											<div class="box2">
												<div id="sync4" class="owl-carousel owl-theme">
													<?php if(have_rows('product_image_2')): ?>
														<?php while (have_rows('product_image_2')): the_row(); ?>
															<div class="item">
															  	<img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('title');?>" title="<?php the_sub_field('title');?>">
															</div>
														<?php endwhile; ?>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 detail">
											<div class="boxv">
												<h3><?php the_field('title');?></h3>
												<p><?php the_field('product_brief');?></p>
												<?php
								                    $weight = get_field('product_weight');  
								                    if( $weight ):
								                ?>
													<ul id="nav-box">
														<a class="nav-tab" target="360">
															<div class="val">
																<div class="boxv">
																	<h5><?php echo $weight['weight_1']; ?></h5>
																	<div class="time"><?php echo $weight['brief_1']; ?></div>
																</div>
															</div>
														</a>
														<a class="nav-tab" target="720">
															<div class="val" style="border: 1px solid #f47f29 !important;">
																<img src="<?php echo $weight['icon']; ?>">
																<div class="boxv">
																	<h5><?php echo $weight['weight_2']; ?></h5>
																	<div class="time"><?php echo $weight['brief_2']; ?></div>
																</div>
															</div>
														</a>
													</ul>
												<?php endif; ?>
												<button class="btn-orange">Beli Sekarang<br> 720gr</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Info -->
					<div class="col-lg-12 info">
						<div class="row">
							<?php
					            $usp = get_field('usp');  
					            if( $usp ):
					        ?>
								<div class="col-6 col-lg-3 item1" style="background: #6d3500;">
									<a href="<?php echo home_url('produk');?>">
										<div class="link">
											<div class="boxv">
												<h4><?php echo $usp['item']; ?></h4>
											</div>
										</div>
									</a>
								</div>
								<div class="col-6 col-lg-3 item2" style="background: #8d8d3d;">
									<a href="<?php echo home_url('produk');?>">
										<div class="link">
											<div class="boxv">
												<h4><?php echo $usp['item_2']; ?></h4>
											</div>
										</div>
									</a>
								</div>
								<div class="col-6 col-lg-3 item3" style="background: #d39f00;">
									<a href="<?php echo home_url('produk');?>">
										<div class="link">
											<div class="boxv">
												<h4><?php echo $usp['item_3']; ?></h4>
											</div>
										</div>
									</a>
								</div>
								<div class="col-6 col-lg-3 item4" style="background: #558c8d;">
									<a href="<?php echo home_url('produk');?>">
										<div class="link">
											<div class="boxv">
												<h4><?php echo $usp['item_4']; ?></h4>
											</div>
										</div>
									</a>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<!-- Promo -->
					<!-- <div class="col-lg-12 promo" style="background-image: url('<?php the_field('background');?>');">
						<div class="d-none d-lg-block">
							<div class="row">
								<?php if(have_rows('promosi')): ?>
									<?php while (have_rows('promosi')): the_row(); ?>
										<div class="col-lg-4 detail">
											<p><?php the_sub_field('title');?></p>
											<div class="img" style="background-image: url('<?php the_sub_field('image');?>');"></div>
											<button class="btn-orange">Selengkapnya</button>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
						
						<div class="d-block d-lg-none">
							<div class="owl-carousel-product owl-theme">
								<?php if(have_rows('promosi')): ?>
									<?php while (have_rows('promosi')): the_row(); ?>
										<div class="item">
											<div class="detail">
												<p><?php the_sub_field('title');?></p>
											<div class="img" style="background-image: url('<?php the_sub_field('image');?>');"></div>
												<button class="btn-orange">Selengkapnya</button>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div> -->

					<!-- ads -->
					<!-- <div class="col-lg-12 d-none d-lg-block ads">
						<img src="<?php the_field('image');?>" alt="Arla Indofood" title="Arla Indofood">
					</div>
					<div class="col-lg-12 d-block d-lg-none ads">
						<img src="<?php the_field('image_mobile');?>" alt="Arla Indofood" title="Arla Indofood">
					</div> -->

<?php endwhile; ?>
<?php get_footer(); ?>