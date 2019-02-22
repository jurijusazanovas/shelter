    <!-- _______________________________Penkta skiltis________Icons_________________________ -->

<section id="Help" class="hero4"> 
    <div class="container text-center">
        <h2 class="section-title section-center header-text">Than you can help our shelter</h2>
    </div>
    <section class="container flex twenty">
        <?php if( have_rows('hi_icons_repeater','option') ):?>
            <?php while( have_rows('hi_icons_repeater','option') ) : the_row();?>
                <div class="icons">
                    <a href="#"><img src="<?php echo get_sub_field('hi_repeater_img');?>"></a>
                    <p><?php echo get_sub_field('hi_repeater_text');?></p>
                </div> 
            <?php endwhile;?> 
        <?php endif;?>
    </section>
</section>        
