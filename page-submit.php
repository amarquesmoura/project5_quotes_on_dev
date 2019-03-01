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

        <?php else : ?>

        <?php the_title(
            sprintf(
                '<a href="%s" rel="bookmark">',
                esc_url(wp_login_url())
            ),
            'Click her to login.</a>'
        ); ?>
        <?php endif; ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 