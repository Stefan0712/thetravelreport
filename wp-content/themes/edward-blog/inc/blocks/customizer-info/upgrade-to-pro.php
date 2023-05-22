<?php

function edward_blog_customizer_upgrade_to_pro( $wp_customize ) {

	$wp_customize->add_section( new Edward_Blog_Button_Control( $wp_customize, 'upgrade-to-pro',	array(
		'title'    => esc_html__( '★ Edward Pro ', 'edward-blog' ),
		'type'	=> 'button',
		'pro_text' => esc_html__( 'Upgrade to Pro', 'edward-blog' ),
		'pro_url'  => esc_url( 'https://graphthemes.com/edward/' ),
		'priority' => 1
	) )	);

	
}
add_action( 'customize_register', 'edward_blog_customizer_upgrade_to_pro' );


function edward_blog_enqueue_custom_admin_style() {
        wp_register_style( 'edward-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.css', false );
        wp_enqueue_style( 'edward-button' );

        wp_enqueue_script( 'edward-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.js', array( 'jquery' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'edward_blog_enqueue_custom_admin_style' );