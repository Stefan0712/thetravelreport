<?php

add_action( 'customize_register', 'edward_blog_customizer_theme_info' );

function edward_blog_customizer_theme_info( $wp_customize ) {
	
    $wp_customize->add_section( 'edward_blog_theme_info_section' , array(
		'title'       => esc_html__( '❂ Theme Info' , 'edward-blog' ),
		'priority' => 2
	) );
    

	$wp_customize->add_setting( 'theme_info', array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post',
	) );
    
    $theme_info = '';
	
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Theme Details', 'edward-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/edward-blog/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'edward-blog' ) . '</a></span><hr>';

	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'How to use', 'edward-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/theme-docs/edward-blog/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'edward-blog' ) . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'View Demo', 'edward-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/preview/?product_id=edward-blog' ) . '" target="_blank">' . esc_html__( 'Click Here', 'edward-blog' ) . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Support Forum', 'edward-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://wordpress.org/support/theme/edward-blog' ) . '" target="_blank">' . esc_html__( 'Click Here', 'edward-blog' ) . '</a></span><hr>';

	$wp_customize->add_control( new Edward_Blog_Custom_Text( $wp_customize ,'theme_info',array(
		'section' => 'edward_blog_theme_info_section',
		'label' => $theme_info
	) ) );

}