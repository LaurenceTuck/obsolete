<?php

if ( ! function_exists( 'obsolete_scripts_and_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Obsolete 1.0
	 *
	 * @return void
	 */
	function obsolete_scripts_and_styles() {
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_register_style(
			'obsolete-style',
			get_template_directory_uri() . '/css/main.css',
			array(),
			$version_string
		);

		wp_enqueue_style( 'obsolete-style' );

		wp_deregister_script( 'jquery' );
		wp_register_script(
			'jquery',
			( 'http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' ),
			false,
			null,
			true
		);
		
		wp_enqueue_script( 'jquery' );

		wp_register_script(
			'obsolete-js',
			get_template_directory_uri() . '/js/main.js',
			array( 'jquery' ),
			$version_string
		);

		wp_enqueue_script( 'obsolete-js' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'obsolete_scripts_and_styles' );

add_action( 'init', function() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )
        )
    );
});
