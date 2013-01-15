<?php get_header(); ?>

<section id="mp-section">

    <div class="mp-section-wrapper">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('mp-article loop'); ?>>

                    <div class="mp-article-wrapper">

                        <header class="mp-article-header">
                            <div class="mp-article-date">
                                <?php the_date('M, d - Y'); ?>
                            </div>

                            <div class="mp-article-title">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                            </div>

                            <div class="mp-article-subtitle">
                                <?php if (comments_open()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="mp-article-comment-number">
                                    <?php
                                    $ncom=get_comments_number(); if ($ncom==0) $ncom= __('no comments', 'microPress'); elseif ($ncom==1) $ncom= __('1 comment', 'microPress'); else $ncom= sprintf (__('%s comments','microPress'), $ncom);
                                    echo $ncom;
                                    ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </header>

                        <section class="mp-article-section">
                            <?php the_excerpt(); ?>
                        </section>

                        <footer class="mp-article-footer">
                            <div class="mp-article-footer-author">
                                <span class="muted"><?php _e('Author', 'microPress'); ?></span> <?php the_author(); ?>
                            </div>
                            <?php the_category(); ?>
                        </footer>

                    </div>

                </article>

            <?php endwhile; ?>

            <?php /* Display navigation to next/previous pages when applicable */ ?>
            <?php if ( $wp_query->max_num_pages > 1 ) : ?>
                    <div id="mp-article-nav" class="mp-article-nav">
                        <div class="nav-previous"><?php next_posts_link( __( '&larr; Older posts', 'microPress' ) ); ?></div>
                        <div class="nav-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'microPress' ) ); ?></div>
                    </div><!-- #nav-above -->
            <?php endif; ?>

        <?php else : ?>

            <article class="mp-article">

                <div class="mp-article-wrapper">

                    <header class="mp-article-header">
                        <div class="mp-article-title">
                            <?php _e('Nothing found', 'microPress'); ?>
                        </div>
                    </header>

                    <section class="mp-article-section">
                        <?php _e('Ops!, there is nothing here. Maybe you got a wrong link?', 'microPress'); ?>
                    </section>

                </div>

            </article>

        <?php endif; ?>

    </div><!-- .mp-section-wrapper -->

</section><!-- #mp-section -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>