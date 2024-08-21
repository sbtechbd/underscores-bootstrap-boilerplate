<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sbtechbd-Technologies
 */

?>
</div><!-- .row  -->
</div><!-- .container -->
<footer id="colophon" class="site-footer  text-center bg-body-secondary py-3">
    <div class="site-info container">
        <a href="<?php echo esc_url(__('https://wordpress.org/', 'sbtechbd-technologies')); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf(esc_html__('Proudly Powered by %s', 'sbtechbd-technologies'), 'WordPress');
            ?>
        </a>
        <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(esc_html__('Theme: %1$s by %2$s.', 'sbtechbd-technologies'), 'Sbtechbd Technologies', '<a href="https://subrata6630.github.io/">Subrata Debnath</a>');
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>