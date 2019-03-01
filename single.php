<?php
/**
 * The template for displaying all single posts.
 *
 * @package Quotes_On_Dev_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'home'); ?>

        <?php endwhile; ?>

        <button type="button" id="show-me-another">Show Me Another!</button>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 