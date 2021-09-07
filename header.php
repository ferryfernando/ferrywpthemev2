<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Theme v2" />
    <meta name="author" content="Ferry Fernando" />

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark-ffe fixed-top" id="sideNav">
            <a href="index.html" class="navbar-brand">Ferry Fernando</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="tentang.html">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                </ul>
            </div>
        </nav>
    </header>