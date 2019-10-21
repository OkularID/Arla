<!-- Search -->
<div id="arlasearch" class="arlasearch">
	<img id="btnsearch" src="<?php bloginfo('stylesheet_directory');?>/images/pencarian-putih.png">
	<div class="sidesearch">
		<div class="detail1" style="background-image: url('<?php the_field('background',188);?>');">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
						<li><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></li>
					<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>