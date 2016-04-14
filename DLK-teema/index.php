<?php get_header(); ?>
    <div class="row">
        <div class="column">
            <img src="<?php header_image(); ?>" alt="banneri">
        </div>
    </div>
    <main class="row">
        <div class="column">
            <div class="row">
                <div class="column">
                    <?php if (have_posts()): ?>
                        <?php while(have_posts()): ?>
                            <?php the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="callout">
                <div class="row">
                    <div class="column">
                        <h4>Uutuudet</h4>
                    </div>
                </div>
                <div class="row small-up-2 medium-up-3">
                <?php
                    $uudet_artikkelit = wp_get_recent_posts(array('numberposts' => '6'));
                    // print_r($uudet_artikkelit);
                    foreach( $uudet_artikkelit as $artikkeli ):
                ?>
                    <article class="column">
                        <a href="<?php echo get_permalink( $artikkeli['ID'] ); ?>">
                            <?php echo get_the_post_thumbnail( $artikkeli['ID'], 'thumbnail'); ?>
                            <h4><?php echo $artikkeli['post_title']; ?></h4>
                            <p><?php echo substr($artikkeli['post_excerpt'], 0, 100); ?>...</p>		
                        </a>
                    </article>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>