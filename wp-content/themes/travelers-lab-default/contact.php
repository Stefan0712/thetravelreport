<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/build/contact-page-style.css">

<?php

/** 
*Template Name: Contact Page
**/



    get_header();
?>
<div class="contact-header">
    <h1>Contact us!</h1>
    <h2>Get in touch with us for collaborations, to report any problem, or for feedback (or if you just want to say hi).</h2>
</div>
<div class="contact-container">
    <div class="contact-info-container">
        <h2>Get in contact with us</h2>
            <div class="socials-container">
                <h3>Check out our socials</h3>
                <a href="https://www.instagram.com/thetravelreports/" class="social-body">
                    <div class="fa-brands fa-instagram"></div>
                    <p>Instagram</p>
                </a>
                <a href="https://www.tiktok.com/@thetravelreport" class="social-body">
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
            <div class="direct-contact-details">
                <h3>Send us an email</h3>
                <div class="mail-item">
                    <div class="fa fa-envelope"></div>
                    <p>support@thetravelreports.org</p>
                </div>
                <div class="mail-item">
                    <div class="fa fa-envelope"></div>
                    <p>business@thetravelreports.org</p>
                </div>
                <div class="mail-item">
                    <div class="fa fa-envelope"></div>
                    <p>admin@thetravelreports.org</p>
                </div>
              
               
                
                
            </div>
    </div>
    <div class="contact-form-container">
        <h2>Send us a message!</h2>
        <?php echo do_shortcode('[contact-form-7 id="124" title="Contact page form"]'); ?>
    </div>
</div>
    
<?php

    get_footer();
?>