<?php
add_filter( 'wp_nav_menu_items', 'fiftytwo_loginout_menu_link', 10, 2 );

function fiftytwo_loginout_menu_link( $items, $args ) {

  $carttotal = '';
  // if(!empty($_SESSION['cart'])) {
  //   $carttotal = $_SESSION['qty_array'][0];
  // }
  if ($args->theme_location == 'top-bar-r' || $args->theme_location == 'mobile-nav' ) {
    if (isset($_SESSION['clubKey'])) {
      if ($_SESSION['clubKey']->type != 2) {
    	 $items .= '<li><a href="'. site_url('create-product') .'">'. __("OPRET PRODUKT") .'</a></li>';
      }
      $items .= '<li><a href="'. site_url('my-profile') .'">'. __("MIN PROFIL") .'</a></li>';
      if ($_SESSION['clubKey']->type != 2) {
        $items .= '<li><a href="'. site_url('my-products') .'">'. __("mine produkter") .'</a></li>';
      }
      $items .= '<li class="right color-bg-primary"><a class="color-text-white outline" href="'. site_url('logout') .'">'. __("Log Ud") .'</a></li>';
      //$items .= '<li class="cart contain right-center"><a href="'. site_url('checkout') .'">'. $carttotal . '</a></li>';
    } else {
      //$items .= '<li><a href="'. site_url('create-an-account') .'">'. __("OPRET BRUGER") .'</a></li>';
      $items .= '<li class="right color-bg-primary"><a class="color-text-white outline" data-open="loginForm">'. __("Log ind") .'</a></li>';
      //$items .= '<li class="cart contain right-center"><a href="'. site_url('checkout') .'">' . $carttotal . '</a></li>';
    }
  }
  return $items;
}