<?php

add_action( 'customize_register', 'edward_blog_customizer_premium_features' );

function edward_blog_customizer_premium_features( $wp_customize ) {
    

	$wp_customize->add_setting( 'premium_features', array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post',
	) );
    
    $premium_features = '<div class="premium-info"><h2>' . esc_html__( 'Premium Version', 'edward-blog' ) . ': </h2>

		<p>Do you want to customize your website with more color option, font options, change footer copyright information, premium support and more, then you can check the pro version of the theme.</p>
		<ul>
		<li><span class="dashicons dashicons-yes"></span> Unlimited Color Options</li>
		<li><span class="dashicons dashicons-yes"></span> 1000+ Google Fonts</li>
		<li><span class="dashicons dashicons-yes"></span> Edit Footer Copyright Info</li>
		<li><span class="dashicons dashicons-yes"></span> Premium Support</li>
		<ul>
		<hr>

	<a class="button button-primary" href="' . esc_url( 'https://graphthemes.com/edward/' ) . '" target="_blank">' . esc_html__( 'Upgrade to Pro', 'edward-blog' ) . '</a></div>';

	$wp_customize->add_control( new Edward_Blog_Custom_Text( $wp_customize ,'premium_features',array(
		'section' => 'edward_blog_theme_info_section',
		'label' => $premium_features
	) ) );

}