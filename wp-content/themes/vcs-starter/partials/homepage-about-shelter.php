	   <!--____________Trecia skiltis_____Suniukas/kaciukas pic ir About__________________ -->

<section id="About" class="hero2"> 
	<div class="container flex center">    
		<div class="geltona2 hero2image"><img src="<?php echo get_field('ha_about_image', 'option')["url"]; ?>" alt="<?php echo get_field('ha_about_image', 'option')["alt"]; ?>"> 
		</div>
		<div class="center geltona2">	
    		<h2 class="header-text header-width"><?php echo get_field('ha_about_header', 'option'); ?></h2>
 			<p class="text-width text-style"><?php echo get_field('ha_about_text', 'option'); ?></p>
 		</div>
	</div>
</section>