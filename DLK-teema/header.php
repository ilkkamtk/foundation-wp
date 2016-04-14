<!doctype html>
<html class="no-js" lang="fi" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/foundation-flex.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.css">
</head>

<body>
    <header class="row">
        <div class="column">
            <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
                <button class="menu-icon" type="button" data-toggle></button>
                <div class="title-bar-title">Site Title</div>
            </div>

            <div class="top-bar" id="example-menu">
                <div class="top-bar-left">
                    <?php get_sidebar(); ?>
                    <ul class="dropdown menu vertical hide-for-medium" data-accordion-menu>
                        <li>
                            <a href="#">One</a>
                            <ul class="menu vertical nested">
                                <li><a href="#">One</a></li>
                                <li><a href="#">Two</a></li>
                                <li><a href="#">Three</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Two</a></li>
                        <li><a href="#">Three</a></li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="menu">
                        <li>
                            <input type="search" placeholder="Search">
                        </li>
                        <li>
                            <button type="button" class="button">Search</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>