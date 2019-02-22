 <!-- _____________________Antra skiltis_____Hero 1 puslapis____________________________ -->

	<div class="container flex">            
		<div class="geltona">     
			<h1><?php the_field('hh_hero_heading', 'option'); ?></h1>
			<p><?php the_field('hh_hero_content', 'option'); ?></p>
			<div class="button friend">
				<a href="<?php echo get_field('hh_hero_button','option')["url"];?>" <?php echo (get_field('hh_hero_button','option')["target"]) ? 'target="_blank"' : ''; ?>><?php echo get_field('hh_hero_button','option')["title"]; ?>
		   		</a>
		   	</div>
	    </div>
	</div> 
</section>