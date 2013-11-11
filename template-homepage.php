<?php
/*
Template Name: Homepage
*/
?>


<?php if ( bp_has_activities( bp_ajax_querystring( 'activity' ) ) ) : ?>
    <?php while ( bp_activities() ) : bp_the_activity(); ?>
 
        <?php locate_template( array( '/buddypress/activity/entry.php' ), true, false ); ?>
 
    <?php endwhile; ?>
<?php endif; ?>


<div class="btn-toolbar">
        <div class="btn-group btn-group-lg">
          <button class="btn btn-default" type="button">Left</button>
          <button class="btn btn-default" type="button">Middle</button>
          <button class="btn btn-default" type="button">Right</button>
        </div>
      </div>


<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>