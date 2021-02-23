<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php get_site_icon_url(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<header class="header">
</header>
<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>