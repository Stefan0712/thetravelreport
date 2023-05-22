<?php

add_action( 'customize_register', 'edward_blog_post_detail_social_share' );
function edward_blog_post_detail_social_share( $wp_customize ) {

	$wp_customize->add_setting( 'post_detail_hide_show_social_share', array(
        'sanitize_callback'     =>  'edward_blog_sanitize_checkbox',
        'default'               =>  edward_blog_get_default_post_detail_social_share()
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'post_detail_hide_show_social_share', array(
        'label' => esc_html__( 'Enable Social Share','edward-blog' ),
        'section' => 'edward_blog_post_detail_customization_section',
        'settings' => 'post_detail_hide_show_social_share',
        'type'=> 'toggle',
    ) ) );

}




add_action( 'customize_register', 'edward_blog_post_detail_social_share_options' );
function edward_blog_post_detail_social_share_options( $wp_customize ) {

    $wp_customize->add_setting( 'post_detail_social_share_options', array(
        'sanitize_callback' => 'edward_blog_sanitize_array',
        'default'     => edward_blog_get_default_post_detail_social_share_options()
    ) );

    $wp_customize->add_control( new Graphthemes_Multi_Check_Control( $wp_customize, 'post_detail_social_share_options', array(
        'label' => esc_html__( 'Social Shares', 'edward-blog' ),
        'section' => 'edward_blog_post_detail_customization_section',
        'settings' => 'post_detail_social_share_options',
        'type'=> 'multi-check',
        'choices'     => array(
            'facebook' => esc_html__( 'Facebook', 'edward-blog' ),
            'twitter' => esc_html__( 'Twitter', 'edward-blog' ),     
            'pinterest' => esc_html__( 'Pinterest', 'edward-blog' ),
            'linkedin' => esc_html__( 'LinkedIn', 'edward-blog' ),
            'email' => esc_html__( 'Email', 'edward-blog' ),
        ),
        'active_callback' => function() {
            return get_theme_mod( 'post_detail_hide_show_social_share', edward_blog_get_default_post_detail_social_share() );
        }
    ) ) );

    $wp_customize->add_setting( 'twitter_id', array(
        'sanitize_callback' =>  'wp_kses_post',
    ) );

    $wp_customize->add_control( 'twitter_id', array(
        'label' =>  esc_html__( 'Twitter ID:', 'edward-blog' ),
        'section'   =>  'edward_blog_post_detail_customization_section',
        'Settings'  =>  'twitter_id',
        'type'=> 'text',
        'active_callback' => function() {
            return get_theme_mod( 'post_detail_hide_show_social_share', edward_blog_get_default_post_detail_social_share() );
        }
    ) );

}