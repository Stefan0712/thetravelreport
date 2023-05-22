<?php

add_action( 'customize_register', 'edward_blog_breadcrumbs' );
function edward_blog_breadcrumbs( $wp_customize ) {

	$wp_customize->add_setting('edward_blog_breadcrumbs_option', array(
        'sanitize_callback'     =>  'edward_blog_sanitize_checkbox',
        'default'               =>  edward_blog_get_default_breadcrumbs(),
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'edward_blog_breadcrumbs_option', array(
        'label' => esc_html__('Enable Breadcrumbs', 'edward-blog'),
        'section' => 'edward_blog_general_customization_section',
        'settings' => 'edward_blog_breadcrumbs_option',
        'type' => 'toggle',
    )));

}