<?php
    register_nav_menus( 
        array(
             // id เวลาเรียกใช้  // ดูเฉยๆ
            'primary' => 'Primary Menu',
            // 'primary2' => 'Primary Menu2'
    ));
    
    function seed_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Footer', 'seed' ),
            'id'            => 'footer-1',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Banner', 'seed' ),
            'id'            => 'banner-1',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ) );
    }
    add_action( 'widgets_init', 'seed_widgets_init' );

?>