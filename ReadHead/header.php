<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>RedHat</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<div class="wrap">
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="RedHat"></div>
                <div class="header__desc"><?php echo CFS()->get('description'); ?></div><a class="header__phone-mobile" href="tel:<?php echo CFS()->get('number_link'); ?>"></a>
                <div class="header__burger"></div>
                <div class="header__sidebar">
                    <div class="header__sidebar-close"></div><a class="header__phone" href="tel:<?php echo CFS()->get('number_link'); ?>"><span class="header__phone-icon"></span><span class="header__phone-number"><?php echo CFS()->get('number'); ?></span></a><a class="btn btn_light header__btn" href="#"><span><?php echo CFS()->get('button_text'); ?></span></a>
                </div>
            </div>
        </div>
    </header>