<?php
/**
 * Custom functions
 */

/* Admin Styles */
function style_admin_bar(){ ?>
	<style type="text/css">
		#wpadminbar {
			background: #ddd;
		}
		#wpadminbar .quicklinks > ul > li > a, #wpadminbar .quicklinks > ul > li > .ab-empty-item, #wpadminbar .quicklinks > ul > li {
			border: none;
		}
		#wpadminbar * {
			text-shadow: none;
			color: #777;
			font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
			font-size: 13px;
		}
		#wpadminbar .quicklinks .ab-top-secondary > li, #wpadminbar .quicklinks .ab-top-secondary > li > a, #wpadminbar .quicklinks .ab-top-secondary > li > .ab-empty-item {
			border: none;
		}

#wpadminbar .ab-top-secondary {
    background: #ddd;
}
#wpadminbar .quicklinks li#wp-admin-bar-bp-notifications #ab-pending-notifications {
    background: none repeat scroll 0 0 #777;
    color: #FFF;
}
#wpadminbar .ab-top-menu > li:hover > .ab-item, #wpadminbar .ab-top-menu > li.hover > .ab-item, #wpadminbar .ab-top-menu > li > .ab-item:focus, #wpadminbar.nojq .quicklinks .ab-top-menu > li > .ab-item:focus {
    background: #eee;
    color: #666;
}
#wp-admin-bar-wp-logo > .ab-item .ab-icon {
    background-position: 0 -104px;
}


	</style>
<?php
}
add_action('wp_head', 'style_admin_bar');