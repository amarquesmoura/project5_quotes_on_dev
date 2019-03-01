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
        <?php endif; ?>

        <article class="hentry">
            <div class="entry-content"></div>
            <div class="entry-meta">
                <h2 class="entry-title"></h2><span class="source"></span>
            </div>
        </article>

        <button type="button" id="show-me-another">Show Me Another!</button>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 