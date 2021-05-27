<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cp3402-base-theme
 */

?>

<footer id="colophon" class="site-footer">
    <nav class="social-nav">
        <!-- WP nav menu. Adjust Social Media Menu on admin-->
        <?php wp_nav_menu(array('theme_location' => 'social-menu')); ?>
    </nav> <!-- .social-nav -->
    <a class="back-to-top" href="#">Back to Top</a>
    <div class="site-info">
        &copy; <?php echo date('Y'); ?>
        <a href="<?php echo esc_url(__('https://wordpress.org/', 'cp3402-base-theme')); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf(esc_html__('Proudly powered by %s', 'cp3402-base-theme'), 'WordPress');
            ?>
        </a>
        <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(
            esc_html__('Theme: %1$s by %2$s.', 'cp3402-base-theme'),
            'cp3402-base-theme',
            '<a href="http://underscores.me/">Underscores.me</a>'
        );
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
