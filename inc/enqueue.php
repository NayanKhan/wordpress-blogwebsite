
<?php

// Theme Enqueue 

function codex_css_js_file_calling(){

            wp_enqueue_style('codex-style', get_stylesheet_uri());
            wp_register_style('vendor', get_template_directory_uri() . './assets/css/vendor.css', array(), '1.0.0', 'all');
            wp_register_style('style', get_template_directory_uri() . './assets/css/style.css', array(), '1.0.0', 'all');
            wp_register_style('responsive', get_template_directory_uri() . '.assets/css/responsive.css', array(), '1.0.0', 'all');
            wp_enqueue_style('vendor');
            wp_enqueue_style('style');
            wp_enqueue_style('responsive');

            // JQuery 
            wp_enqueue_script('Jquery');
            wp_enqueue_script('vendor', get_template_directory_uri().'./assets/js/vendor.js', array(), '5.0.2', 'true');
            wp_enqueue_script('main', get_template_directory_uri().'./assets/js/main.js', array(), '5.0.2', 'true');
            wp_enqueue_script('vendor');
            wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'codex_css_js_file_calling');

// Fonts Function

function codex_google_font (){
wp_enqueue_style('codex_google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet', false);
}
add_action('wp_enqueue_scripts', 'codex_google_font');
