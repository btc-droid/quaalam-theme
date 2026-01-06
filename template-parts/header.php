<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container header-wrapper">

        <!-- LOGO -->
        <div class="site-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="QUAALAM" width="150">
            </a>
        </div>

        <!-- NAVIGATION -->
        <nav class="site-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'main-menu',
                'fallback_cb'    => false
            ));
            ?>
        </nav>

    </div>
</header>
