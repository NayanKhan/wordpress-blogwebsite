<?php 


//Theme Register

function codex_customizer_register ($wp_customize){
    $wp_customize->add_section('codex_header_area', array(
        'title'=>__('Header Area', 'codexeducation'),
        'description'=> 'If You Can interest to Update Your header area, you can do it here',
    ));

    $wp_customize->add_setting('codex_logo', array(
        'default'=> get_bloginfo('template_directory') . './assets/img/logo.png',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codex_logo', array (
        'label'=> 'Logo Upload',
        'description'=> 'If You Can interest to Update Your header area, you can do it here',
        'setting'=>'codex_logo',
        'section'=> 'codex_header_area',
    )));


     // Top Header Function

     $wp_customize->add_section('codex_top_header', array(
        'title'=>__('Top Header', 'codexeducation'),
        'description'=> 'If You Can interest to Update Your Top Email or Phone Numner, you can do it here',
    ));

    $wp_customize->add_setting('codex_email', array(
        'default'=> 'admin@gmail.com',

    ));

    $wp_customize->add_control( 'codex_email', array (
        'label'=> 'Enter Your Email',
        'setting'=>'codex_email',
        'section'=> 'codex_top_header',
    ));

    
    $wp_customize->add_setting('codex_address', array(
        'default'=> 'Kuril, Dhaka',

    ));

    $wp_customize->add_control( 'codex_address', array (
        'label'=> 'Enter Your Address',
        'setting'=>'codex_address',
        'section'=> 'codex_top_header',
    ));


    // Menu Function

    $wp_customize->add_section('codex_menu_option', array(
        'title'=>__('Menu Position Option', 'codexeducation'),
        'description'=> 'If You Can interest to Update Your Menu position, you can do it here',
    ));

    $wp_customize->add_setting('codex_menu_position', array(
        'default'=> 'header_left',

    ));

    $wp_customize->add_control( 'codex_menu_position', array (
        'label'=> 'Header Position',
        'description'=> 'Select Your Menu Option',
        'setting'=>'codex_menu_position',
        'section'=> 'codex_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));


    // Footer Function

    $wp_customize->add_section('codex_footer_option', array(
        'title'=>__('Footer Option', 'codexeducation'),
        'description'=> 'If You Can interest to Update Your Footer, you can do it here',
    ));

    $wp_customize->add_setting('codex_copyright', array(
        'default'=> '&copy 2022 Codex Hunter',

    ));

    $wp_customize->add_control( 'codex_copyright', array (
        'label'=> 'Footer Text',
        'description'=> 'Update your Footer Text',
        'setting'=>'codex_copyright',
        'section'=> 'codex_footer_option',
    ));



//All our sections, settings, and controls will be added here
    
    // Theme Color Setting 

    $wp_customize->add_section('codex_color_option', array(
        'title'=>__('Color & Font Option', 'codexeducation'),
        'description'=> 'If You Can interest to Update Your Theme Color, you can do it here',
    ));


     // Primary Color
     $wp_customize->add_setting( 'primary_textcolor' , array(
        'default'     => "#FDC800",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_textcolor', array(
        'label'        => __( 'Primary Color', 'codexeducation' ),
        'section'    => 'codex_color_option',
        'setting' => 'primary_textcolor'
    ) ) );



     // Heading Color
     $wp_customize->add_setting( 'heading_textcolor' , array(
        'default'     => "#002147",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_textcolor', array(
        'label'        => __( 'Heading Color', 'codexeducation' ),
        'section'    => 'codex_color_option',
        'setting' => 'heading_textcolor'
    ) ) );

    

     // Body Text Color
     $wp_customize->add_setting( 'theme_textcolor' , array(
        'default'     => "#565872",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_textcolor', array(
        'label'        => __( 'Body Text Color', 'codexeducation' ),
        'section'    => 'codex_color_option',
        'setting' => 'theme_textcolor'
    ) ) );



     // Body Font Size
     $wp_customize->add_setting( 'body_font_size' , array(
        'default'     => '16',
    ) );

    $wp_customize->add_control('body_font_size', array(
        'label'        => __( 'Body Font Size', 'codexeducation' ),
        'section'    => 'codex_color_option',
        'setting' => 'body_font_size'
    ) );
    


}
add_action('customize_register', 'codex_customizer_register');



// theme Color Setting



function mytheme_customize_css()
{
    ?>
    <style>
        :root {
        --main-color: <?php echo get_theme_mod('primary_textcolor', "#000000"); ?>;
        --heading-color: <?php echo get_theme_mod('heading_textcolor', "#002147"); ?>;
        --paragraph-color: <?php echo get_theme_mod('theme_textcolor', "#565872"); ?>;
        --body-font: "Rubik", sans-serif;
        --body-font-size: <?php echo get_theme_mod('body_font_size',); ?>;
        --line-height30: 1.7;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');