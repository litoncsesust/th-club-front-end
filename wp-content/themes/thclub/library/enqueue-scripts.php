<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package fiftytwo
 * @since fiftytwo 1.0.0
 */


// Check to see if rev-manifest exists for CSS and JS static asset revisioning
//https://github.com/sindresorhus/gulp-rev/blob/master/integration.md

if ( ! function_exists( 'fiftytwo_asset_path' ) ) :
	function fiftytwo_asset_path( $filename ) {
		$filename_split = explode( '.', $filename );
		$dir            = end( $filename_split );
		$manifest_path  = dirname( dirname( __FILE__ ) ) . '/dist/assets/' . $dir . '/rev-manifest.json';

		if ( file_exists( $manifest_path ) ) {
			$manifest = json_decode( file_get_contents( $manifest_path ), true );
		} else {
			$manifest = array();
		}

		if ( array_key_exists( $filename, $manifest ) ) {
			return $manifest[ $filename ];
		}
		return $filename;
	}
endif;

if (! function_exists('fiftytwo_enqueuer')) :
  function fiftytwo_enqueuer($type, $my_handle, $src, $my_deps = array())
  {
    $uri = get_theme_file_uri($src);
    $ver = filemtime(get_theme_file_path($src));
    if ($type == 'script') {
      wp_enqueue_script($my_handle, $uri, $my_deps, $ver, true);
    } elseif ($type == 'style') {
      wp_enqueue_style($my_handle, $uri, $my_deps, $ver);
    }
  }
endif;

if ( ! function_exists( 'fiftytwo_scripts' ) ) :
	function fiftytwo_scripts() {
    fiftytwo_enqueuer('style', 'main', '/dist/assets/css/' . fiftytwo_asset_path('app.css'));
    fiftytwo_enqueuer('style', 'animate', '/dist/assets/css/' . fiftytwo_asset_path('animate.css'));
    fiftytwo_enqueuer('style', 'slick', '/dist/assets/slick/' . fiftytwo_asset_path('slick.css'));
    fiftytwo_enqueuer('style', 'slick-theme', '/dist/assets/slick/' . fiftytwo_asset_path('slick-theme.css'));
    fiftytwo_enqueuer('style', 'site', '/dist/assets/css/' . fiftytwo_asset_path('site.css'));

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );
		wp_deregister_script( 'jquery-migrate' );
		wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', false );

		fiftytwo_enqueuer('script', 'mycart-js', '/dist/assets/js/' . fiftytwo_asset_path('jquery.mycart.min.js'));

		
		fiftytwo_enqueuer('script', 'foundation-js', '/dist/assets/js/' . fiftytwo_asset_path('app.js'));
		fiftytwo_enqueuer('script', 'slick-js', '/dist/assets/slick/' . fiftytwo_asset_path('slick.min.js'));
		fiftytwo_enqueuer('script', 'lazy-js', '/dist/assets/js/' . fiftytwo_asset_path('lazy.js'));
		fiftytwo_enqueuer('script', 'loading-js', '/dist/assets/js/' . fiftytwo_asset_path('loading.js'));
		fiftytwo_enqueuer('script', 'wow-js', '/dist/assets/js/' . fiftytwo_asset_path('wow.min.js'));
		fiftytwo_enqueuer('script', 'site-js', '/dist/assets/js/' . fiftytwo_asset_path('site.js'));

		// Add the comment-reply library on pages where it is necessary
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}

	add_action( 'wp_enqueue_scripts', 'fiftytwo_scripts' );
endif;
