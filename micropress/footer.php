<?php
/**
 * The template for the footer.
 */
?>
    <footer id="mp-footer">

        <div class="mp-footer-wrapper">

            <div class="mp-footer-block">
                <div class="mp-footer-block-wrapper">

                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('mp-widgets-footer-block-1')) : ?>

                        <div class="mp-widget-footer">
                            <div class="mp-widget-title">
                                Footer block 1
                            </div>
                            <div class="mp-widget-content">
                                <div class="textwidget">
                                    This is footer block 1. You can add widgets here if you want.
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>
            </div>

            <div class="mp-footer-block">
                <div class="mp-footer-block-wrapper">

                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('mp-widgets-footer-block-2')) : ?>

                        <div class="mp-widget-footer">
                            <div class="mp-widget-title">
                                Footer block 2
                            </div>
                            <div class="mp-widget-content">
                                <div class="textwidget">
                                    This is footer block 2. You can add widgets here if you want.
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>
            </div>

            <div class="mp-footer-block">
                <div class="mp-footer-block-wrapper">

                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('mp-widgets-footer-block-3')) : ?>

                        <div class="mp-widget-footer">
                            <div class="mp-widget-title">
                                Footer block 3
                            </div>
                            <div class="mp-widget-content">
                                <div class="textwidget">
                                    This is footer block 3. You can add widgets here if you want.
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>
            </div>

        </div>

    </footer>

    </div><!-- #mp-wrapper (initiated at header -->

    </body>
</html>