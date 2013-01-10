<?php
/**
 * The index template file.
 */
get_header(); ?>

<section id="mp-section">

    <div class="mp-section-wrapper">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article class="mp-article">

                    <header class="mp-article-header">
                        <div class="mp-article-title">
                            <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                        </div>

                        <div class="mp-article-subtitle">
                            <?php the_date('M, d - Y'); ?>
                        </div>

                        <div class="mp-article-details">
                            <?php if (comments_open()) :
                                $ncom=get_comments_number(); if ($ncom==0) $ncom= __('no comments', 'microPress'); elseif ($ncom==1) $ncom= __('1 comment', 'microPress'); else $ncom= sprintf (__('%s comments','microPress'), $ncom);
                                echo $ncom;
                            endif; ?>
                        </div>
                    </header>

                    <section class="mp-article-section">

                        <?php the_excerpt(); ?>

                    </section>

                    <footer class="mp-article-footer">
                        <?php the_author(); ?>
                        <?php the_category(); ?>
                    </footer>

                </article>

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