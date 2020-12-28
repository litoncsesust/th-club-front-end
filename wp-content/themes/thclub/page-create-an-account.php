<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package fiftytwo
 * @since fiftytwo 1.0.0
 */
wp_redirect(site_url());
get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		get_template_part('template-parts/unit', 'title');
		get_template_part('template-parts/user', 'register');
		if (have_rows('page_unit')):
			while (have_rows('page_unit')): the_row();
				if (get_row_layout() == 'banner'):
					get_template_part('template-parts/unit', 'banner');
				elseif (get_row_layout() == 'search_form'):
					get_template_part('template-parts/unit', 's-form');
				elseif (get_row_layout() == 'search_result'):
					get_template_part('template-parts/unit', 's-result');		
				elseif (get_row_layout() == 'headline'):
					get_template_part('template-parts/unit', 'headline');
				elseif (get_row_layout() == 'button'):
					get_template_part('template-parts/unit', 'button');
				elseif (get_row_layout() == 'image'):
					get_template_part('template-parts/unit', 'image');
				elseif (get_row_layout() == 'text_grid'):
					get_template_part('template-parts/unit', 'text-grid');
				elseif (get_row_layout() == 'text'):
					get_template_part('template-parts/unit', 'text');
				elseif (get_row_layout() == 'logo'):
					get_template_part('template-parts/unit', 'logo');
				endif;
			endwhile;
		else:
		endif;
	endwhile;   
	else :
		get_template_part( 'template-parts/content', 'none' );
endif;
get_footer();