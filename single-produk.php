<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <script type="application/ld+json">
    
    {
    
      "@context": "https://schema.org/",
    
      "@type": "Product",
    
      "name": "PUREGROW Organic",
    
      "image": "https://arlaindofood.co.id/wp-content/uploads/2019/06/puregrow-360-tampilan-depan.png",
    
      "description": "Susu formula organik untuk anak usia 1 - 3 tahun, tanpa bahan kimia buatan dan gula tambahan.",
    
      "brand": "Arla Indofood",
    
      "sku": "360",
    
      "offers": {
    
        "@type": "Offer",
    
        "url": "https://arlaindofood.co.id/produk/susu-formula-organik/",
    
        "priceCurrency": "IDR",
    
        "price": "144500",
    
        "priceValidUntil": "2021-09-30",
    
        "availability": "https://schema.org/InStock",
    
        "itemCondition": "https://schema.org/NewCondition"
    
      }
    
    }
    
    </script>
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
                .container-fluid{overflow: hidden !important;}
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

			<div id="product" class="col-lg-11 p-0 main">
				<div class="row">
				    
				    <!-- Popup disclaimer -->
					<div id="disclaimer" class="disclaimer">
						<div class="modal fade" id="autodisplay">
						  	<div class="modal-dialog modal-dialog-centered modal-lg">
						    	<div class="modal-content">
						    		<div id="autodisplay" class="containter-fluid">
						    			<div class="row">
							    			<div class="col-lg-4 pl-0 pr-0">
							    				<div class="ly1" style="background: #568b8c;">
							    					<div class="boxv">
								    					<h4>
											    			<?php the_field('title_disclaimer', 7);?>
											    		</h4>
											    	</div>
							    				</div>
							    			</div>
							    			<div class="col-lg-8 pl-0 pr-0">
							    				<div class="ly2" style="background: #f7f5f2;">
							    					<div class="boxv">
											    		<p>
											    			<?php the_field('description_disclaimer', 7);?>
											    		</p>
											    		<button type="button" class="btn-orange" data-dismiss="modal"><?php the_field('button_disclaimer', 7);?></button>
							    					</div>
							    				</div>
							    			</div>
							    		</div>
						    		</div>
						    	</div>
						  	</div>
						</div>
					</div>
					
					<!-- Introduction -->
					<style>
						.text-orange{
							color: #f48024;
						}
					  #product .header .prdctbackground{
                        background-size: 100% 100%;
					  }
					  #product .header .prdctbackground .boxv h2{font-size: 2.5rem;line-height: 1.2;}
				      @media screen and (max-width: 846px){
                        #product .header .prdctbackground .boxv h2{font-size: 25px !important;line-height: 33.5px !important;}
                        footer .copy{bottom:4%;}
                      }
					</style>
					<div class="col-lg-12 pl-0 pr-0 header">
						<!-- Side Search -->
						<?php include "page-sidesearch.php"; ?>
						<div class="d-none d-lg-block">
							<div class="owl-carousel-headerproduct owl-theme">
								<?php if(have_rows('header', 209)): ?>
									<?php while (have_rows('header', 209)): the_row(); ?>
										<div class="item">
											<div class="prdctbackground" style="background-image: url('<?php the_sub_field('background');?>');">
												<div class="boxv">
													<h2>
														<?php the_sub_field('title');?>
													</h2>
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
								<?php if(have_rows('header', 209)): ?>
									<?php while (have_rows('header', 209)): the_row(); ?>
										<div class="item">
											<div class="prdctbackground" style="background-image: url('<?php the_sub_field('background_mobile');?>');">
												<div class="boxv">
													<h2>
														<?php the_sub_field('title');?>
													</h2>
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

					<!-- Product -->
					<div class="col-lg-12 product-item">
						<div id="puregrow" class="target-puregrow"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-5 image dnone">
									<div class="box1">
										<div id="sync1" class="owl-carousel owl-theme">
											<?php if(have_rows('product_image', 209)): ?>
												<?php while (have_rows('product_image', 209)): the_row(); ?>
													<div class="item">
														<img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('title');?>" title="<?php the_sub_field('title');?>">
													</div>
												<?php endwhile; ?>
											<?php endif; ?>
											<!-- <div class="item">
												<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-samping-kiri.jpg" alt="Puregrow" title="Puregrow">
											</div>
											<div class="item">
												<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-depan.jpg" alt="Puregrow" title="Puregrow">
											</div>
											<div class="item">
												<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-samping-kanan.jpg" alt="Puregrow" title="Puregrow">
											</div>
											<div class="item">
												<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-belakang.jpg" alt="Puregrow" title="Puregrow">
											</div>
											<div class="item">
												<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-Sides.jpg" alt="Puregrow" title="Puregrow">
											</div> -->
										</div>
									</div>
									<div class="box2">
										<div id="sync2" class="owl-carousel owl-theme">
											<?php if(have_rows('product_image', 209)): ?>
												<?php while (have_rows('product_image', 209)): the_row(); ?>
													<div class="item">
														<img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('title');?>" title="<?php the_sub_field('title');?>">
													</div>
												<?php endwhile; ?>
											<?php endif; ?>
											<!-- <div class="item">
												<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-samping-kiri.jpg" alt="Puregrow" title="Puregrow">
											</div>
											<div class="item">
												<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-depan.jpg" alt="Puregrow" title="Puregrow">
											</div>
											<div class="item">
												<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-samping-kanan.jpg" alt="Puregrow" title="Puregrow">
											</div>
											<div class="item">
												<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-belakang.jpg" alt="Puregrow" title="Puregrow">
											</div>
											<div class="item">
												<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-Sides.jpg" alt="Puregrow" title="Puregrow">
											</div> -->
										</div>
									</div>
								</div>
								<div class="col-lg-7 nutrition">
									<div class="container-fluid">
										<div class="row">
											<div class="col-lg-12">
												<h4 class="font-skyblue"><?php the_field('title_brief', 209);?></h4>
											</div>
											<?php if(have_rows('description', 209)): ?>
												<?php while (have_rows('description', 209)): the_row(); ?>
													<div class="col-lg-12 mb-3">
														<div class="container-fluid">
															<div class="row">
																<div class="col-lg-2" style="position:relative;height:110px;overflow:hidden;">
																	<img src="<?php the_sub_field('icon');?>" style="position:absolute;top:50%;transform:translateY(-50%);width:80%;">
																</div>
																<div class="col-lg-10" style="position:relative;height:110px;overflow:hidden;">
																    <div style="position:absolute;top:50%;transform:translateY(-50%);">
																	    <h5 class="font-skyblue"><?php the_sub_field('title');?></h5>
																	    <?php the_sub_field('brief');?>
																	</div>
																</div>	
															</div>
														</div>
													</div>
												<?php endwhile; ?>
											<?php endif; ?>
											<!-- <?php if( have_rows('nutrition', 209) ): while ( have_rows('nutrition', 209) ) : the_row(); ?>
												<div class="col-lg-12 mb-3">
													<div class="container-fluid">
														<div class="row">
															<div class="col-lg-2">
																<img class="img-fluid" src="<?php the_sub_field('image');?>">
															</div>
															<div class="col-lg-10">
																<h5 class="font-skyblue"><?php the_sub_field('title');?></h5>
																<?php the_sub_field('value');?>
															</div>	
														</div>
													</div>
												</div>
												<div class="col-lg-12 mb-3">
													<div class="container-fluid">
														<div class="row">
															<div class="col-lg-2">
																<img class="img-fluid" src="<?php the_sub_field('image_2');?>">
															</div>
															<div class="col-lg-10">
																<h5 class="font-skyblue"><?php the_sub_field('title_2');?></h5>
																<?php the_sub_field('value_2');?>
															</div>	
														</div>
													</div>
												</div>
												<div class="col-lg-12 mb-3">
													<div class="container-fluid">
														<div class="row">
															<div class="col-lg-2">
																<img class="img-fluid" src="<?php the_sub_field('image_3');?>">
															</div>
															<div class="col-lg-10">
																<h5 class="font-skyblue"><?php the_sub_field('title_3');?></h5>
																<?php the_sub_field('value_3');?>
															</div>	
														</div>
													</div>
												</div>
												<div class="col-lg-12 mb-3">
													<div class="container-fluid">
														<div class="row">
															<div class="col-lg-2">
																<img class="img-fluid" src="<?php the_sub_field('image_4');?>">
															</div>
															<div class="col-lg-10">
																<h5 class="font-skyblue"><?php the_sub_field('title_4');?></h5>
																<?php the_sub_field('value_4');?>
															</div>	
														</div>
													</div>
												</div>
											<?php endwhile; endif; ?> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Ecommerce -->
					<div class="col-lg-12 product-ecommerce">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-12 product-item d-block d-lg-none">
									<div class="container-fluid">
										<div class="row">
											<div class="col-12 image">
												<div class="box1">
													<div id="sync3" class="owl-carousel owl-theme">
														<?php if(have_rows('product_image', 209)): ?>
															<?php while (have_rows('product_image', 209)): the_row(); ?>
																<div class="item">
																	<img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('title');?>" title="<?php the_sub_field('title');?>">
																</div>
															<?php endwhile; ?>
														<?php endif; ?>
														<!-- <div class="item">
															<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-samping-kiri.jpg" alt="Puregrow" title="Puregrow">
														</div>
														<div class="item">
															<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-depan.jpg" alt="Puregrow" title="Puregrow">
														</div>
														<div class="item">
															<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-samping-kanan.jpg" alt="Puregrow" title="Puregrow">
														</div>
														<div class="item">
															<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-belakang.jpg" alt="Puregrow" title="Puregrow">
														</div>
														<div class="item">
															<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-Sides.jpg" alt="Puregrow" title="Puregrow">
														</div> -->
													</div>
												</div>
												<div class="box2">
													<div id="sync4" class="owl-carousel owl-theme">
														<?php if(have_rows('product_image', 209)): ?>
															<?php while (have_rows('product_image', 209)): the_row(); ?>
																<div class="item">
																	<img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('title');?>" title="<?php the_sub_field('title');?>">
																</div>
															<?php endwhile; ?>
														<?php endif; ?>
														<!-- <div class="item">
															<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-samping-kiri.jpg" alt="Puregrow" title="Puregrow">
														</div>
														<div class="item">
															<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-depan.jpg" alt="Puregrow" title="Puregrow">
														</div>
														<div class="item">
															<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-samping-kanan.jpg" alt="Puregrow" title="Puregrow">
														</div>
														<div class="item">
															<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-belakang.jpg" alt="Puregrow" title="Puregrow">
														</div>
														<div class="item">
															<img src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/puregrow-organic-720-Sides.jpg" alt="Puregrow" title="Puregrow">
														</div> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 text-center">
									<h4 class="font-skyblue">Beli di e-commerce kesayangan Anda:</h4>
								</div>
								<div class="col-lg-12">
									<div class="container-fluid">
										<div class="d-none d-lg-block">
											<div class="row">
												<?php if(have_rows('ecommerce1', 209)): ?>
													<?php while (have_rows('ecommerce1', 209)): the_row(); ?>
														<div class="col-lg-4 text-center">
															<img class="img-fluid" src="<?php the_sub_field('logo');?>">
															<a href="<?php the_sub_field('link');?>" target="_blank" class="btn-orange">Beli sekarang</a>
														</div>
													<?php endwhile; ?>
												<?php endif; ?>
												<!-- <div class="col-lg-4 text-center">
													<img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/tokopedia-logo.png">
													<a href="" target="_blank" class="btn-orange">Beli sekarang</a>
												</div>
												<div class="col-lg-4 text-center">
													<img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/shopee-logo.png">
													<a href="" target="_blank" class="btn-orange">Beli sekarang</a>
												</div>
												<div class="col-lg-4 text-center">
													<img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/lazada-logo.png">
													<a href="" target="_blank" class="btn-orange">Beli sekarang</a>
												</div> -->
											</div>
										</div>
										<div class="d-block d-lg-none">
											<div class="row">
												<div class="col-12">
													<table>
														<?php if(have_rows('ecommerce1', 209)): ?>
															<?php while (have_rows('ecommerce1', 209)): the_row(); ?>
																<tr>
																	<td>
																		<img class="img-fluid" src="<?php the_sub_field('logo_mobile');?>">	
																	</td>
																	<td>
																		<a href="<?php the_sub_field('link');?>" target="_blank" class="btn-orange">Beli sekarang</a>	
																	</td>
																</tr>
															<?php endwhile; ?>
														<?php endif; ?>
														<!-- <tr>
															<td>
																<img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/tokopedia-logo.png">	
															</td>
															<td>
																<a href="" target="_blank" class="btn-orange">Beli sekarang</a>	
															</td>
														</tr>
														<tr>
															<td>
																<img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/shopee-logo.png">
															</td>
															<td>
																<a href="" target="_blank" class="btn-orange">Beli sekarang</a>
															</td>
														</tr>
														<tr>
															<td>
																<img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/lazada-logo.png">	
															</td>
															<td>
																<a href="" target="_blank" class="btn-orange">Beli sekarang</a>
															</td>
														</tr> -->
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="line-grey"></div>
								</div>
								<div class="col-lg-12 text-center">
									<div class="d-none d-lg-block">
										<?php if(have_rows('ecommerce2', 209)): ?>
											<?php while (have_rows('ecommerce2', 209)): the_row(); ?>
												<div class="logo">
													<a href="<?php the_sub_field('link');?>" target="_blank"><img class="img-fluid" src="<?php the_sub_field('logo');?>"></a>
												</div>
											<?php endwhile; ?>
										<?php endif; ?>
										<!-- <div class="logo">
											<a href="" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/orami-logo.png"></a>
										</div>
										<div class="logo">
											<a href="" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/bukalapak-logo.png"></a>
										</div>
										<div class="logo">
											<a href="" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/blibli-logo.png"></a>
										</div>
										<div class="logo">
											<a href="" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/jd-id-logo.png"></a>
										</div>
										<div class="logo">
											<a href="" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/elevenia-logo.png"></a>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Ecommerce Mobile -->
					<div class="d-block d-lg-none">
    				    <div class="col-12 mobile-ecom">
    						<div class="container-fluid">
								<div class="row">
									<?php if(have_rows('ecommerce2', 209)): ?>
										<?php while (have_rows('ecommerce2', 209)): the_row(); ?>
											<div class="col-4 p-0">
												<a href="<?php the_sub_field('link');?>" target="_blank"><img class="img-fluid" src="<?php the_sub_field('logo');?>"></a>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
									<!-- <div class="col-4 p-0">
										<a href="" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/orami-logo.png"></a>
									</div>
									<div class="col-4 p-0">
										<a href="" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/bukalapak-logo.png"></a>
									</div>
									<div class="col-4 p-0">
										<a href="" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/blibli-logo.png"></a>
									</div>
									<div class="col-4 p-0">
										<a href="" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/jd-id-logo.png"></a>
									</div>
									<div class="col-4 p-0">
										<a href="" target="_blank"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/produk-puregrow/elevenia-logo.png"></a>
									</div> -->
								</div>
							</div>
    					</div>
    				</div>

					<!-- Promo -->
					<div class="col-lg-12 promo">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-12 text-center">
									<h4 class="font-skyblue">Promo Terkini:</h4>
								</div>
								<div class="col-lg-12">
									<div class="owl-carousel-promo owl-theme">
										<?php if(have_rows('promosi',209)): ?>
											<?php while (have_rows('promosi',209)): the_row(); ?>
												<div class="item">
													<div class="detail">
														<img src="<?php the_sub_field('image');?>">
														<p class="font-skyblue"><?php the_sub_field('title');?></p>
														<a href="<?php the_sub_field('link');?>" target="_blank" class="font-orange">Selengkapnya</a>
													</div>
												</div>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Info -->
					<div class="col-lg-12 info">
						<div class="container-fluid">
							<div class="row">
								<?php
						            $usp = get_field('usp', 209);  
						            if( $usp ):
						        ?>
									<div class="col-6 col-lg-3 item1" style="background: #6d3500;">
										<a href="<?php echo $usp['link']; ?>">
											<div class="link">
												<div class="boxv">
													<h4><?php echo $usp['item']; ?></h4>
												</div>
											</div>
										</a>
									</div>
									<div class="col-6 col-lg-3 item2" style="background: #8d8d3d;">
										<a href="<?php echo $usp['link_2']; ?>">
											<div class="link">
												<div class="boxv">
													<h4><?php echo $usp['item_2']; ?></h4>
												</div>
											</div>
										</a>
									</div>
									<div class="col-6 col-lg-3 item3" style="background: #d39f00;">
										<a href="<?php echo $usp['link_3']; ?>">
											<div class="link">
												<div class="boxv">
													<h4><?php echo $usp['item_3']; ?></h4>
												</div>
											</div>
										</a>
									</div>
									<div class="col-6 col-lg-3 item4" style="background: #558c8d;">
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

					<!-- Store -->
					<div class="col-lg-12 store">
					    <h4 class="font-skyblue"><?php the_field('title_store', 209);?></h4>
						<div class="box">
							<!--<?php the_field('embed_store', 209);?>-->
						 <?php echo do_shortcode('[wpsl]'); ?> 
						<!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1adIbiQ5iUxq8ntO47gyPn_BLwuj4a7fb" width="100%" style="height: 80vh;"></iframe> -->
						</div>
					</div>

					<!-- Description -->
					<div class="col-lg-12 description">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-12 text-center">
									<h4 class="font-skyblue"><?php the_field('title_puregrow', 209);?></h4>
								</div>
								<?php if(have_rows('content_puregrow',209)): ?>
									<?php while (have_rows('content_puregrow',209)): the_row(); ?>
										<div class="col-lg-4">
											<h6 class="font-skyblue"><?php the_sub_field('title');?></h6>
										</div>
										<div class="col-lg-8">
											<div class="font-skyblue brief">
												<?php the_sub_field('brief');?>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
								<!-- <div class="col-lg-4">
									<h6 class="font-skyblue">Susu Formula Organik.</h6>
								</div>
								<div class="col-lg-8">
									<div class="font-skyblue brief">
										<p>Susu formula organik PUREGROW Organic adalah produk Arla Indofood terbaru yang dikemas sebagai susu formula untuk anak 1 tahun, susu formula untuk anak 2 tahun, dan susu formula untuk anak 3 tahun. PUREGROW Organic memiliki semua kebaikan growing up milk (susu pertumbuhan) untuk menunjang tumbuh kembang anak. Susu formula organik kami telah sesuai dengan standar Badan Kesehatan Dunia (WHO), peraturan internasional Codex Alimentarius  dan BPOM Republik Indonesia seperti Omega 3 & 6, FOS & GOS, DHA, zat besi, kalsium, vitamin A, D dan E.</p>
									</div>
								</div>
								<div class="col-lg-4">
									<h6 class="font-skyblue">Apa saja kandungannya?</h6>
								</div>
								<div class="col-lg-8">
									<div class="font-skyblue brief">
										<p>PUREGROW Organic terbuat dari bahan-bahan yang hampir sepenuhnya organik (99%), dan tersertifikasi baik oleh European Union Organic Certification maupun sertifikasi Organik Indonesia. Susu formula organik kami memastikan nutrisi yang terkandung di dalamnya sepenuhnya alami, tanpa zat-zat kimia tambahan.</p>
										<p>Tidak hanya itu, PUREGROW Organic juga tidak mengandung gula tambahan, selain gula yang secara alami sudah terkandung di dalam susu sapi. Moms & Dads kini tak perlu merasa khawatir dengan kemungkinan si anak mengkonsumsi gula dalam jumlah berlebih. Mulai gaya hidup organik sejak dini, karena lebih natural lebih baik. Berilah nutrisi alami yang terbaik bagi si kecil dengan susu formula untuk anak 1 tahun, susu formula untuk anak 2 tahun, dan susu formula untuk anak 3 tahun yang terbaik dari Arla Indofood.</p>
									</div>
								</div>
								<div class="col-lg-4">
									<h6 class="font-skyblue">Bagaimana cara penyiapannya?</h6>
								</div>
								<div class="col-lg-8">
									<div class="font-skyblue brief">
										<p>Menyiapkan susu formula organik PUREGROW organic perlu diperhatikan dengan baik agar anak tetap mendapatkan nutrisi terbaik. Faktor seperti air kurang matang, gelas tidak steril, dan penyajian yang kurang tepat dapat berbahaya bagi anak dan dapat menyebabkan anak menjadi sakit.</p>
										<p>Oleh karena itu, ikuti langkah-langkah berikut ini dalam menyajikan susu formula organik PUREGROW Organic:</p>
										<ul>
											<li>Cuci tangan sebelum menyiapkan susu</li>
											<li>Cuci bersih gelas, kemudian rebus selama 5 menit</li>
											<li>Rebus air minum sampai mendidih selama 5 menit dan diamkan hingga suam-suam kuku (sekitar 40 C) lalu tuang 200 ml air ke dalam gelas bersih</li>
											<li>Tambahkan 7 sendok takar (rata) PUREGROW atau sebanyak 30 gram</li>
											<li>Aduk sampai benar-benar larut</li>
											<li>Cek suhu sebelum diberikan ke anak. Berikan segera jika suhu telah sesuai.</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-4">
									<h6 class="font-skyblue">Bagaimana cara penyimpanannya?</h6>
								</div>
								<div class="col-lg-8">
									<div class="font-skyblue brief">
										<p>Cara menyimpan susu formula organik PUREGROW Organic juga perlu menjadi perhatian bagi para moms agar produk tetap baik dan aman untuk dikonsumsi bagi si kecil. Berikut adalah beberapa tips bagaimana cara menyimpan susu formula untuk anak 1 tahun, susu formula untuk anak 2 tahun, dan susu formula untuk anak 3 tahun.</p>
										<ul>
											<li>Setelah dibuka, lipat kantong aluminium beberapa kali dan simpan dalam wadah kering dan tertutup rapat.</li>
											<li>Pastikan tidak ada uap air yang bersentuhan dengan bubuk susu formula organik.</li>
											<li>Letakkan wadah di tempat yang bersih, sejuk, dan kering. Namun jangan di dalam lemari es.</li>
											<li>Hindari susu formula organik dari paparan sinar matahari langsung.</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-4">
									<h6 class="font-skyblue">Apakah susu formula organik cocok untuk anak kurang dari 1 tahun?</h6>
								</div>
								<div class="col-lg-8">
									<div class="font-skyblue brief">
										<p>Jawabannya adalah tidak. Susu formula organik PUREGROW Organic tidak cocok dikonsumsi oleh anak berusia kurang dari 1 tahun. PUREGROW Organic hanya diperuntukkan sebagai susu formula untuk anak 1 tahun, susu formula untuk anak 2 tahun, dan susu formula untuk anak 3 tahun.</p>
									</div>
								</div> -->
							</div>
						</div>
					</div>

					<!-- ads -->
					<div class="col-lg-12 d-none d-lg-block ads">
						<a href="<?php the_field('ads_link', 209);?>" target="_blank"><img src="<?php the_field('image', 209);?>" alt="Arla Indofood" title="Arla Indofood"></a>
					</div>
					<div class="col-lg-12 d-block d-lg-none ads">
						<a href="<?php the_field('ads_link', 209);?>" target="_blank"><img src="<?php the_field('image_mobile', 209);?>" alt="Arla Indofood" title="Arla Indofood"></a>
					</div>

<?php endwhile; ?>
<?php get_footer(); ?>