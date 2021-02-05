<?php
/**
 * The template for displaying the footer.
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
			</div><!-- #content -->
		</div><!-- .container -->
	</div><!-- #primary -->

	<?php
		if ( is_singular( 'post' ) ) :
			comments_template( '', true );
		endif;
	?>
	<?php po_change_loop_to_parent( 'change' ); ?>
	<?php if ( ! pojo_is_blank_page() && ! pojo_elementor_theme_do_location( 'footer' ) ) : ?>
		<footer id="footer">
			<?php get_sidebar( 'footer' ); ?>
		</footer>
		<section id="copyright" role="contentinfo">
			<div class="<?php echo WRAP_CLASSES; ?>">
				<div class="pull-left-copyright">
				</div>
				<div class="pull-right-copyright">
				</div>
			</div><!-- .container -->
		</section>
	<?php endif; // end blank page ?>
	<?php po_change_loop_to_parent(); ?>

	</div><!-- .container-wrapper -->
</div><!-- #container -->
<?php wp_footer(); ?>/
</body>
</html>
