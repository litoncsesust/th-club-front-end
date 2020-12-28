<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * fiftytwo functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package fiftytwo
 * @since fiftytwo 1.0.0
 */

/** Various clean up functions */
require_once( 'library/login.php' );
require_once( 'library/login-nav.php' );
require_once( 'library/cleanup.php' );
require_once( 'library/foundation.php' );
require_once( 'library/class-fiftytwo-comments.php' );
require_once( 'library/navigation.php' );
require_once( 'library/class-fiftytwo-top-bar-walker.php' );
require_once( 'library/class-fiftytwo-mobile-walker.php' );
require_once( 'library/widget-areas.php' );
require_once( 'library/entry-meta.php' );
require_once( 'library/enqueue-scripts.php' );
require_once( 'library/theme-support.php' );
require_once( 'library/custom-nav.php' );
require_once( 'library/sticky-posts.php' );
require_once( 'library/responsive-images.php' );
require_once( 'library/gutenberg.php' );

require_once('library/session.php');

require_once('library/class-ButtonClass.php');
require_once('library/class-PhotoClass.php');
require_once('library/class-TypographyClass.php');
require_once('library/class-WrapperClass.php');
require_once('library/class-SelectClass.php');

require_once('library/api/club_api.php');

require_once('library/api/v1/base/index.php');
require_once('library/api/v1/data/index.php');
require_once('library/api/v1/register/index.php');
require_once('library/api/v1/create-product/index.php');
require_once('library/api/v1/edit-product/index.php');
require_once('library/api/v1/login/index.php');
require_once('library/api/v1/user/index.php');
require_once('library/api/v1/profile/index.php');
require_once('library/api/v1/products/index.php');
require_once('library/api/v1/club/index.php');
require_once('library/api/v1/club/store.php');
require_once('library/api/v1/category/index.php');
require_once('library/api/v1/category/store.php');

require_once('library/api/v1/single-product/index.php');
require_once('library/api/v1/single-product/single-from-api.php');

require_once('library/api/v1/user-products/index.php');
require_once('library/api/v1/search/index.php');
require_once('library/api/v1/params/index.php');

require_once('library/api/v1/cart/index.php');
require_once('library/api/v1/checkout/index.php');
require_once('library/api/v1/file/index.php');
require_once('library/api/v1/order/index.php');
//require_once('library/api/v1/email/index.php');

//require_once('library/api/v1/club/index.php');
//require_once('library/api/v1/category/index.php');

require_once('library/pdf/catalog/index.php');

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-fiftytwo-protocol-relative-theme-assets.php' );

add_action('init', 'do_output_buffer');
function do_output_buffer() {
        ob_start();
}
