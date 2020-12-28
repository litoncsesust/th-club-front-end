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
	$produt_name = explode('.', $_POST['product_img_name']);
	$produt_name = explode('-', $produt_name[0]);
	$produt_id = $produt_name[1];
	$file = new SingleFileDeleteClass($_SESSION['clubKey'], $produt_id);
	$result = $file->delete();
	/*echo "<pre>";
	print_r($produt_name);
	exit();*/
	

}
