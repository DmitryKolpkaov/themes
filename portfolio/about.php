<?php
/*
Template Name: Обо мне - Портфолио
*/

get_header();

?>
<div class="content home-page">
    <main class="main">
        <div class="container content content-about">
            <div class="row">
                <!--                <div class="under-about">-->
                <div class="col-lg-6 left-about">
                    <div class="width-about-left">
                        <?php //TODO Сделать фото динамическим, сейчас оно весит больше чем 2мб, wordpress не дает загрузить ?>
                        <img class="my" src="<?php echo get_template_directory_uri(); ?>/img/about_photo.jpg" alt="">
                    </div>
                </div>
                <!--                </div>-->


                <div class="col-lg-6 right-about">
                    <p class="i'm"><?php echo CFS()->get('im_about'); ?>
                    </p>
                    <h1 class="title"><?php echo CFS()->get('title_about'); ?>
                    </h1>
                    <br>
                    <p class="article">
                        <?php echo CFS()->get('article_about'); ?>
                    </p>

                    <div class="menu-about">
                        <div class="row menu-space-about">
                            <div class="col-sm-6 menu-left-about">
                                <p class="maket"><i class="bi bi-person-fill"></i></p> Имя:<?php echo CFS()->get('person_about'); ?>
                                <br>
                                <p class="maket"><i class="bi bi-geo-alt-fill"></i></p> Локация:<?php echo CFS()->get('geo_about'); ?>
                                <br>
                                <p class="maket"><i class="bi bi-envelope-fill"></i>
                                </p> Почта:
                                <a class="a-color" href="mailto:<?php echo CFS()->get('email_about'); ?>">
                                    <?php echo CFS()->get('email_about'); ?>
                                </a>
                            </div>

                            <div class="col-sm-6 menu-right-about">
                                <p class="maket"><i class="bi bi-calendar"></i></p> Год рождения:<?php echo CFS()->get('birthday_about'); ?>
                                <br>
                                <p class="maket"><i class="bi bi-person-badge-fill"></i></p> <?php echo CFS()->get('education_about'); ?>
                                <br>
                                <p class="maket"><i class="bi bi-telephone-fill"></i>
                                </p> Телефон:<a class="a-color" href="tel:<?php echo CFS()->get('phone_about_link'); ?>">
                                    <?php echo CFS()->get('phone_about'); ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <br>

                    <!--                    <button type="submit" class="button-none-border button-about button-text-about">СКАЧАТЬ РЕЗЮМЕ-->
                    <!--                    </button>-->
                </div>
            </div>
        </div>
        <?php
            get_footer();
        ?>
