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

			<div id="newsroom" class="col-lg-11 main">
				<div class="row">
					<!-- Introduction -->
					<div class="col-lg-12 header2" style="background-image: url('<?php the_field('background');?>');">
						<!-- Side Search -->
						<?php include "page-sidesearch.php"; ?>
						<div class="boxv">
							<h1><?php the_field('title');?></h1>
							<ul class="list-path">
								<?php if(have_rows('tautan')): ?>
									<?php while (have_rows('tautan')): the_row(); ?>
											<li><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></li>
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>

					<!-- Info -->
					<div class="col-lg-12 info">
						<div class="link">
							<h5><?php the_field('title_2');?></h5>
						</div>
						<div class="container">
							<div class="row">
								<?php
									$params = array('post_type' => 'berita' , 'order' => 'DESC');
									// 'posts_per_page' => 3, 
									$berita = new WP_Query($params);
									if($berita->have_posts()){
										while ($berita->have_posts()) : $berita->the_post();
								?>
											<div class="col-lg-4 item">
												<a href="<?php echo get_permalink( $berita->ID ); ?>">
													<div class="img" style="background-image: url('<?php the_field('background', $berita->ID) ?>');"></div>
												</a>
												<div class="box">
													<a href="<?php echo get_permalink( $berita->ID ); ?>">
														<h5><?php echo wp_trim_words( get_the_title(), 8, ' ...' ); ?></h5>
													</a>
													<p><?php the_time('d/m/y'); ?> • oleh <?php the_field('author', $berita->ID) ?></p>
												</div>
											</div>
								<?php  
										endwhile;
									} 
								?>
							</div>
						</div>
					</div>

					<!-- Video -->
					<div class="col-lg-12 jurnal">
						<h5><?php the_field('title_3',38);?></h5>
						<div class="owl-carousel-news owl-theme">
							<?php
								$params = array('post_type' => 'berita' , 'order' => 'DESC');
								$berita = new WP_Query($params);
								if($berita->have_posts()){
									while ($berita->have_posts()) : $berita->the_post();
							?>
								<div class="item">
									<div class="brief">
										<div class="title">
											<h1><?php echo the_title(); ?></h1>
											<div class="share">
												<a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink( $berita->ID ); ?>">
													<i class="fa fa-share-alt"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="video">
										<?php echo the_field('video'); ?>
										<div class="box">
											<p><?php echo the_field('story'); ?></p>
											<div class="img" style="background-image: url('<?php echo the_field('image'); ?>');"></div>
											<div class="inf">
												<?php echo the_field('name'); ?><br>
												<?php echo the_field('position'); ?>
											</div>
										</div>
									</div>
								</div>
							<?php  
									endwhile;
								} 
							?>
						</div>
					</div>

<?php endwhile; ?>
<?php get_footer(); ?>