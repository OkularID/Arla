<?php /* Template name: Custom Search */
    get_header(); 
?>

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
<?php
	if ($_GET['val'] && !empty($_GET['val'])) {
		$text = $_GET['val'];
	}else{
        $text = "Nothing";
    }
?>

			<div id="newsroom" class="col-lg-11 main">
				<div class="row">
					<!-- Introduction -->
					<div class="col-lg-12 header2" style="background-image: url('<?php the_field('background', 38);?>');">
						<!-- Side Search -->
						<?php include "page-sidesearch.php"; ?>
						<div class="boxv">
							<h1>Pencarian</h1>
						</div>
					</div>

					<!-- Info -->
					<div class="col-lg-12 info">
						<div class="link">
							<h5 style="text-transform: unset;">Pencarian : <i><?php echo $text; ?></i></h5>
						</div>
						<div class="container">
							<div class="row">
								<?php
			                        $args = array(
			                            'post_type' => array ('berita'),
			                            'post_per_page' => -1,
			                            's' => $text
			                        );
			                        $query = new WP_Query($args);
			                        if ($query->have_posts()){
			                            while($query->have_posts()) : $query->the_post();
                                ?>
											<div class="col-lg-4 item">
												<a href="<?php echo get_permalink( $berita->ID ); ?>">
													<div class="img" style="background-image: url('<?php the_field('background', $berita->ID) ?>');"></div>
												</a>
												<div class="box">
													<a href="<?php echo get_permalink( $berita->ID ); ?>">
														<h5><?php echo wp_trim_words( get_the_title(), 8, ' ...' ); ?></h5>
													</a>
													<p>2 days ago • 9 min read</p>
												</div>
											</div>
								<?php 
		                            	endwhile; 
		                            	wp_reset_query();
		                        	}else{
		                            	echo "<div class='col-md-12'><h3 class='title-sm ml-3 text-center'>Pencarian Tidak Ditemukan</h3></div>";
		                        	}
		                        ?>
							</div>
						</div>
					</div>

<?php get_footer(); ?>