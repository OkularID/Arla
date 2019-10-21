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

			<div id="home" class="col-lg-11 main">
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
													<h3><?php the_sub_field('title');?></h3>
													<div>
														<?php the_sub_field('description');?>
													</div>
													<?php if(have_rows('logo')): ?>
														<?php while (have_rows('logo')): the_row(); ?>
															<img src="<?php the_sub_field('image');?>">
														<?php endwhile; ?>
													<?php endif; ?>
													<?php the_sub_field('button');?>
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
													<h3><?php the_sub_field('title');?></h3>
													<div>
														<?php the_sub_field('description');?>
													</div>
													<?php if(have_rows('logo')): ?>
														<?php while (have_rows('logo')): the_row(); ?>
															<img src="<?php the_sub_field('image');?>">
														<?php endwhile; ?>
													<?php endif; ?>
													<?php the_sub_field('button');?>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>

					<!-- Product -->
					<style type="text/css">
                      #home .product .ly1 .detail .boxv h4{
					    margin-bottom: 20px;
					    color: #fff;
					  }
					  @media screen and (max-width: 846px){
					    #home .product .ly1 .detail .boxv{width: 80%;}
					    #home .product .ly1 .detail .boxv h4{
					      margin-bottom: 5px;
					      width: 100%;
					      font-size: 14px;
					    }
					    #home .product .ly1 .detail .boxv .btn-orange{
					      font-size: 10px !important;
					    }
					  }
					</style>
					<div class="col-lg-12 product">
						<div class="d-none d-lg-block">
							<div class="row">
								<div class="col-lg-6 ly1" style="background-image: url('<?php the_field('product_background');?>');">
									<div class="row">
										<div class="col-6 col-lg-6 image">
											<div class="boxv">
												<!--<img src="<?php the_field('product_image');?>" alt="Arla Indofood" title="Arla Indofood">-->
											</div>
										</div>
										<div class="col-6 col-lg-6 detail">
											<div class="boxv">
												<!--<h3><?php the_field('title_2');?></h3>-->
												<!--<div><?php the_field('product_brief');?></div>-->
												<!--<a href="<?php echo home_url('produk/susu-formula-organik');?>#puregrow"><button class="btn-orange">BELANJA SEKARANG</button></a>--><h4><?php the_field('title_2');?></h4>
												<a href="<?php echo home_url('produk/susu-formula-organik');?>#puregrow"><button class="btn-orangetr">Pelajari produk</button></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 ly2">
									<div class="row">
										<?php
						                    $usp = get_field('usp');  
						                    if( $usp ):
						                ?>
											<div class="col-6 col-lg-6 item1" style="background: #6d3500;">
												<a href="<?php echo $usp['link']; ?>">
													<div class="link">
														<div class="boxv">
															<h4><?php echo $usp['item']; ?></h4>
														</div>
													</div>
												</a>
											</div>
											<div class="col-6 col-lg-6 item2" style="background: #8d8d3d;">
												<a href="<?php echo $usp['link_2']; ?>">
													<div class="link">
														<div class="boxv">
															<h4><?php echo $usp['item_2']; ?></h4>
														</div>
													</div>
												</a>
											</div>
											<div class="col-6 col-lg-6 item3" style="background: #d39f00;">
												<a href="<?php echo $usp['link_3']; ?>">
													<div class="link">
														<div class="boxv">
															<h4><?php echo $usp['item_3']; ?></h4>
														</div>
													</div>
												</a>
											</div>
											<div class="col-6 col-lg-6 item4" style="background: #558c8d;">
												<a href="<?php echo $usp['link_4']; ?>">
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
								<style type="text/css">
									  #home .product .ecom .col-lg-2{
									    border-right: 2px solid #dfd6ca;
									  }
									  #home .product .ecom .col-lg-2:last-child{
									    border-right: none;
									  }
									  #home .product .ecom img{
									    width: 100%;
									    height: auto;
									  }
									  @media screen and (max-width: 846px){
									    #home .product .ecom .col-4{
									      border: 1px solid #bdbaae;
									    }
									    #home .product .ecom img{
									      margin-top: 10px;
									      margin-bottom: 10px;
									      width: 100%;
									    }
									  }
								</style>
								<div class="col-lg-12 ecom">
									<h5>Kini tersedia di :</h5>
									<div class="container-fluid">
										<div class="row">
											<?php if(have_rows('ecommerce')): ?>
												<?php while (have_rows('ecommerce')): the_row(); ?>
												    <div class="col-lg-2">
												        <a href="<?php the_sub_field('link');?>" target="_blank">
													        <img src="<?php the_sub_field('logo');?>" alt="Arla Indofood" title="<?php the_sub_field('title');?>">
												        </a>
											        </div>
												<?php endwhile; ?>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-block d-lg-none">
							<div class="row">
								<div class="col-12 ly1" style="background-image: url('<?php the_field('product_background');?>');">
									<div class="row">
										<div class="col-6 col-lg-6 image">
											<div class="boxv">
												<!--<img src="<?php the_field('product_image');?>" alt="Arla Indofood" title="Arla Indofood">-->
											</div>
										</div>
										<div class="col-6 col-lg-6 detail">
											<div class="boxv">
												<!--<h3><?php the_field('title_2');?></h3>-->
												<!--<div><?php the_field('product_brief');?></div>-->
												<!--<a href="<?php echo home_url('produk/susu-formula-organik');?>#puregrow"><button class="btn-orange">BELANJA SEKARANG</button></a>-->
												<h4><?php the_field('title_2');?></h4>
												<a href="<?php echo home_url('produk/susu-formula-organik');?>#puregrow"><button class="btn-orangetr">Pelajari produk</button></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 ecom">
									<h5>Kini tersedia di :</h5>
									<div class="container-fluid pl-4 pr-4">
										<div class="row">
											<?php if(have_rows('ecommerce')): ?>
												<?php while (have_rows('ecommerce')): the_row(); ?>
													<div class="col-4 p-0">
													    <a href="<?php the_sub_field('link');?>" target="_blank">
													        <img src="<?php the_sub_field('logo');?>" alt="Arla Indofood" title="<?php the_sub_field('title');?>">
												        </a>
													</div>
												<?php endwhile; ?>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<div class="col-12 ly2">
									<div class="row">
										<?php
						                    $usp = get_field('usp');  
						                    if( $usp ):
						                ?>
											<div class="col-6 col-lg-6 item1" style="background: #6d3500;">
												<a href="<?php echo $usp['link']; ?>">
													<div class="link">
														<div class="boxv">
															<h4><?php echo $usp['item']; ?></h4>
														</div>
													</div>
												</a>
											</div>
											<div class="col-6 col-lg-6 item2" style="background: #8d8d3d;">
												<a href="<?php echo $usp['link_2']; ?>">
													<div class="link">
														<div class="boxv">
															<h4><?php echo $usp['item_2']; ?></h4>
														</div>
													</div>
												</a>
											</div>
											<div class="col-6 col-lg-6 item3" style="background: #d39f00;">
												<a href="<?php echo $usp['link_3']; ?>">
													<div class="link">
														<div class="boxv">
															<h4><?php echo $usp['item_3']; ?></h4>
														</div>
													</div>
												</a>
											</div>
											<div class="col-6 col-lg-6 item4" style="background: #558c8d;">
												<a href="<?php echo $usp['link_4']; ?>">
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
							</div>
						</div>
					</div>

					<!-- Organic -->
					<div class="col-lg-12 organic">
						<h4><?php the_field('title_3');?></h4>
						<div class="container-fluid organic-article">
							<div class="row">
								<?php if(have_rows('article_organic', 303)): 
								$i = 0;
								while (have_rows('article_organic', 303)): the_row(); ?>
									<?php $i++; ?>
									<?php if( $i > 4 ): ?>
									<?php break; ?>
									<?php endif; ?>
										<div class="col-lg-3 item">
											<a href="<?php the_sub_field('link');?>" target="_blank">
												<div class="img" style="background-image: url('<?php the_sub_field('image');?>');">
													<div class="image-overlay">
														<div class="boxv">
															<h5><?php the_sub_field('title');?></h5>
														</div>
													</div>
												</div>
											</a>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>

					<!-- Sustainable-->
					<div class="col-lg-12 sustainable">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-6 image" style="background-image: url('<?php the_field('background_2');?>');"></div>
								<div class="col-lg-6 brief" style="background-image: url('<?php the_field('description_background');?>');">
									<div class="boxv">
										<?php the_field('description_2');?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Subscribe -->
					<div class="col-lg-12 subscribe" style="background-image: url('<?php the_field('background_3');?>');">
						<div class="boxv">
							<h4><?php the_field('title_4');?></h4>
							<!-- <form>
								<input type="text" name="subscribe" placeholder="Ketik email di sini">
								<button><i class="fa fa-paper-plane"></i></button>
							</form> -->
							<?php echo do_shortcode('[contact-form-7 id="403" title="Subscribe"]'); ?>
						</div>
					</div>

<?php endwhile; ?>
<?php get_footer(); ?>