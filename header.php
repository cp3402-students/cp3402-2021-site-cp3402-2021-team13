<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cp3402-base-theme
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
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e(
        'Skip to content',
        'cp3402-base-theme'
    ); ?>
    </a>

    <?php if (get_header_image() && is_front_page()) : ?>
        <figure class="header-image">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>"
                 height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="">
            </a>
        </figure><!-- .header image -->
    <?php endif; // End header image check. ?>

    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            the_custom_logo();
            if (is_front_page() && is_home()) :
                ?>
            <div class="site-branding_text">
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name'); ?></a></h1>
                <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name'); ?></a></p>
                <?php
            endif;
            $cp3402_base_theme_description = get_bloginfo('description', 'display');
            if ($cp3402_base_theme_description || is_customize_preview()) :
                ?>
                <p class="site-description"><?php echo $cp3402_base_theme_description;
                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif; ?>
            </div><!-- .site-branding_text -->
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <!--            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e(
            //                'Primary Menu',
            //                'cp3402-base-theme'
            //            ); ?><!--</button>-->
            <?php wp_nav_menu(array(
                'theme_location' => 'menu-menu-1-container',
                'menu_id'        => 'primary-menu',
            ));
            /* The below code checks if a mobile-menu is set from the backend in the menu settings. If a menu has been set it will be displayed in the header. Or else, a menu has not been set then display a message.*/
            if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
                wp_nav_menu( array(
                    'depth' => 6,
                    'sort_column' => 'menu_order',
                    'container' => 'ul',
                    'menu_id' => 'main-nav',
                    'menu_class' => 'nav mobile-menu',
                    'theme_location' => 'mobile-menu'
                ) );
            } else {
                echo "<ul class='nav mobile-menu'> <font style='color:red'>Mobile Menu has not been set</font> </ul>";
            }
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
