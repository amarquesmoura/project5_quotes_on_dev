<?php
/**
 * The template for displaying the archives.
 *
 * @package Quotes_On_Dev_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="browse-archives">
            <header class="entry-header">
                <h1 class="entry-title">Archives</h1>
            </header><!-- .entry-header -->
            <div class="post-archives clearfix">
                <h2>Quote Authors</h2>
                <ul>

                    <?php
                    $posts = get_posts(array('posts_per_page' => -1));
                    foreach ($posts as $post) : ?>
                    <li>
                        <?php the_title(sprintf('<a href="%s" rel="bookmark" >', esc_url(get_permalink())), '</a>'); ?>
                    </li>
                    <?php endforeach ?>

                </ul>
            </div>
            <div class="category-archives clearfix">
                <h2>Categories</h2>
                <ul>

                    <?php 
                    echo wp_list_categories(array('title_li' => ''));
                    ?>

                </ul>
            </div>
            <div class="tag-archives clearfix">
                <h2>Tags</h2>

                <?php while (have_posts()) : the_post(); ?>
                <?php wp_tag_cloud(array(
                    'format' => 'list',
                    'smallest' => 1,
                    'largest' => 1,
                    'unit' => 'rem',
                )); ?>
                <?php endwhile; ?>

            </div>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 