 
<div class="sidebar">
  <div class="new__head">新着情報</div>
    <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
     <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <?php endwhile; else: ?>
    <?php endif; ?>
  </div>
</div>

</main>


