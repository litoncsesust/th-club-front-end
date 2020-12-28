<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package fiftytwo
 * @since fiftytwo 1.0.0
 */
?>
<footer>
	<div class="color-bg-lightblack large-top-padding large-bottom-padding">
		<div class="grid-container no-padding">
			<div class="color-text-gray case-upper text-center">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</div>
		</div>
	</div>
	<div class="color-bg-black small-top-padding small-bottom-padding">
		<div class="grid-container no-padding">
			<div class="color-text-charcoal case-none">
				&copy; Clubwebshop 2019
			</div>
		</div>
	</div>
</footer>


<?php if (!is_user_logged_in()) : ?>
<?php	get_template_part('template-parts/unit', 'login'); ?>
<?php endif; ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>