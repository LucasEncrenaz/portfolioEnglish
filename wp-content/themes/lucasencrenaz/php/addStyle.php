<?php

wp_enqueue_script(
    'menu',
    get_template_directory_uri() . '/assets/js/menu.js',
    array('jquery'),
    1.1,
    true
);

wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'style',
    get_template_directory_uri().'/style.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'header',
    get_template_directory_uri().'/assets/css/header.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'front-page',
    get_template_directory_uri().'/assets/css/front-page.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'menu',
    get_template_directory_uri().'/assets/css/menu.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'blockBanner',
    get_template_directory_uri().'/assets/css/blockBanner.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'blockSkills',
    get_template_directory_uri().'/assets/css/blockSkills.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'blockExpPro',
    get_template_directory_uri().'/assets/css/blockExpPro.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'blockEducation',
    get_template_directory_uri().'/assets/css/blockEducation.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'blockProjects',
    get_template_directory_uri().'/assets/css/blockProjects.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'blockAboutMe',
    get_template_directory_uri().'/assets/css/blockAboutMe.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'blockContactMe',
    get_template_directory_uri().'/assets/css/blockContactMe.css',
    array(),
    '1.0',
);

wp_enqueue_style(
    'blockReferences',
    get_template_directory_uri().'/assets/css/blockReferences.css',
    array(),
    '1.0',
);