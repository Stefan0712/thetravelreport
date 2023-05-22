<!DOCTYPE html>
<html>
<body <?php body_class(); ?>>
  <head>
    <meta name="viewport" content="width=device-width, initial">
    <meta charset="<?php bloginfo('charset') ?>">
    <?php wp_head(); ?>
  </head>
<div class="nav">
    <a href="<?php echo site_url(); ?>" class="logo">Travelers Lab</a>
    <div class="nav-links">
        <a href="<?php echo site_url(); ?>">Home</a>
        <a href="<?php echo site_url('/blogs'); ?>">Blogs</a>
        <a href="<?php echo site_url('/news'); ?>">News</a>
        <a href="<?php echo site_url('/guides'); ?>">Guides</a>
        <a href="<?php echo site_url('/about'); ?>">About</a>
        <a href="<?php echo site_url('/contact'); ?>">Contact</a>
    </div>
</div>









