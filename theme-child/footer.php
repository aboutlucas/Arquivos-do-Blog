<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit - 20
			 */
			echo "&copy; 2015 <a href=#>Ecommerce</a>. Todos os direitos reservados."; ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php 
		do_action( 'storefront_after_footer' );
 	?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
