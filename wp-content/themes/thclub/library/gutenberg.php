<?php

if ( ! function_exists( 'fiftytwo_gutenberg_support' ) ) :
	function fiftytwo_gutenberg_support() {

    // Add foundation color palette to the editor
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Primary Color', 'fiftytwo' ),
            'slug' => 'primary',
            'color' => '#1779ba',
        ),
        array(
            'name' => __( 'Secondary Color', 'fiftytwo' ),
            'slug' => 'secondary',
            'color' => '#767676',
        ),
        array(
            'name' => __( 'Success Color', 'fiftytwo' ),
            'slug' => 'success',
            'color' => '#3adb76',
        ),
        array(
            'name' => __( 'Warning color', 'fiftytwo' ),
            'slug' => 'warning',
            'color' => '#ffae00',
        ),
        array(
            'name' => __( 'Alert color', 'fiftytwo' ),
            'slug' => 'alert',
            'color' => '#cc4b37',
        )
    ) );

	}

	add_action( 'after_setup_theme', 'fiftytwo_gutenberg_support' );
endif;
