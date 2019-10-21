					<style type="text/css">
                		.btn-whatsapp{
                			display: block !important;position: fixed !important;margin: 0px !important;padding: 0px !important;right: 20px !important;bottom: 20px !important;left: auto !important;border: 0px none !important;z-index: 1000001 !important;cursor: auto !important;pointer-events: auto !important;height: 60px !important;min-height: 60px !important;max-height: 60px !important;width: 60px !important;min-width: 60px !important;max-width: 60px !important;border-radius: 50% !important;transform: rotate(0deg) translateZ(0px) !important;transform-origin: 0px center 0px !important;
                		}
                		.btn-whatsapp img{width:100%;}
                	</style>
                	<div class="btn-whatsapp">
                		<a href="https://api.whatsapp.com/send?phone=628111558824" target="_blank">
                			<img src="<?php bloginfo('stylesheet_directory');?>/images/whatsapp.png">
                        </a>
                    </div>
                	
					<!-- Footer -->
					<footer class="col-lg-12">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-2 footer-logo">
									<?php
						                $logo = get_field('logo', 'option');  
						                if( $logo ):
						            ?>
										<a class="logo" href="<?php echo $logo['link']; ?>"><img class="mb-3" alt="Arla Indofood" src="<?php echo $logo['image']; ?>"></a></li>
				    					<a class="logo" href="<?php echo $logo['link_2']; ?>" target="_blank"><img alt="Arla Indofood" src="<?php echo $logo['image_2']; ?>"></a>
				    				<?php endif; ?>
								</div>
								<div class="col-lg-4 footer-address">
									<h3>
										<?php the_field('title', 'option');?>
									</h3>
									<div class="address">
										<?php the_field('address', 'option');?>
									</div>
								</div>
								<div class="col-lg-4 footer-contact">
								    <style type="text/css">
                                		footer a{
                                			font-size: 1rem;
                                			color: #fff;
                                		}
                                		footer .footer-contact a .fa{
                                		    font-size: 18px !important;
                                		}
                                	</style>
									<?php 
									   the_field('contact', 'option');
									?>
								</div>
								<div class="col-lg-2 footer-social">
									<h5>
										<?php the_field('title_social', 'option');?>
									</h5>
									<?php
						                $social = get_field('social', 'option');  
						                if( $social ):
						            ?>
										<!--<a href="<?php echo $social['twitter']; ?>" target="_blank"><i class="mr-3 fa fa-twitter"></i></a>-->
										<a href="<?php echo $social['facebook']; ?>" target="_blank"><i class="mr-3 fa fa-facebook"></i></a>
										<a href="<?php echo $social['instagram']; ?>" target="_blank"><i class="mr-3 fa fa-instagram"></i></a>
									<?php endif; ?>
								</div>
								<div class="copy">
									<p>
										<?php the_field('copy', 'option');?>
									</p>
								</div>
							</div>
						</div>
					</footer>
				</div>
			</div>
		</div>
	</div>

	<!--Plug in js-->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.0/js.cookie.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/scripts/app.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/node_modules/owl.carousel/dist/owl.carousel.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/node_modules/animatecss/wow.min.js"></script>
	<!-- Animate CSS -->
	<script>
		new WOW().init();
	</script>

<?php wp_footer(); ?>
</body>
</html>