<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
  <div class="article-box">
    <h1><?php the_title(); ?></h1>
    <time class="pubdate">公開日<?php echo get_the_date(); ?></time>
    <?php the_content(); ?>

<?php endwhile; else: ?>
<?php endif; ?>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

  