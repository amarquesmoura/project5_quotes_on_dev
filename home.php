<?php
/**
 * The home (front-page) template file.
 *
 * @package Quotes_On_Dev_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

        <?php if (is_home() && !is_front_page()) : ?>
        <header>
            <h1 class="page-title screen-reader-text">
                <?php single_post_title(); ?>
            </h1>
        </header>
        <?php endif; ?>

        <?php  /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'home'); ?>

        <?php endwhile; ?>

        <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

        <button type="button" id="show-me-another">Show Me Another!</button>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 