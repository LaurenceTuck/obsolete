<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>

    <body>
        <div class="bg main"></div>
        <div class="bg slide"></div>
        <header>
            <div>
                <h1 itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
                <nav id="main-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                    <?php wp_nav_menu(array(
                        'container' => false,
                        'menu' => __( 'Header Menu', 'obsolete' ),
                        'theme_location' => 'header-menu'
                    )); ?>
                </nav>
                <svg id="nav-btn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="0 0 300 300" width="2rem" height="2rem"><path d=" M 37.5 150 C 37.5 136.202 48.702 125 62.5 125 C 76.298 125 87.5 136.202 87.5 150 C 87.5 163.798 76.298 175 62.5 175 C 48.702 175 37.5 163.798 37.5 150 L 37.5 150 L 37.5 150 Z  M 125 150 C 125 136.202 136.202 125 150 125 C 163.798 125 175 136.202 175 150 C 175 163.798 163.798 175 150 175 C 136.202 175 125 163.798 125 150 L 125 150 Z  M 0 150 C 0 67.213 67.213 0 150 0 C 232.787 0 300 67.213 300 150 C 300 232.787 232.787 300 150 300 C 67.213 300 0 232.787 0 150 L 0 150 L 0 150 Z  M 212.5 150 C 212.5 136.202 223.702 125 237.5 125 C 251.298 125 262.5 136.202 262.5 150 C 262.5 163.798 251.298 175 237.5 175 C 223.702 175 212.5 163.798 212.5 150 Z " fill-rule="evenodd"></path></svg>
            </div>
        </header>