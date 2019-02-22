<!DOCTYPE html> 
 <html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">       
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
 <body>

 	<!-- _______Pirma skiltis____Header - Logo ir Meniu_____________________________ -->

 	<section class="hero" style="background-image:url('<?php echo get_field('hh_hero_background','option');?>')">   
    <header class="menu-header">  
      <div class="container flex"> 
        <div class="burlogo flex"> 
          <div class="logo">  
            <a href="<?php echo site_url(); ?>">
              <?php
              $logo_main = get_field('ts_main_logo', 'option');
              ?>
              <img src="<?php echo $logo_main["url"]; ?>" alt="<?php bloginfo("Shelter"); ?>"></a>
          </div>
          <div class="burger">
            <i class="fas fa-bars"></i>
          </div>
        </div>

        <!-- Main navigation -->

        <nav class="nav">
        <?php
        $args = array(
            'theme_location' => 'primary-navigation',
            'menu_class' => 'flex', 
            'container' => false
        );
        wp_nav_menu($args);
        ?>
        </nav>   
      </div>
    </header>  

