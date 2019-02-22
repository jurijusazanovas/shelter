 <!-- _______________Sesta skiltis_________Help Shelter - Saskaita________________________ -->

<section class="hero6"> 
    <div class="container flex center">     
        <div class="geltona2 hero2image"><img class="img-responsive" src="<?php echo get_field('hh_image_left','option')["url"]?>" alt="<?php echo get_field('hh_image_left','option')["alt"]?>""> 
        </div>
        <div class="center geltona2 header-width-donation">  
            <h2 class="header-text"><?php echo get_field('hh_header_h2', 'option')?></h2>
            <h3 class="header-text-h3"><?php echo get_field('hh_header_h3', 'option')?></h3>
            <a href="<?php echo get_field('hh_image_bank_account_link', 'option')["url"]?>" target="<?php echo get_field('hh_image_bank_account_link', 'option')["target"]?>"><img src="<?php echo get_field('hh_image_bank_account','option')["url"]?>" alt="<?php echo get_field('hh_image_bank_account','option')["alt"]?>"></a>
            <p><i><?php echo get_field('hh_italic_text', 'option')?></p></i>
        </div>
    </div>
</section>
