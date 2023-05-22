<?php
function blog_files(){
    wp_enqueue_style('blog_main_styles', get_theme_file_uri('/build/main-styles.css'));
    
}

add_action('wp_enqueue_scripts', 'blog_files');

	
add_theme_support( 'post-thumbnails' );
//removes the category word from header
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});


function add_google_fonts() {
    wp_enqueue_style( 'add_google_fonts ', 'https://fonts.googleapis.com/css2?family=Varela+Round&display=swap', false);

    
};
add_action('wp_enqueue_scripts','add_google_fonts');

function enqueue_single_blog_styles() {
    if (is_single()) {
        wp_enqueue_style('single-blog-css', get_template_directory_uri() . '/build/blog-post-styles.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_single_blog_styles');


?>