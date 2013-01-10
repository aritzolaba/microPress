<?php
/**
 * The single template file.
 */
get_header(); ?>

<section id="mp-section">

    <div class="mp-section-wrapper">

        <?php while (have_posts()) : the_post(); ?>

            <article class="mp-article">

                <header class="mp-article-header">
                    <div class="mp-article-title">
                        <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                    </div>

                    <div class="mp-article-subtitle">
                        <?php the_date(); ?>
                        <?php the_author(); ?>
                    </div>

                    <div class="mp-article-details">
                        <?php if (comments_open()) :
                            $ncom=get_comments_number(); if ($ncom==0) $ncom= __('no', 'microPress');
                            echo sprintf ( __ ('%s comments','microPress'), $ncom);
                        endif; ?>
                    </div>
                </header>

                <section class="mp-article-section">

                    <?php the_content(); ?>

                </section>

                <footer class="mp-article-footer">
                    <?php the_category(); ?>
                </footer>

            </article>

            <?php comments_template( '', true ); ?>

        <?php endwhile; ?>

    </div><!-- .mp-section-wrapper -->

</section><!-- #mp-section -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>