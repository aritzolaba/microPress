<?php get_header(); ?>

<section id="mp-section">

    <div class="mp-section-wrapper">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('mp-article'); ?>>

                    <div class="mp-article-wrapper">

                        <header class="mp-article-header">
                            <div class="mp-article-date">
                                <?php the_date('M, d - Y'); ?>
                            </div>

                            <div class="mp-article-title">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                            </div>

                            <?php if (comments_open()) : ?>
                                <div class="mp-article-subtitle">
                                    <span class="mp-article-comment-number">
                                    <?php
                                    $ncom=get_comments_number(); if ($ncom==0) $ncom= __('no comments', 'microPress'); elseif ($ncom==1) $ncom= __('1 comment', 'microPress'); else $ncom= sprintf (__('%s comments','microPress'), $ncom);
                                    echo $ncom;
                                    ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                        </header>

                        <section class="mp-article-section">
                            <?php
                            // The content
                            the_content();

                            // Linked pages
                            wp_link_pages(array(
                            'next_or_number'    => 'number',
                            'nextpagelink'      => __('Next page', 'microPress'),
                            'previouspagelink'  => __('Previous page', 'microPress'),
                            'pagelink'          => '%',
                            'link_before'       => '<span class="mp-btn">',
                                'link_after'        => '</span>',
                            'before'            => '<div style="clear: both;"></div><br />'. __('Pages:','microPress') .' <div class="mp-article-pages">',
                                'after'             => '</div>'
                            ));
                            ?>
                        </section>

                        <footer class="mp-article-footer">
                            <div class="mp-article-footer-author">
                                <span class="muted"><?php _e('Author', 'microPress'); ?></span> <?php the_author(); ?>
                            </div>

                            <?php the_category(); ?>

                            <?php if (get_the_tags()) : ?>
                                <div class="mp-article-footer-tags">
                                    <?php the_tags(); ?>
                                </div>
                            <?php endif; ?>

                        </footer>

                    </div>

                </article>

                <?php comments_template( '', true ); ?>

            <?php endwhile; ?>

        <?php else : ?>

            <article class="mp-article">

                <header class="mp-article-header">
                    <div class="mp-article-title">
                        <?php _e('Nothing found', 'microPress'); ?>
                    </div>
                </header>

                <section class="mp-article-section">
                    <?php _e('Ops!, there is nothing here. Maybe you got a wrong link?', 'microPress'); ?>
                </section>

            </article>

        <?php endif; ?>

    </div><!-- .mp-section-wrapper -->

</section><!-- #mp-section -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>