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
		
			<div class="col-lg-11 main latestnews">
				<div class="row">
					<!-- Introduction -->
					<div class="col-lg-12 header2" style="background-image: url('<?php the_field('background');?>');">
						<div id="arlasearch" class="arlasearch">
							<img id="btnsearch" src="<?php bloginfo('stylesheet_directory');?>/images/search.png">
							<!-- Side Search -->
							<?php include "page-sidesearch.php"; ?>
						</div>
						<div class="boxv">
							<h1><?php the_field('title');?></h1>
							<?php the_field('description');?>
						</div>
					</div>

					<!-- Info -->
					<div class="col-lg-9 info">
						<div class="container">
							<div class="row">
								<?php
									$params = array('post_type' => 'berita' , 'order' => 'DESC');
									$berita = new WP_Query($params);
									if($berita->have_posts()){
										while ($berita->have_posts()) : $berita->the_post();
								?>
											<div class="col-lg-12 item pb-4">
												<div class="row">
													<div class="col-lg-5 pl-0">
														<div class="img" style="background-image: url('<?php the_field('background', $berita->ID) ?>');"></div>
													</div>
													<div class="col-lg-7">
														<a href="<?php echo get_permalink( $berita->ID ); ?>">
															<h5><?php echo the_title(); ?></h5>
														</a>
														<div class="grey mb-4">
															<?php echo wp_trim_words( get_field('detail'), 35, ' ...' ); ?>
														</div>
														<p class="grey mb-0">by Jens Lehman</p>
														<p class="time">2 days ago • 9 min read</p>	
													</div>
												</div>
											</div>
								<?php  
										endwhile;
									} 
								?>
							</div>
						</div>
						<div class="pagelist mb-5">
							<ul>
								<li class="active"><a href="">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href="">4</a></li>
								<li><a href="">5</a></li>
							</ul>
						</div>
					</div>

					<!-- Side -->
					<div class="col-lg-3 side">
						<ul>
							<li><h5><?php the_field('title_2',40);?></h5></li>
							<?php if(have_rows('menu',40)): ?>
								<?php while (have_rows('menu',40)): the_row(); ?>
									<li><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>

<?php endwhile; ?>
<?php get_footer(); ?>