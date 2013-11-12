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




    <div class="row uevypress-home" style="margin-top:15px;">
    <div class="col-md-6">
      <h2>About this Theme</h2>
      <p>The developers at <a href="http://thecjmnetwork.com" target="_Blank">CJM</a> & <a href="http://uevy.org" target="_Blank">UEVY</a> teamed up to make a stream-lined, Bootstrap-based Buddypress starter theme. Benefits?</p>
      <h4 style="margin-top:20px;">Minimal Markup</h4>
      <p>HTML5 Boilerplate with ARIA roles and microformats.</p>
      <h4 style="margin-top:20px;">Theme Wrapper</h4>
      <p>A powerful, modular theme wrapper that controls and standardizes templates.</p>
      <h4 style="margin-top:20px;">Bootstrap 3</h4>
      <p>Fully integrated with the Bootstrap 3 frontend development framework.</p>
      <h4 style="margin-top:20px;">Optimized for Production Use</h4>
      <p>Gruntfile compiles your LESS & minifies and concatenates CSS and JS.</p>
      <h4 style="margin-top:20px;">Untouched Buddypress Templates</h4>
      <p>All of the core BuddyPress template files are untouched and properly nested within the theme.</p>

    </div>
    <div class="col-md-6">
      <h2>BuddyPress Features</h2>
      
      <ul class="list-unstyled spacemebro">
        <li><strong>Extended Profiles:</strong> Allows you to create extra profile files that can be filled out by your members</li>
        <li><strong>Private Messaging:</strong> Allows members to contact each other directly</li>
        <li><strong>Friends:</strong> Members can use this to create friends list like they do on sites like Facebook and Ning</li>
        <li><strong>Groups:</strong> Allows members to create groups where they can share info on topic areas that interest them.</li>
        <li><strong>Activity Stream:</strong> Logs any activity for any member, as well as site wide activity of all members, across the entire network.  Its a bit like Recent Activities in Facebook and Latest Activity on Ning.</li>
        <li><strong>Blog Tracking:</strong>  Tracks sites across the entire network including recently created sites, latest posts and latest comments.</li>
        <li><strong>Forums:</strong> Allows groups to create and manage their own forums, using a bbPress install.</li>
      </ul>


    </div>
  </div>

  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>