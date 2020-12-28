<?php

function fiftytwo_login_css() {
	wp_enqueue_style('login_css', get_template_directory_uri() . '/dist/assets/css/login.css', false );
}
function fiftytwo_login_url() {return home_url();}
function fiftytwo_login_title() {return get_option('blogname');}

add_action('login_enqueue_scripts', 'fiftytwo_login_css', 10);
add_filter('login_headerurl', 'fiftytwo_login_url');
add_filter('login_headertext', 'fiftytwo_login_title');