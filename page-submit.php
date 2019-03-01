<?php
/**
 * The template for displaying all pages.
 *
 * @package Quotes_On_Dev_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header><!-- .entry-header -->

        <section id="content">
            <?php if (is_user_logged_in() && current_user_can('edit_posts')) : ?>

            <div class="container">
                <form id="submit-quote">

                    <label for="author">Author of Quote</label>
                    <input type="text" id="author" name="author">

                    <label for="quote">Quote</label>
                    <textarea id="quote" name="quote"></textarea>

                    <label for="source">Where did you find this quote? (e.g. book name)</label>
                    <input type="text" id="source" name="source">

                    <label for="source-url">Provide the URL of the quote source, if available.</label>
                    <input type="url" id="source-url" name="source-url">
                    <br>
                    <input id="submit-button" type="submit" value="Submit Quote">

                </form>
            </div>

            <?php else : ?>

            <p>Sorry, you must be logged in to submit a quote!</p>

            <?php the_title(
                sprintf(
                    '<a href="%s" rel="bookmark">',
                    esc_url(wp_login_url())
                ),
                'Click her to login.</a>'
            ); ?>
            <?php endif; ?>
        </section><!-- #content -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 