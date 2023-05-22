<?php

add_action( 'customize_register', 'edward_blog_show_hide_site_tagline' );
function edward_blog_show_hide_site_tagline( $wp_customize ) {

    $wp_customize->add_setting( 'show_hide_site_tagline', array(
        'sanitize_callback'     =>  'edward_blog_sanitize_checkbox',
        'default'               =>  edward_blog_get_default_site_tagline_show_hide()
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'show_hide_site_tagline', array(
        'label' => esc_html__( 'Show/Hide Site Tagline','edward-blog' ),
        'section' => 'title_tagline',
        'settings' => 'show_hide_site_tagline',
        'type'=> 'toggle',
    ) ) );

}