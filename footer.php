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

	<footer id="colophon" class="site-footer theme-blue-background-solid" role="contentinfo">
		<div class="row ">
			<div class="col-md-3">
				<?php the_custom_logo(); ?>
				
			</div>
			
			<div id="footer-address" class="col-md-3 text-center height-100 ">
				<address>
					930 Red Rose Ct Ste 209 <br>
					Lancaster, PA 17601-1981 <br>
					Direct: 877-271-5520
				</address>
			</div>
			
			<div class="col-md-3" id="footer-socials">
				<a href="#"><i class="fa fa-facebook-official"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-youtube"></i></a>
				<a href="#"><i class="fa fa-google-plus-official"></i></a>
				<a href="#"><i class="fa fa-envelope"></i></a>
			</div>
			
			<div class="col-md-3">
				<img class="footer-img" src="/wp-content/uploads/2018/07/smarthub_snip.jpg"></img>
			</div>
			
		</div>
	</footer><!-- #colophon -->
	
</div><!-- #page -->


  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Site hand-crafted by
  <a class="wcd" href="webcontentdevelopment.com" target="_blank"> Web Content Development</a>
  	| © 2018 Copyright:
    <a href="#"> Jeremy Ganse</a>
  </div>
  <!-- Copyright -->


<?php wp_footer(); ?>

</body>
</html>
