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

			<div id="contact" class="col-lg-11 main">
				<div class="row">
					<!-- Introduction -->
					<div class="col-lg-12 header2" style="background-image: url('<?php the_field('background', 46);?>');">
						<!-- Side Search -->
						<?php include "page-sidesearch.php"; ?>
						<div class="boxv">
							<h1><?php the_field('title', 46);?></h1>
							<p><?php the_field('description', 46);?></p>
						</div>
					</div>

					<!-- Info -->
					<div class="col-lg-9 info">
						<h2 class="mb-5">Form Salesforce (Adjust)</h2>
    					<form action="https://arla--acceptance.my.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8" method="POST" style="margin-bottom:200px;">
                            <input type=hidden name="orgid" value="00D0l000000DihT">
                            <input type=hidden name="retURL" value="https://arlaindofood.co.id/">
                            <input type=hidden id="00N0l000003nRxU" maxlength="255" name="00N0l000003nRxU" size="20" value="https://arlaindofood.co.id/" />
                            <input type="hidden" name="debug" value=1>
                            <input type="hidden" name="debugEmail" value="admin@vaneigens.nl">
                            <label for="00N0l000003nRym">Nama Lengkap*</label><br><input type="text" name="00N0l000003nRym" id="00N0l000003nRym" class="form-control wpcf7-text col-lg-8" maxlength="255" required /><br>
                            <label for="email">Email*</label><br><input type="email" name="email" id="email" class="form-control wpcf7-text col-lg-8" maxlength="80" required /><br>
                            <label for="phone">Nomor HP*</label><br><input type="number" name="phone" id="phone" maxlength="40" class="form-control wpcf7-number col-lg-8" required /><br>
                            <label for="date">Tanggal Lahir Anak*</label><br><input type="date" name="date" id="date" class="form-control wpcf7-date col-lg-8" maxlength="80" required /><br>
                            <label for="message">Pesan*</label><br><textarea name="message" class="form-control wpcf7-textarea col-lg-8" cols="40" rows="10" required></textarea><br>
                            <div class="col-lg-8 pr-0">
                                <input type="submit" value="Submit" class="wpcf7-submit btn-orange pull-right mt-3">
                            </div>
                        </form>
                        <hr class="mb-5">
    					<h2 class="mb-5">Form Salesforce (From Email)</h2>
    					<form action="https://arla--acceptance.my.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8" method="POST" style="margin-bottom:200px;">
                            <input type=hidden name="orgid" value="00D0l000000DihT">
                            <input type=hidden name="retURL" value="https://arlaindofood.co.id/">
                            <input type=hidden id="00N0l000003nRxU" maxlength="255" name="00N0l000003nRxU" size="20" value="https://arlaindofood.co.id/" />
                            <input type="hidden" name="debug" value=1>
                            <input type="hidden" name="debugEmail" value="admin@vaneigens.nl">
                            <label for="email">Email</label><br><input id="email" maxlength="80" name="email" size="20" type="text" /><br><br>
                            <label for="phone">Phone</label><br><input id="phone" maxlength="40" name="phone" size="20" type="text" /><br><br>
                            <label for="subject">Subject</label><br><input id="subject" maxlength="80" name="subject" size="20" type="text" /><br><br>
                            <label for="description">Description</label><br><textarea name="description"></textarea><br><br>
                            First name:<br><input id="00N0l000003nRym" maxlength="255" name="00N0l000003nRym" size="20" type="text" /><br><br>
                            Last name:<br><input id="00N0l000003nRyw" maxlength="255" name="00N0l000003nRyw" size="20" type="text" /><br><br>
                            Address:<br><input id="00N0l000003nRz6" maxlength="255" name="00N0l000003nRz6" size="20" type="text" /><br><br>
                            Postal code:<br><input id="00N0l000003nRzL" maxlength="255" name="00N0l000003nRzL" size="20" type="text" /><br><br>
                            City:<br><input id="00N0l000003nRzQ" maxlength="255" name="00N0l000003nRzQ" size="20" type="text" /><br><br>
                            <input type="submit" name="submit">
                        </form>
                        <hr class="mb-5">
    					<h2 class="mb-5">Form Tulis Pesan</h2>
    					<form action="https://arla--acceptance.my.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8" method="POST">
                            <input type=hidden name="orgid" value="00D0l000000DihT">
                            <input type=hidden name="retURL" value="https://arlaindofood.co.id/">
                            <input type=hidden id="00N0l000003nRxU" maxlength="255" name="00N0l000003nRxU" size="20" value="https://arlaindofood.co.id/" />
                            <input type="hidden" name="debug" value=1>
                            <input type="hidden" name="debugEmail" value="admin@vaneigens.nl">
                            <label for="00N0l000003nRym">First name:</label><br><input id="00N0l000003nRym" maxlength="255" name="00N0l000003nRym" type="text" class="form-control wpcf7-text col-lg-8" required /><br>
                            <label for="00N0l000003nRyw">Last name:</label><br><input id="00N0l000003nRyw" maxlength="255" name="00N0l000003nRyw" type="text" class="form-control wpcf7-text col-lg-8" required /><br>
                            <label for="email">Email</label><br><input id="email" maxlength="80" name="email" type="text" class="form-control wpcf7-text col-lg-8" required /><br>
                            <label for="phone">Phone</label><br><input id="phone" maxlength="40" name="phone" type="number" class="form-control wpcf7-number col-lg-8" required /><br>
                            <label for="description">Description</label><br><textarea name="description" class="form-control wpcf7-textarea col-lg-8" cols="40" rows="10" required></textarea><br>
                            <div class="col-lg-8 pr-0">
                                <input type="submit" value="Submit" class="wpcf7-submit btn-orange pull-right mt-3">
                            </div>
                        </form>
					</div>
					
					<!-- Side -->
					<div class="col-lg-3 side">
						<ul>
							<li><h5><?php the_field('title_4',44);?></h5></li>
							<?php if(have_rows('menu',44)): ?>
								<?php while (have_rows('menu',44)): the_row(); ?>
									<li><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>

<?php endwhile; ?>
<?php get_footer(); ?>