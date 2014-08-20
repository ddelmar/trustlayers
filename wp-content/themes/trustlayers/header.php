<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="container">

        <header class="site-header cf">

            <a href="<?php bloginfo( 'url' ); ?>" class="site-logo">
                <img
                    src="<?php bloginfo( 'template_url' ); ?>/img/logo.png"
                    alt="<?php bloginfo( 'name' ); ?>"
                    width="158"
                    height="38"
                >
            </a>
			
			<button id="menu-toggle" class="menu-toggle float--right">
				<span class="menu-toggle-separator"></span>
				<span class="menu-toggle-separator"></span>
				<span class="menu-toggle-separator"></span>
			</button>
			
            <?php
                wp_nav_menu(
                    array(
                        'container'       => 'nav',
                        'container_class' => 'main-menu-container',
                        'menu_class'      => 'main-menu nav flush--bottom',
                        'theme_location'  => 'main-menu',
                        'depth'           => 1,
                    )
                );
            ?>

        </header>