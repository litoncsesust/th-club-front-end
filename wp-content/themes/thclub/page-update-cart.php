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

if(isset($_POST) && !empty($_POST)){
	$_SESSION['qty_array'][0] = $_POST['product_quantity'];
}