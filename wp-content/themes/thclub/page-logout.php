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

if ($_SESSION['clubKey']) {
	unset($_SESSION['clubKey']);
	// session_destroy();
	wp_redirect(site_url());
	exit;
} else {
	wp_redirect(site_url());
	exit;
}