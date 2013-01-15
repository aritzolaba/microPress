    </div><!-- #mp-body-wrapper (initiated at header -->

    <footer id="mp-footer">

        <div class="mp-footer-wrapper">

            <div class="mp-footer-block">
                <div class="mp-footer-block-wrapper">

                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('mp-widgets-footer-block-1')) : ?>

                        <li class="widget widget-placeholder-block-1">
                            <h2 class="widgettitle">
                                Footer block 1
                            </h2>
                            <div class="mp-widget-content">
                                <div class="textwidget">
                                    This is footer block 1. You can add widgets here if you want.
                                </div>
                            </div>
                        </li>

                    <?php endif; ?>

                </div>
            </div>

            <div class="mp-footer-block">
                <div class="mp-footer-block-wrapper">

                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('mp-widgets-footer-block-2')) : ?>

                        <li class="widget widget-placeholder-block-2">
                            <h2 class="widgettitle">
                                Footer block 2
                            </h2>
                            <div class="textwidget">
                                This is footer block 2. You can add widgets here if you want.
                            </div>
                        </li>

                    <?php endif; ?>

                </div>
            </div>

            <div class="mp-footer-block">
                <div class="mp-footer-block-wrapper">

                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('mp-widgets-footer-block-3')) : ?>

                        <li class="widget widget-placeholder-block-3">
                            <h2 class="widgettitle">
                                Footer block 3
                            </h2>
                            <div class="textwidget">
                                This is footer block 3. You can add widgets here if you want.
                            </div>
                        </li>

                    <?php endif; ?>

                </div>
            </div>

        </div>

    </footer>

    <?php wp_footer(); ?>

    </body>
</html>