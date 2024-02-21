<?php
/*
Template Name: Главная страница - Портфолио
*/

get_header();

?>

<div class="content home-page">

    <main class="main">
        <div class="container content">
            <div class="row">
                <div class="col-lg-8 left order-sm-2 order-lg-1">
                    <p class="date">
                        <?php echo CFS()->get('date_home'); ?>
                    </p>
                    <p class="welcome">
                        <?php echo CFS()->get('welcome_home'); ?>
                    </p>
                    <h1 class="h1"><span class="span"><?php echo CFS()->get('span_home'); ?></span>
                        <?php echo CFS()->get('title_home'); ?>
                    </h1>
                    <p class="i"><?php echo CFS()->get('sub_title_home'); ?> <br>
                        <?php echo CFS()->get('sub_title_2_home'); ?>
                    </p>
                    <a href="<?php echo get_permalink( get_page_by_path( 'About' ) ); ?>">
                        <button class="button-none-border button button-text" type="submit"><?php echo CFS()->get('main_button_home'); ?></button>
                    </a>
                </div>
                <div class="col-lg-4 right order-sm-1 order-lg-2">
                    <?php //TODO Сделать фото динамическим, сейчас оно весит больше чем 2мб, wordpress не дает загрузить ?>
                    <img class="photo" src="<?php echo get_template_directory_uri(); ?>/img/index_photo.jpg" alt="">
                </div>
            </div>
        </div>
        <?php
            get_footer();
        ?>
