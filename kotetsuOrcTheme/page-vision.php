<?php get_header(); ?>

<div class="vision__box">
  <div class="article__box"> 
    <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php endwhile; else: ?>
        <?php endif; ?>  
  </div>
  <img src="<?php echo get_template_directory_uri(); ?>/img/tea.JPG"  width="300px" height="225px"  alt="喫茶店">
</div>

<?php get_footer(); ?>


  