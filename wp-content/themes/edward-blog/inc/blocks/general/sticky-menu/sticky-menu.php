<?php

add_action( 'customize_register', 'edward_blog_sticky_menu' );
function edward_blog_sticky_menu( $wp_customize ) {

	$wp_customize->add_setting('edward_blog_sticky_menu_option', array(
        'sanitize_callback'     =>  'edward_blog_sanitize_checkbox',
        'default'               =>  edward_blog_get_default_sticky_menu(),
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'edward_blog_sticky_menu_option', array(
        'label' => esc_html__('Enable Sticky Menu', 'edward-blog'),
        'section' => 'edward_blog_general_customization_section',
        'settings' => 'edward_blog_sticky_menu_option',
        'type' => 'toggle',
    )));

}