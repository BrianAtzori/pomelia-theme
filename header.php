<!DOCTYPE HTML>

<html>

<head>
    <title>
        <?php echo get_bloginfo('name') ?>
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <?php wp_head() ?>
</head>

<body class="homepage is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">


            <!-- Inner -->
            <div class="inner">
                <header>
                    <h1><a href="index.html" id="logo"><?php echo get_bloginfo('name') ?></a></h1>
                    <hr />
                    <p><?php echo get_bloginfo('description') ?></p>
                </header>
                <footer>
                    <a href="#banner" class="button circled scrolly">Scopri</a>
                </footer>
            </div>