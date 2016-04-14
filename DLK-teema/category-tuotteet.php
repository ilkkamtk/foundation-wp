<?php get_header(); ?>
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
                        <h4 class="subheader">Kategoriat</h4>
                    </div>
                </div>
                <div class="row small-up-2 medium-up-3">
                    <?php
                        $id = get_queried_object()->term_id;
                        $tyyppi = get_queried_object()->taxonomy;
                        $alikategoriat = get_term_children( $id, $tyyppi);
                        foreach( $alikategoriat as $alikategoria):
                            $termi = get_term_by('id', $alikategoria, $tyyppi);
                    ?>
                        <article class="column">
                            <a href="<?php echo get_term_link($alikategoria, $tyyppi); ?>">
                                <?php
                                    $artikkelit = get_posts( array('category' => $termi->term_id, 'numberposts' => 1, 'orderby' => 'rand' ));
                                    // print_r($artikkelit);
                                    echo get_the_post_thumbnail( $artikkelit[0]->ID, 'thumbnail');
                                 ?>
                                <h4><?php echo $termi->name; ?></h4>
                                <p><?php echo substr(category_description( $termi->term_id ), 0, 100); ?>...</p>		
                            </a>
                        </article>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>