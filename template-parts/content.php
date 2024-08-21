<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sbtechbd-Technologies
 */

?>

<article id="post-<?php the_ID(); ?> " <?php post_class(); ?>>
    <header class="entry-header pb-3">
        <?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
        <div class="entry-meta">
            <i class="fas fa-user"></i> <?php sbtechbd_technologies_posted_by(); ?>
            <i class="fas fa-calendar-alt"></i> <?php sbtechbd_technologies_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php sbtechbd_technologies_post_thumbnail(); ?>

    <div class="entry-content pb-3">
        <?php
		// Display the post content with a "Continue reading" link if the content is paginated
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('<a class="continue-reading-link" href="%1$s"><i class="fas fa-arrow-right"></i> Continue Reading<span class="screen-reader-text"> "%2$s"</span></a>', 'sbtechbd-technologies'),
					array(
						'a' => array(
							'class' => array(),
							'href'  => array(),
						),
						'i' => array(
							'class' => array(),
						),
						'span' => array(
							'class' => array(),
						),
					)
				),
				esc_url(get_permalink()),
				wp_kses_post(get_the_title())
			)
		);

		// Display pagination links for multi-page content
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'sbtechbd-technologies'),
				'after'  => '</div>',
			)
		);
		?>
    </div><!-- .entry-content -->




    <footer class="entry-footer">
        <?php sbtechbd_technologies_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->