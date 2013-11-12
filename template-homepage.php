<?php
/*
Template Name: Homepage
*/
?>

<?php /* if ( bp_has_activities( bp_ajax_querystring( 'activity' ) ) ) : ?>
    <?php while ( bp_activities() ) : bp_the_activity(); ?>
 
        <?php locate_template( array( '/buddypress/activity/entry.php' ), true, false ); ?>
 
    <?php endwhile; ?>
<?php endif; */?>

<?php while (have_posts()) : the_post(); ?>

    <div class="row">
      <div class="col-md-12">
        <img class="pull-left" src="http://buddypress.chaiapp.com/wp-content/uploads/2013/11/bp_color.png" style="margin-right: 20px;" />
        <h1 style="font-size:62px; line-height:normal;">Social Networking in a Box</h1>
        <p class="lead">BuddyPress is Social Networking, the WordPress way. Easily create a fully featured social network inside your WordPress.org powered site.</p>
        <p style="font-size:18px;line-height:1.2em;"><strong>Go Ahead, Test it Out!</strong> For testing purposes you can <?php if (get_option('users_can_register')) : ?><a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register"><?php _e('register an account') ?></a></li><?php endif; ?> to play around with or <?php wp_loginout(); ?> with username <code>tester</code> and password <code>testerpassword</code>.</p>
      </div>
    </div>




    <div class="row uevypress-home">
    <div class="col-md-6">
      <h1>About this Theme</h1>
      <p>yeep.</p>
    </div>
    <div class="col-md-6">
      <h1>BuddyPress Features</h1>
      <p></p>
    </div>
  </div>

  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>