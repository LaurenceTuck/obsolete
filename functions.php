<?php

if ( ! function_exists( 'obsolete_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Obsolete 1.0
	 *
	 * @return void
	 */
	function obsolete_styles() {
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'obsolete-style',
			get_template_directory_uri() . '/css/main.css',
			array(),
			$version_string
		);

		wp_enqueue_style( 'obsolete-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'obsolete_styles' );

add_action( 'init', function() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )
        )
    );
});

?>