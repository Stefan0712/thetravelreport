<?php

add_action( 'customize_register', 'edward_blog_show_hide_site_title' );
function edward_blog_show_hide_site_title( $wp_customize ) {

	$wp_customize->add_setting( 'show_hide_site_title', array(
        'sanitize_callback'     =>  'edward_blog_sanitize_checkbox',
        'default'               =>  edward_blog_get_default_site_title_show_hide(),
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'show_hide_site_title', array(
        'label' => esc_html__( 'Show/Hide Site Title','edward-blog' ),
        'section' => 'title_tagline',
        'settings' => 'show_hide_site_title',
        'type'=> 'toggle',
    ) ) );

}