     <!-- _______________________Septinta skiltis________Footer_________________________ -->
 
<section id="Contacts" class="hero7"> 
  <div class="container flex">     
    <div class="footer">
      <h2><?php echo get_field('hf_first_column','option')['hf_header_left'];?></h2>
      <div class="flex vertical-center">
        <?php $link=get_field('hf_first_column','option')['hf_column_left_first_link'];?>
        <img class="footer-image" src="<?php echo get_field('hf_first_column','option')['hf_column_left_first_img'];?>">
        <p><a href="<?php echo $link['url'];?>" target="<?php echo $link['target'];?>"><?php echo $link['title']; ?></a></p>
      </div>
      <div class="flex vertical-center">
        <?php $link=get_field('hf_first_column','option')['column_left_second_link'];?>
        <img class="footer-image" src="<?php echo get_field('hf_first_column','option')['hf_column_left_second_img'];?>">
        <p><a href="<?php echo $link['url'];?>" target="<?php echo $link['target'];?>"><?php echo $link['title']; ?></a></p>
      </div>
    </div>   
    <div class="footer">
      <h2><?php echo get_field('hf_second_column','option')['hf_right_column_header'];?></h2>
      <div class="flex vertical-center">
        <?php $link=get_field('hf_second_column','option')['hf_right_column_first_link'];?>
        <img class="footer-image" src="<?php echo get_field('hf_second_column','option')['right_column_first_img'];?>">
        <p><a href="<?php echo $link['url'];?>" target="<?php echo $link['target'];?>"><?php echo $link['title']; ?></a></p>
      </div>
      <div class="flex vertical-center">
        <?php $link=get_field('hf_second_column','option')['hf_right_column_second_link'];?>
        <img class="footer-image" src="<?php echo get_field('hf_second_column','option')['hf_right_column_second_img'];?>">
        <p><a href="<?php echo $link['url'];?>" target="<?php echo $link['target'];?>"><?php echo $link['title']; ?></a></p>
      </div>
    </div>
  </div>
</section>

<a href="#" id="back-to-top" title="Back to top"><i class="fas fa-angle-up"></i></a> <!-- Arrow button -->  

<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

<?php wp_footer(); ?>
       
 </body> 
</html>
