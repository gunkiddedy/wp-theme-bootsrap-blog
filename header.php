<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?></title>
    <?php wp_head(  ) ?>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <a class="navbar-brand" href="#"> <i class="icon"></i> </a>
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url( ) ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url( 'about' ) ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url( 'profile' ) ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url( 'contact' ) ?>">Contact</a>
                    </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form> -->
                <?php
                    echo get_search_form();
                ?>
            </div>
        </nav>

        <!-- custom header by post type -->
        <?php if( is_home() && is_front_page(  ) ) : ?>

            <div class="col" style="margin-top:1rem">
                <?php require_once('inc/custom-header.php') ?>
                <hr class="my-4">
            </div>

        <?php elseif( is_single( ) ) : ?>

            <div class="col" style="margin-top:1rem">
                <h3><?php the_title( ) ?></h3>
                <hr class="my-4">
            </div>

        <?php elseif( is_page( ) ) : ?>

            <div class="col" style="margin-top:1rem">
                <h3> <span class="badge badge-secondary"><?php the_title( ) ?> page</span></h3>
                <hr class="my-4">
            </div>

        <?php elseif( is_archive(  ) ) : ?>

            <div class="col" style="margin-top:1rem">
                <h3> <span class="badge badge-secondary"><?php the_archive_title( ) ?></span></h3>
                <hr class="my-4">
            </div>

        <?php endif; ?>