<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sbtechbd-Technologies
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e('Skip to content', 'sbtechbd-technologies'); ?></a>
        <header id="masthead" class="site-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <div class="site-branding">
                        <?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php
						else :
						?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                rel="home"><?php bloginfo('name'); ?></a></p>
                        <?php
						endif;
						$sbtechbd_technologies_description = get_bloginfo('description', 'display');
						if ($sbtechbd_technologies_description || is_customize_preview()) :
						?>
                        <p class="site-description">
                            <?php echo $sbtechbd_technologies_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
								?>
                        </p>
                        <?php endif; ?>
                    </div><!-- .site-branding -->

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
						wp_nav_menu(
							array(
								'menu' => 'top_menu',
								'depth' => 2,
								'container' => false,
								'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0 m-auto',
								// Process nav menu using our custom nav walker
								'walker' => new wp_bootstrap_navwalker()
							)
						);
						get_search_form();
						?>
                    </div>
            </nav><!-- #site-navigation -->
            <!-- end container -->
        </header><!-- #masthead -->
        <div class="container">
            <!-- Start container here -->
            <div class="row gx-5 py-5">
                <!-- Start row here -->