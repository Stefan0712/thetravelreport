<?php


add_action( 'customize_register', 'edward_blog_post_snippet_featured_image' );
function edward_blog_post_snippet_featured_image( $wp_customize ) {

	$wp_customize->add_setting( 'post_snippet_hide_show_featured_image', array(
        'sanitize_callback'     =>  'edward_blog_sanitize_checkbox',
        'default'               =>  edward_blog_get_default_post_snippet_featured_image()
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'post_snippet_hide_show_featured_image', array(
        'label' => esc_html__( 'Show/Hide Featured Image','edward-blog' ),
        'section' => 'edward_blog_post_snippet_customization_section',
        'settings' => 'post_snippet_hide_show_featured_image',
        'type'=> 'toggle',
    ) ) );

}


add_action( 'customize_register', 'edward_blog_post_snippet_featured_image_size' );
function edward_blog_post_snippet_featured_image_size( $wp_customize ) {

    $wp_customize->add_setting( 'post_snippet_featured_image_size', array(
        'default'     => edward_blog_get_default_post_snippet_featured_image_size(),
        'sanitize_callback' => 'edward_blog_sanitize_select',
    ) );

    $wp_customize->add_control( 'post_snippet_featured_image_size', array(
        'settings'    => 'post_snippet_featured_image_size',
        'label'       =>  esc_html__( 'Post Thumbnail Options:', 'edward-blog' ),
        'section'     => 'edward_blog_post_snippet_customization_section',
        'type'        => 'select',
        'active_callback' => function(){
            return get_theme_mod( 'post_snippet_hide_show_featured_image', edward_blog_get_default_post_snippet_featured_image() );
        },
        'choices'     => array(
            'thumbnail' => esc_html__( 'Thumbnail', 'edward-blog' ),
            'medium' => esc_html__( 'Medium', 'edward-blog' ),
            'large' => esc_html__( 'Large', 'edward-blog' ),
            'full' => esc_html__( 'Full / Original', 'edward-blog' ),
        )
    ) );

}