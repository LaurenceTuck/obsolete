<?php

add_action( 'init', function() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )
        )
    );
});

 ?>