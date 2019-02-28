<?php
/**
 * Template part for displaying posts.
 *
 * @package Quotes_On_Dev_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->
    <div class="entry-meta">
        <h2 class="entry-author">&mdash;
            <?php the_title(); ?>
        </h2>
        <span class="source"></span>
    </div><!-- .entry-meta -->
</article><!-- #post-## --> 