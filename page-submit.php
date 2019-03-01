<?php
/**
 * The template for displaying all pages.
 *
 * @package Quotes_On_Dev_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (is_user_logged_in() && current_user_can('edit_posts')) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile; ?>
       sprintf("<a href="1s" esc_url( wp_login_url()) 'Click her to login.' </main> <!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 