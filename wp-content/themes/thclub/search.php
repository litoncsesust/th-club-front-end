<?php
/**
 * The template for displaying search results pages.
 *
 * @package fiftytwo
 * @since fiftytwo 1.0.0
 */

get_header(); ?>

<div class="main-container">
	<div class="main-grid">
		<main id="search-results" class="main-content">

		<header>
			<h1 class="entry-title"><?php _e( 'Search Results for', 'fiftytwo' ); ?> "<?php echo get_search_query(); ?>"</h1>
		</header>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php
		if ( function_exists( 'fiftytwo_pagination' ) ) :
			fiftytwo_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'fiftytwo' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'fiftytwo' ) ); ?></div>
			</nav>
		<?php endif; ?>

		</main>
	<?php get_sidebar(); ?>

	</div>
</div>
<?php get_footer();
