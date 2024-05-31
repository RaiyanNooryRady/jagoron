<?php
/**
 * Header template
 * @package Jagoron
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('myclass mybodyclass bla blaa blaaa'); ?>>
    <?php
    //wp version lower than 5.2 the function doesn't exists.
    if (function_exists('wp_body_open')) {
        wp_body_open();
    } ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header" role="banner">
            <?php get_template_part('template-parts/header/nav'); ?>
        </header>
        <div id="contant" class="site-content">

       