<?php

add_action( 'customize_register', 'edward_blog_site_identity_font_family' );
function edward_blog_site_identity_font_family( $wp_customize ) {

    $wp_customize->add_setting( 'site_identity_font_family', array(
        'default'     => edward_blog_get_default_site_identity_font_family(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'edward_blog_sanitize_google_fonts'
    ) );

    $wp_customize->add_control( 'site_identity_font_family', array(
        'settings'    => 'site_identity_font_family',
        'label'       =>  esc_html__( 'Site Title/Tagline Font', 'edward-blog' ),
        'section'     => 'title_tagline',
        'type'        => 'select',
        'choices'     => edward_blog_google_fonts( edward_blog_free_pro() ),
    ) );

}


add_action( 'customize_preview_init', 'edward_blog_site_identity_font_family_enqueue_scripts' );
function edward_blog_site_identity_font_family_enqueue_scripts() {

    $site_identity_font_family = esc_attr( get_theme_mod( 'site_identity_font_family', edward_blog_get_default_site_identity_font_family() ) );


    wp_enqueue_script( 'graphthemes-site-identity-font-family-customizer', get_template_directory_uri() . '/inc/blocks/font-family/site-identity/customizer-site-identity-font-family.js', array('jquery'), '', true );
}


add_action( 'wp_enqueue_scripts', 'edward_blog_site_identity_font_family_dynamic_css' );
function edward_blog_site_identity_font_family_dynamic_css() {

    $site_identity_font_family = esc_attr( get_theme_mod( 'site_identity_font_family', edward_blog_get_default_site_identity_font_family() ) );

    $dynamic_css = ":root { --site-identity-font-family: $site_identity_font_family; }";

    wp_add_inline_style( 'edward-blog', $dynamic_css );
}