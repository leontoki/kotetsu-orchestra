<?php comment_form(); ?>
 
<?php if( have_comments() ): ?>
　　<div class="comment-area">
    　　<h3 class="comments"></h3>
    　　<ol class="commets-list">
    　　<?php wp_list_comments( ); ?>
   　　 </ol>
　　</div>
<?php endif; ?>
