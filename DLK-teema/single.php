<?php get_header(); ?>
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
                        <h4>Katsotuimmat</h4>
                    </div>
                </div>
                <div class="row small-up-2 medium-up-3">
                <?php wpp_get_mostpopular('range="all"&post_type="post"&wpp_start=" "&wpp_end=" "&thumbnail_width=400&thumbnail_height=280&excerpt_length=100&limit=6&post_html="<article class=\'column\'><a href=\'{url}\'>{thumb_img}<h4>{text_title}</h4><p>{summary}</p></a></article>"'); ?>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>