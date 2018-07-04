<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wpre
 */
get_template_part('/modules/header/head'); ?>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wp-real-estate' ); ?></a>

	
	<?php get_template_part('modules/header/landing-head'); ?>
	


		

		
	
		<div id="content" class="site-content">