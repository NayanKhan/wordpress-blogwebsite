<?php



function custom_post_register(){
    register_post_type( 'courses', array(
        'labels' => array(
            'name'                  => 'Courses',
            'singular_name'         => 'Course',
            'menu_name'             => 'Course',
            'name_admin_bar'        => 'Course',
            'add_new'               => 'Add New Course',
            'add_new_item'          => 'Add New Course',
            'new_item'              => 'New Course',
            'edit_item'             => 'Edit Course',
            'view_item'             => 'View Course',
            'all_items'             => 'All Course Images',
            'search items'          => 'Search Course',
            'parent_item_colon'     => 'Parent Course',
            'not_found'             => 'No Course Found',
            'not_found_in_trash'    => 'No Course Found In Trash',
        ),
        'public'                => true,
        'publicaly_queryable'   => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'Course' ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'Hierarchical'          => false,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-format-image',
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','hierarchical','trackbacks','custom-fields','revisions','page-attributes'),
       
    ));
}

add_action( 'init', 'custom_post_register');