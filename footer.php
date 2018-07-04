<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wpre
 */
?>

	</div><!-- #content -->

	<?php get_sidebar('footer'); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<?php printf( __( 'Powered by %1$s.', 'Web Content Development' ), '<a href="'.esc_url("https://webcontentdevelopment.com").'" rel="nofollow">Web Content Development</a>' ); ?>
			<span class="sep"></span>
			<?php echo ( get_theme_mod('wpre_footer_text') == '' ) ? ('&copy; '.date_i18n(__('Y','wp-real-estate')).' '.get_bloginfo('name').__('. All Rights Reserved. ','Jeremy Ganse')) : esc_html( get_theme_mod('wpre_footer_text') ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
