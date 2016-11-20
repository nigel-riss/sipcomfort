<?php 
    function sip_theme_setup() {
        //Menu support
        register_nav_menus(array(
            'primary' => __('Primary menu'),
            'footer' => __('Footer menu')
        ));
    }

    add_action('after_setup_theme', 'sip_theme_setup');

    // My menu classes
    function wpdocs_special_nav_class( $classes, $item ) {
    if (in_array('current-menu-item', $classes)) {
        $classes[] = "main-menu__item--active";
    }
        $classes[] = "main-menu__item";

        return $classes;
    }
    add_filter( 'nav_menu_css_class' , 'wpdocs_special_nav_class' , 10, 2 );

    // Allow SVG
    function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
        return $mimes;  
    }
    add_filter('upload_mimes', 'cc_mime_types');
?>