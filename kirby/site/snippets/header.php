<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,700italic,600italic,400italic' rel='stylesheet' type='text/css'>

    <?php echo css('assets/css/main.css') ?>

    <?php echo css('assets/css/grid.css') ?>


</head>

<body>

    <header>
        <nav id="nav-header"> <!-- banner -->
            <div id="centered-nav-container">
                <div id="nav-bar-main">
                    <div id="nav-bar-left">
                        <div id="nav-bar-logo">
                            <a class="logo" href="<?php echo url() ?>">
                                <img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>" width="45" height="45" />
                            </a>

                        </div>
                        <div id="site-name"><a href="index.html">Kevin Choy</a></div>
                    </div> <!-- ./nav-bar-left -->
                    <div id="nav-bar-right">
                        <ul class="menu-items-list">
                            <li><a class="button-nav button-header-nav" href="about.html">About</a></li>
                            <li><a class="button-nav button-header-nav" href="index.html#featured-work">Work</a></li>
                            <li><a class="button-nav button-header-nav" href="contact.html">Contact</a></li>
                        </ul>
                    </div> <!-- ./nav-bar-right -->
                </div> <!-- ./nav-bar-main -->
            </div> <!-- ./centered-nav-container -->
        </nav>
    </header>