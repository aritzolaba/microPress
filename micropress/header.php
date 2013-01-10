<?php
/**
 * The Header for our theme.
 */
?>
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
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php $site_description=get_bloginfo('description', 'display'); echo $site_description; ?>">
        <meta name="author" content="<?php echo get_bloginfo('name'); ?>">
        <title><?php
        global $page, $paged;

        // Add wp_title ()
        wp_title( '|', true, 'right' );

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
        ?>

        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_head(); ?>
    </head>

    <body id="mp-body" <?php body_class(); ?>>

        <div class="mp-body-wrapper">

            <header id="mp-header">

                <div class="mp-header-wrapper">

                    <div class="mp-header-title">
                        <a href="<?php echo get_site_url(); ?>" title="<?php echo get_bloginfo('name'); ?>">
                            <?php echo get_bloginfo('name'); ?>
                        </a>
                    </div>

                    <div class="mp-header-subtitle">
                        <?php echo $site_description; ?>
                    </div>

                </div>

            </header>