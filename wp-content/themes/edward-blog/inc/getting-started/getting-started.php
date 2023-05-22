<?php

/**
 * Add a new page under Appearance
 */

function edward_blog_getting_started_menu()
{

	add_theme_page(esc_html__('Getting Started', 'edward-blog'), esc_html__('Getting Started', 'edward-blog'), 'edit_theme_options', 'edward-blog-get-started', 'edward_blog_getting_started_page');
}
add_action('admin_menu', 'edward_blog_getting_started_menu');

/**
 * Enqueue styles for the help page.
 */
function edward_blog_admin_scripts()
{
	global $pagenow;

	if ($pagenow != 'themes.php') {
		return;
	}
	

	wp_enqueue_style('edward-admin-style', get_template_directory_uri() . '/inc/getting-started/getting-started.css', array(), EDWARD_BLOG_VERSION);
}
add_action('admin_enqueue_scripts', 'edward_blog_admin_scripts');

/**
 * Add the theme page
 */
function edward_blog_getting_started_page()
{ ?>

	<div class="main-info">

		<?php get_template_part('inc/getting-started/template-parts/main', 'info'); ?>

	</div>
	<div class="top-wrapper">

		<?php get_template_part('inc/getting-started/template-parts/free-vs', 'pro'); ?>

		<?php get_template_part('inc/getting-started/template-parts/faq'); ?>


	</div>
<?php
}
