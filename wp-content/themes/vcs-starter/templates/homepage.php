<?php

/* Template Name: Homepage */

get_header();

?>

<?php 
	get_template_part('partials/homepage-hero');
	get_template_part('partials/homepage-about-shelter');
	get_template_part('partials/homepage-our-pets');
	get_template_part('partials/homepage-icons');
	get_template_part('partials/homepage-help-shelter');
?>

<?php get_footer(); ?>