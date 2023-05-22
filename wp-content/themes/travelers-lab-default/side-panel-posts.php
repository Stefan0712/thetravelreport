<div class="index-side-panel">
    <h1 class="container-header">Latest posts</h1>
    <div class="index-side-posts-container">
        <?php 
        $latestPosts = new WP_QUery(array(
            'posts_per_page' => 3
        ));
        while($latestPosts -> have_posts()){
            $latestPosts -> the_post();
            ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="side-panel-index-post-body">
                        <div class="side-panel-index-post-thumbnail"><?php if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        }else{?>
                            <img class="no-photo-placeholder" src="<?php echo get_theme_file_uri('/build/images/no-photo.jpg'); ?>"> <?php
                        } ?>
                        </div>
                        <div class="index-post-info">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_time('d.m.Y'); ?></p>
                        </div>
                    </div>
                </a>
        <?php } ?>
    </div>
    <h1 class="container-header">Recommended</h1>
    <div class="index-side-posts-container">
    <?php 
        $recommendedPosts = new WP_QUery(array(
            'posts_per_page' => 3,
            'category_name' => 'recommended'
        ));
        while($recommendedPosts -> have_posts()){
            $recommendedPosts -> the_post();
            ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="side-panel-index-post-body">
                        <div class="side-panel-index-post-thumbnail"><?php if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        }else{?>
                            <img class="no-photo-placeholder" src="<?php echo get_theme_file_uri('/build/images/no-photo.jpg'); ?>"> <?php
                        } ?>
                        </div>
                        <div class="index-post-info">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_time('d.m.Y'); ?></p>
                        </div>
                    </div>
                </a>
        <?php } ?>
    </div>
</div>
