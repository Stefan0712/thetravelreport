<?php

add_action( 'customize_register', 'edward_blog_post_detail_category' );
function edward_blog_post_detail_category( $wp_customize ) {

	$wp_customize->add_setting( 'post_detail_hide_show_category', array(
        'sanitize_callback'     =>  'edward_blog_sanitize_checkbox',
        'default'               =>  edward_blog_get_default_post_detail_category()
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'post_detail_hide_show_category', array(
        'label' => esc_html__( 'Show/Hide Categories','edward-blog' ),
        'section' => 'edward_blog_post_detail_customization_section',
        'settings' => 'post_detail_hide_show_category',
        'type'=> 'toggle',
    ) ) );

}