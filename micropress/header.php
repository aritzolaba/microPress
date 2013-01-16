<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="<?php bloginfo('name'); ?>">
        <title><?php
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
	bloginfo( 'name' );

        // Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        // Add a page number if necessary:
        if ($paged >= 2 || $page >= 2)
            echo ' | ' . sprintf(__('Page %s', 'microPress'), max($paged, $page));
        ?></title>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php
        // Load theme assets
        pb_load_theme_assets();

        // Enqueue comment-reply script if singular
        if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
        ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_head(); ?>
    </head>

    <body id="mp-body" <?php body_class(); ?>>

        <div class="mp-body-wrapper">

            <?php // Header Image and textcolor
            $header_textcolor = get_header_textcolor();
            if ($header_textcolor && $header_textcolor != 'blank') $header_textcolor = 'style="color: #'.$header_textcolor.';"';

            $header_image = get_header_image();
            $header_image_style = '';
            if ($header_image) $header_image_style = 'style="background: url(\''.$header_image.'\') repeat"';
            ?>

            <header id="mp-header">

                <div class="mp-header-wrapper" <?php echo $header_image_style; ?>>

                    <?php if ($header_textcolor != 'blank') : ?>

                        <div id="site-title" class="mp-header-title">
                            <a <?php echo $header_textcolor; ?> href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo('name')); ?>">
                                <?php echo esc_attr( get_bloginfo('name')); ?>
                            </a>
                        </div>

                        <div id="site-description" class="mp-header-subtitle">
                            <a <?php echo $header_textcolor; ?> href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo('name')); ?>">
                                <?php echo $site_description; ?>
                            </a>
                        </div>

                    <?php endif; ?>

                </div>

            </header>

            <?php
            // Display the nav_menu
            $args = array (
                'container' => 'nav',
                'container_id' => 'mp-nav',
                'container_class' => 'menu',
                'menu_class' => 'menu',
                'fallback_cb' => 'wp_page_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s lerele">%3$s</ul>',
                'theme_location' => 'primary',
                'echo' => 0
            );
            // We obtain the menu and replace class sub-menu with class children,
            // to make menus act identically, wether is a custom menu or a fallback
            $menu = str_replace('class="sub-menu"', 'class="children"', wp_nav_menu($args));

            // Display the menu
            echo $menu;

            // Small pure js snippet for adding necessary classes
            // to wp_nav_menu elements, and make dropdowns work
            ?>
            <script type="text/javascript">
                //<![CDATA[
                var ele = document.getElementsByClassName('children');
                var i = 0;
                for (; i<ele.length; i++) {
                    ele[i].parentNode.setAttribute('class','has-dropdown');
                }
                //]]>
            </script>