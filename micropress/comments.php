<section id="mp-comments">

    <?php if ( post_password_required() ) : ?>
        <p class="nopassword">
            <?php _e( 'This post is password protected. Enter the password to view any comments.', 'microPress' ); ?>
        </p>
        <?php
        /* Stop the rest of comments.php from being processed,
         * but don't kill the script entirely -- we still have
         * to fully load the template.
         */
        return;
    endif;
    ?>

    <?php
    if (have_comments() && comments_open()) :
        $ncomments = get_comments_number();
        echo '<h2><small>';
        if ($ncomments == 1)
            echo sprintf ( __('There is %d comment','microPress'), $ncomments);
        elseif ($ncomments > 1)
            echo sprintf ( __('There are %d comments','microPress'), $ncomments);
        else
            echo __('There are no comments','microPress');
        echo '</small></h2>';

        if ($ncomments > get_option('comments_per_page') && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
            <nav id="comment-nav-above">
                <?php paginate_comments_links(); ?>
            </nav>
        <?php endif; ?>

        <div class="mp-comments-list commentlist">
            <?php
            // Comment List
            $args = array ('paged' => true);
            wp_list_comments();
            ?>
        </div>

        <?php if ($ncomments > get_option('comments_per_page') && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
            <nav id="comment-nav-above">
                <?php paginate_comments_links(); ?>
            </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php if (comments_open()) : ?>

        <?php
        // Comment Form
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $fields =  array(
            'author' => '<p class="comment-form-author">' . '<label for="author">' . ( $req ? '<span class="required">*</span> ' : '' ) . __( 'Name', 'microPress' ) . '</label> ',
                        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
            'email'  => '<p class="comment-form-email"><label for="email">' . ( $req ? '<span class="required">*</span> ' : '' ) . __( 'Email', 'microPress' ) . '</label> ',
                        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>'
        );
        $args = array (
            'id_submit' => 'mp-comment-submit',
            'title_reply' => __('Leave a Reply','microPress'),
            'fields' => apply_filters( 'comment_form_default_fields', $fields )
        );
        comment_form($args);
        ?>

    <?php endif; ?>

</section>