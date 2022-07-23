<?php


// Theme Title
add_theme_support('title-tag');

// Image Support

add_theme_support( 'post-thumbnails', array('page', 'post', 'courses') );

// image SIze

add_image_size( 'post-thumbnails', 400, 300, true );
add_image_size( 'courses', 100, 100, true );


// Exerpt Limitation

function codex_exerp_length ($lenght){
    return 20;
}

add_filter( 'excerpt_length', 'codex_exerp_length', 999 );


// Page Navigation

function codex_pagination() {
    global $wp_query;
    $total = $wp_query->max_num_pages;
    if ( $total > 1 ) {
        if ( !$current_page = get_query_var('paged') ) {
            $current_page = 1;
        }
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total,
            'mid_size' => 4,
            'type' => 'list'
        ));
    }
}