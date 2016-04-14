<!doctype html>
<html class="no-js" lang="fi" dir="ltr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation-flex.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav>
            <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="large">
                <button class="menu-icon" type="button" data-toggle></button>
                <div class="title-bar-title">Site Title</div>
            </div>

            <div class="top-bar" id="example-menu">
                <div class="top-bar-left">
                    <?php get_sidebar(); ?>
                    <?php get_sidebar(2); ?>
                </div>
                <div class="top-bar-right">
                    <?php get_search_form(); ?>                    
                </div>
            </div>
        </nav>
    </header>