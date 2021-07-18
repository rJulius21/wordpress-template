<?php get_header(); ?>
  <!-- START CONTENT-WRAPPER -->
  <div class="content-wrapper">

    <!-- START FRONT-PAGE -->
    <div class="front-page">
  
      <img src="<?php echo get_theme_file_uri('img/toolbox-watermark.png'); ?>" alt="" class="front-page__watermark">
      <p class="front-page__text-box">
        what's happening dude?
      </p>
  
      <?php
        while(have_posts()) {
          the_post(); 
        ?>
  
        <h6> <?php the_title(); ?> </h6>
  
      <?php } wp_reset_postdata(); echo paginate_links(); ?>
  
    </div>
    <!-- END FRONT-PAGE -->

  </div>
  <!-- END CONTENT-WRAPPER -->
<?php get_footer(); ?>