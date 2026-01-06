<?php
/**
 * Functions for QUAALAM Theme
 * Author: QUAALAM
 */

/* =====================================================
   THEME SETUP
===================================================== */
function quaalam_theme_setup() {

    // Title tag support
    add_theme_support('title-tag');

    // Featured image support
    add_theme_support('post-thumbnails');

    // Register menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'quaalam')
    ));
}
add_action('after_setup_theme', 'quaalam_theme_setup');


/* =====================================================
   ENQUEUE CSS & JS
===================================================== */
function quaalam_enqueue_assets() {

    // Main CSS (untuk styling website)
    wp_enqueue_style(
        'quaalam-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0'
    );

    // Main JS
    wp_enqueue_script(
        'quaalam-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'quaalam_enqueue_assets');


/* =====================================================
   CLEAN UP (AMAN)
===================================================== */

// Hapus versi WordPress
remove_action('wp_head', 'wp_generator');


// Disable emoji (ringankan)
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


/* =====================================================
   AUTO SETUP (PAGES & MENU)
   Run once to setup environment
===================================================== */
function quaalam_auto_setup() {
    // 1. Create Pages
    $pages = array(
        'Home'    => array('content' => '', 'template' => 'front-page.php'),
        'Produk'  => array('content' => '', 'template' => 'page-produk.php'),
        'Kontak'  => array('content' => '', 'template' => 'page-kontak.php')
    );

    $menu_exists = wp_get_nav_menu_object('Primary Menu');
    if(!$menu_exists) {
        $menu_id = wp_create_nav_menu('Primary Menu');
    } else {
        $menu_id = $menu_exists->term_id;
    }

    foreach ($pages as $title => $props) {
        // Fix Deprecated get_page_by_title
        $page = null;
        $query = new WP_Query(array(
            'post_type' => 'page',
            'title'     => $title,
            'post_status' => 'all',
            'posts_per_page' => 1
        ));
        
        if (!empty($query->posts)) {
            $page = $query->posts[0];
        }

        $page_id = '';
        
        if (!$page) {
            $page_id = wp_insert_post(array(
                'post_title'    => $title,
                'post_content'  => $props['content'],
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'page_template' => $props['template']
            ));
        } else {
            $page_id = $page->ID;
            // Update template just in case
            update_post_meta($page_id, '_wp_page_template', $props['template']);
        }

        // Add to Menu if not exists
        if (!has_nav_menu('primary')) {
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title'  => $title,
                'menu-item-object' => 'page',
                'menu-item-object-id' => $page_id,
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish'
            ));
        }
    }

    // Assign Menu to Location
    if (!has_nav_menu('primary')) {
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }

    // Set Static Front Page
    $home = get_page_by_title('Home');
    if ($home) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home->ID);
    }
}
add_action('init', 'quaalam_auto_setup');
