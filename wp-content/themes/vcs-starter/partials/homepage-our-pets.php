<section id="Pets" class="hero3"> 
  <div class="container text-center">
    <h2 class="section-title section-center header-text"><?php echo get_field('hp_pets_header', 'option');?></h2>
  </div>
  <section class="container">
    <?php if( have_rows('hp_pets_repeater','option') ):?>
      <div class="slider justify-content text-center">
        <?php while( have_rows('hp_pets_repeater','option') ) : the_row();?>
          <div class="animals">
            <a href="#"><img src="<?php echo get_sub_field('pr_pets_repeater_image')["url"];?>" alt="<?php echo get_sub_field('pr_pets_repeater_image')["alt"];?>"></a>
            <p><?php echo get_sub_field('pr_pets_repeater_name');?></p>
            <div class="button">
              <a href="<?php echo get_sub_field('pr_pets_repeater_learn_button')["url"];?>"><?php echo get_sub_field('pr_pets_repeater_learn_button')["title"];?></a>
            </div>
          </div>
        <?php endwhile;?>
      </div>  
    <?php endif;?>
  </section>
    <div class="button">
      <a href="<?php echo get_field('hp_pets_get_button','option')["url"];?>"><?php echo get_field('hp_pets_get_button','option')["title"];?></a>
    </div>
</section>