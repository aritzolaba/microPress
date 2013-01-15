<aside id="mp-aside">

    <div class="mp-aside-wrapper">

        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('mp-widgets-aside-right')) : ?>

            <div class="mp-add-widgets-container">
                <?php _e ('add widgets here', 'microPress'); ?>
            </div>

        <?php endif; ?>

    </div>

</aside>