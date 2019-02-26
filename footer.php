<?php
/**
 * The template for displaying the footer.
 *
 * @package Quotes_On_Dev_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <nav id="site-navigation" class="menu-main-navigation-container" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
        </nav><!-- #site-navigation -->
        <p>Brought to you by <a href="http://www.redacademy.com/">RED Academy</a></p>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html> 