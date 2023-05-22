<?php

/** 
*Template Name: Guides Page
**/



    get_header();
?>
    <div class="index-body">
    <div class="index-posts-container">
        <?php 
        $blogPosts = new WP_QUery(array(
            'posts_per_page' => 10,
            'category_name' => 'guides'
        ));
        while($blogPosts -> have_posts()){
            $blogPosts -> the_post();
            ?>
            <div class="index-post-body">
                <div class="index-post-thumbnail"><?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
                }else{?>
                    <img class="no-photo-placeholder" src="<?php echo get_theme_file_uri('/build/images/no-photo.jpg'); ?>"> <?php
                } ?></div>
                <div class="index-post-info">
                    <div class="info-top-header"><p class="post-details">Posted by <?php the_author_posts_link(); ?> on <?php the_time('d.m.Y'); ?></p> - <p><?php echo get_the_category_list(', '); ?></p></div>   
                    <h1><?php the_title(); ?></h1>
                    
                    <p class="summary-text"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                    <a class="index-read-more-btn" href="<?php the_permalink(); ?>">Read more</a>
                    
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    
        <?php get_template_part('side-panel-posts'); ?>
    
    </div>
</div>
<?php

    get_footer();
?>