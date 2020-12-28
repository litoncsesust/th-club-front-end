<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package fiftytwo
 * @since fiftytwo 1.0.0
 */

get_header(); ?>
<div class="page-title bottom-border extra-top-padding extra-bottom-padding">
	<div class="grid-container">
		<div class="cell text-center">
			<h1 class="wow slideInUp font-35 font-headline case-upper line-height no-margin"><?php _e( 'File Not Found', 'fiftytwo' ); ?></h1>
		</div>
	</div>
</div>
<div class="404-notfound extra-top-margin extra-bottom-margin">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell small-12 medium-6 large-9">
				<div class="entry-content">
					<div class="error">
						<p class="bottom"><?php _e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'fiftytwo' ); ?></p>
					</div>
					<p><?php _e( 'Please try the following:', 'fiftytwo' ); ?></p>
					<ul>
						<li><?php _e( 'Check your spelling', 'fiftytwo' ); ?></li>
						<li>
							<?php
							printf(
							__( 'Return to the <a href="%s">home page</a>', 'fiftytwo' ),
							home_url()
							);
							?>
						</li>
						<li><?php _e( 'Click the <a href="javascript:history.back()">Back</a> button', 'fiftytwo' ); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();