<!DOCTYPE html>
<html lang="es_mx" ontouchmove>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="author" content="MI Mapa QR.com" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="jquery.flexslider.js"></script>
    <?php wp_head(); ?>
</head>
<?php $post = get_post(get_the_ID()); ?>

<body onclick tabIndex=0>
        <div class="<?php echo is_home()?'home' : ''?> <?php echo $post->post_type; ?> <?php echo $post->post_name; ?> <?php echo is_admin_bar_showing() ? 'has-admin-bar' : '' ?>"
            id="<?php echo $post->ID; ?>">
            <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href='<?php echo get_site_url(); ?>'>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" class="img-fluid"
                                alt="PangeaSeed" title="PangeaSeed" loading="lazy">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'depth' => 2,
                            'container' => false,
                            'items_wrap' => '%3$s',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker()
                        ));
                    ?>
                            </ul>
                            
                        </div>
                    </div>
                </nav>
            </header>