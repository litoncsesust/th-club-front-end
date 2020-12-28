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

if ($_GET['key'] == 'rvpkdpkBJGopOqO41VwF8KxfaG3zyS6w') {
	$plc = new ProductsListClass();
  $plc->productListinData();
	new ClubsListClass();
	new CategoryListClass();
	echo '<pre>Success</pre>';
} else {
	wp_redirect(site_url());
	exit;
}