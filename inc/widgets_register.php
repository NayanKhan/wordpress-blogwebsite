<?php 


// Theme Sidebar

function my_register_sidebars() {

    register_sidebar(
        array(
            'id' => 'sidebar-1',
            'name' => __( 'Main Sidebar' ),
            'description' => __( 'Main Sidebar' ),
                        'before_widget' => '<div class="widget">',
                        'after_widget' => '</div>',
                        'before_title' => '<h3>',
                        'after_title' => '</h3>'
        )
    );
    // Footer Widgets Start
    register_sidebar(
        array(
            'id' => 'footer-1',
            'name' => __( 'Footer One' ),
            'description' => __( 'Footer 1' ),
                        'before_widget' => '<div class="widget-title">',
                        'after_widget' => '</div>',
                        'before_title' => '<h4>',
                        'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'id' => 'footer-2',
            'name' => __( 'Footer Two' ),
            'description' => __( 'Footer 2' ),
                        'before_widget' => '<div class="widget-title">',
                        'after_widget' => '</div>',
                        'before_title' => 'hello',
                        'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'id' => 'footer-3',
            'name' => __( 'Footer Three' ),
            'description' => __( 'Footer 3' ),
                        'before_widget' => '<div class="widget_blog_list">',
                        'after_widget' => '</div>',
                        'before_title' => '<h3>',
                        'after_title' => '</h3>'
        )
    );

}

add_action( 'widgets_init', 'my_register_sidebars' );