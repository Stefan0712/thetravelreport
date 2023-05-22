<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/build/blog-post-style.css">
<?php 
    get_header();
    
    while(have_posts()){
        the_post(); ?>
           
                <div class="single-post-container">
               
                    <div class="post-page-body">
    
                        <h1 class="single-post-title"><?php the_title(); ?></h1>
                        <div class="single-post-info">
                            <p>
                            Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?>
                            </p>
                            <div class="categories-box">
                                <?php echo get_the_category_list(' '); ?>
                            </div>
                        </div>
                            
                            
                        
                        <div class="single-post-content">
                            <?php the_content();  ?>
                            <div class="comment-section-container">
                                <?php comments_template(); ?>
                            </div>
                        </div>
                    </div>

                    <?php get_template_part('side-panel-posts'); ?>
                </div>
                
  
                

<?php }
    get_footer();
?>

