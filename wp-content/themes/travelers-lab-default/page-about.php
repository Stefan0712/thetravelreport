<?php

/** 
*Template Name: About Page
**/



    get_header();
?>
    <div class="privacy-header">
        <h1>About Us</h1>
        <p>Find out who are we </p>
    </div>
    <div class="about-body">
        <div class="about-container">
            <?php the_content(); ?>
        </div>
    </div>
<?php

    get_footer();
?>