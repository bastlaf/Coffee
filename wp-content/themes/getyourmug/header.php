<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>    
    <?php wp_head(); ?>
</head>

<?php wp_body_open(); ?>
<body <?php body_class(); ?>>







    <header class="header" >
        <div class="navigation">
            <?php
            wp_nav_menu([
                "menu" => "navigation",
                "container" => "",
                "items_wrap" => '<ul class="sub-nav">%3$s</ul>',
                "theme_location" => "primary"
            ])
            ?>
        </div>


        <button id="btnMenuResp" class="btnMenuResp">
            <span id="span1" class="span"></span>
            <span id="span2" class="span"></span>
            <span id="span3" class="span"></span>
        </button>

        <div id="menu" class="menu">
        <?php
            wp_nav_menu([
                "menu" => "navigation",
                "container" => "",
                "items_wrap" => '<ul class="sub-nav">%3$s</ul>',
                "theme_location" => "primary"
            ])
            ?>
        </div>


        <video autoplay muted loop>
            <source src="<?= get_template_directory_uri() . '/img/videoheader.mp4'?>" type="video/mp4">
        </video>
        <div class="boxTitleHeader">
            <h1><?php the_field('headertitle', 'option'); ?></h1>
            <img src="<?php the_field('headerlogo', 'option'); ?>">
            <h2><?php the_field('headersubtitle', 'option'); ?></h2>
        </div>
        <?php echo file_get_contents(get_template_directory_uri() . "/img/dechirure.svg") ?>
    </header>

