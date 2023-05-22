<?php  get_header(); ?>


<div class="front-page-header" >
    <a href="<?php echo site_url('/news'); ?>" class="header-item" 
    style="background-image: url(<?php echo get_theme_file_uri('/build/images/news-cover.jpg') ?>);">
        <div class="header-item-text">
            <h1 class="header-item-title">News</h1>
            <p>Latest post on 12.12.2023</p>
            <div class="hidden-desc">
                Check out some of the latest and most important news about traveling so you make sure you won't miss out important info. From news that directlly target travelers, to news that might not seem to affect you but they surely do. Better be fully informed about the traveling world so you won't find yourself into a bad situation.
            </div>
        </div>
    </a>
    <a href="<?php echo site_url('/guides'); ?>" class="header-item" 
    style="background-image: url(<?php echo get_theme_file_uri('/build/images/guides-cover.jpg') ?>);">
    <div class="header-item-text">
            <h1 class="header-item-title">Guides</h1>
            <p>Latest post on 12.12.2023</p>
            <div class="hidden-desc">
                Not sure how to prepare for your perfect traveling? Check out some guides that are made to help you prepare for your next trip. From packing lists, to itineraries and to other very useful tutorials that will surely help you.
            </div>
        </div>
    </a>
    <a href="<?php echo site_url('/destinations'); ?>" class="header-item" 
    style="background-image: url(<?php echo get_theme_file_uri('/build/images/destinations-cover.jpg') ?>);">
    <div class="header-item-text">
            <h1 class="header-item-title">Destinations</h1>
            <p>Latest post on 12.12.2023</p>
            <div class="hidden-desc">
                Everyone knows about the popular destinations, so let's find together some of the hidden gems that not many know about. From hidden beautiful natural places to a small and excelent hidden restaurant. We want to find them all and share with you.
            </div>
        </div>
    </a>
    <a href="<?php echo site_url('/blogs'); ?>" class="header-item" 
    style="background-image: url(<?php echo get_theme_file_uri('/build/images/blogs-cover.jpg') ?>);">
    <div class="header-item-text">
            <h1 class="header-item-title">Blogs</h1>
            <p>Latest post on 12.12.2023</p>
            <div class="hidden-desc">
                There you will find personal blogs about my trips and experiences. There is no better way to decice wether a place is worth seeing or not, rather than hearing an opinion of someone who visited it.
            </div>
        </div>
    </a>
</div>
<div class="home-page-body">

    <div class="latest-posts-container">
            <h1 class="container-header">Latest posts</h1>
        <div class="posts-container">

            <div class="news-posts-container posts-container-section">
                <?php
                $latestPosts = new WP_Query(array(
                    'posts_per_page' => 4,
                    'category_name' => 'news'
                ));
                    while($latestPosts -> have_posts()){
                        $latestPosts -> the_post();
                        ?>
                    <a href="<?php the_permalink(); ?>" class="latest-post-body">
                        <div class="post-image"><?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
                }else{?>
                    <img class="no-photo-placeholder" src="<?php echo get_theme_file_uri('/build/images/no-photo.jpg'); ?>"> <?php
                } ?></div>
                        <div class="post-info">
                            <div class="post-title"><?php the_title(); ?></div>
                            <p class="post-details">Posted on <?php the_time('n.j.y'); ?></p>   
                        </div>
                     </a>
                    <?php }
                ?>
                <a class="see-more-link" href="<?php echo site_url('/guides'); ?>">See more news</a>
            </div>
            <div class="guide-posts-container posts-container-section">
                <?php
                $latestPosts = new WP_Query(array(
                    'posts_per_page' => 4,
                    'category_name' => 'guides'
                ));
                    while($latestPosts -> have_posts()){
                        $latestPosts -> the_post();
                        ?>
                    <a href="<?php the_permalink(); ?>" class="latest-post-body">
                        <div class="post-image"><?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
                }else{?>
                    <img class="no-photo-placeholder" src="<?php echo get_theme_file_uri('/build/images/no-photo.jpg'); ?>"> <?php
                } ?></div>
                        <div class="post-info">
                            <div class="post-title"><?php the_title(); ?></div>
                            <p class="post-details">Posted on <?php the_time('n.j.y'); ?></p>   
                        </div>
                    </a>
                    <?php }
                ?>
            <a class="see-more-link" href="<?php echo site_url('/guides'); ?>">See more guides</a>
            </div>
        </div>
        <h1 class="container-header">Categories</h1>
        <div class="categories-container">

            <?php
                require_once("wp-load.php");
                $categories = get_categories();
                foreach ($categories as $category) {
                    echo '<a href="' . get_category_link($category->term_id) . '" class="category-body">';
                    echo $category->name . ' (' . $category->count . ' posts)';
                    echo '</a>';
                }
            ?>
        </div>
        <h1 class="container-header">Instagram posts</h1>
        <div class="instagram-posts-container">
            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </div>
        <div class="subscribe-container">
        <h2> Don't miss a thing! Subscribe to our newsletter </h2>
        <h4>We hate spam and we don't even like to write enough mails to become spam, so you can rest assured.</h4>
            <?php echo do_shortcode('[mc4wp_form id=123]'); ?>

        </div>

    </div>

    <div class="side-panel">
        <div class="connect-with-us">
            <h2 class="container-header">Connect with us</h2>
            <div class="socials-container">
                <a href="https://www.instagram.com/thetravelreports/" class="social-body">
                    <div class="fa-brands fa-instagram"></div>
                    <p>Instagram</p>
                </a>
                <a href="https://www.tiktok.com/@thetravelreport?is_from_webapp=1&sender_device=pc" class="social-body">
                    <div class="fa-brands fa-tiktok"></div>
                    <p>TikTok</p>
                 </a>
                <a href="https://www.youtube.com/channel/UCNhYyRAHQWkM4eMylaEfg9A" class="social-body">
                    <div class="fa-brands fa-youtube"></div>
                    <p>Youtube</p>
                </a>
                <a href="https://twitter.com/TravelReport01" class="social-body">
                    <div class="fa-brands fa-twitter"></div>
                    <p>Twitter</p>
                </a>
            </div>
        </div>
        <div class="about-me-side-section">
                <h2 class="container-header">About me</h2>
                <div class="about-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus ex arcu, a vestibulum felis suscipit vel. Aenean tristique sagittis urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis varius justo vitae tellus luctus, lobortis placerat neque volutpat. Nunc nec urna ac ex blandit gravida a aliquet turpis. Cras facilisis nisl vitae ultrices condimentum. Nulla sit amet felis sit amet ex rutrum iaculis eget at dui. Nullam tincidunt elit et lacus tempus aliquam. Sed sodales quam leo, ac vehicula dui euismod eget</p>
                    <div class="contact-btn">Contact me</div>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>