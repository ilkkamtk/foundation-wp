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
                    <h2><?php echo get_queried_object()->name; ?></h2>
                    <p>
                        <?php echo get_queried_object()->description; ?>
                    </p>
                </div>
            </div>
            <div class="callout">
                <div class="row">
                    <div class="column">
                        <h4>Kategorian tuotteet</h4>
                    </div>
                </div>
                <div class="row small-up-2 medium-up-3">
                    <?php
                        $id = get_queried_object()->term_id;
                        $artikkelit = get_posts( array( 'category' => $id, 'numberposts' => 999 ));

                        foreach( $artikkelit as $artikkeli):
                    ?>
                        <article class="column">
                            <a href="<?php echo get_permalink( $artikkeli->ID ); ?>">
                                <?php echo get_the_post_thumbnail( $artikkeli->ID, 'thumbnail'); ?>
                                <h4><?php echo $artikkeli->post_title; ?></h4>
                                <p><?php echo substr($artikkeli->post_excerpt, 0, 100); ?>...</p>		
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>