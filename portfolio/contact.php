<?php
/*
Template Name: Контакты - Портфолио
*/

get_header();

?>
<div class="content home-page">

    <main class="main">

        <div class="container content content-contact">

            <h1 class="title-contact"><?php echo CFS()->get('title_contact'); ?></h1>
            <p class="article-contact">
                <?php echo CFS()->get('article_contact'); ?>
            </p>

            <div class="row first-block-contact-form">

                <!--            1block-->
                <div class="col-lg-4 contact text-center">

                    <div class="first-block-contact">
                        <h1 class="title-contact-left-block"><i class="icone-contact-page bi bi-telephone-fill"></i>
                            Телефон:
                            <a href="tel:<?php echo CFS()->get('phone_contact_link'); ?>" class="phone item-contact">
                                <?php echo CFS()->get('phone_contact'); ?>
                            </a>
                        </h1>
                        <p class="article-contacts">
                            <?php echo CFS()->get('description_contact_phone'); ?>
                        </p>
                    </div>
                </div>


                <!--            2block-->
                <div class="col-lg-4 contact text-center">
                    <div class="first-block-contact-second-part">
                        <h1 class="title-contact-left-block"><i class="icone-contact-page bi bi-envelope-fill"></i>
                            Почта:
                            <a href="mailto:<?php echo CFS()->get('email_contact_link'); ?>" class="phone item-contact">
                                <?php echo CFS()->get('email_contact'); ?>
                            </a>
                        </h1>
                        <p class="article-contacts">
                            <?php echo CFS()->get('description_contact_email'); ?>
                        </p>
                    </div>
                </div>

                <!--            3block-->
                <div class="col-lg-4 contact text-center">
                    <div class="first-block-contact-third-part">

                        <h1 class="title-contact-left-block"><i class="icone-contact-page bi bi-geo-alt-fill"></i>
                            Локация: <?php echo CFS()->get('geo_contact'); ?>
                        </h1>
                        <p class="article-contacts">
                            <?php echo CFS()->get('description_contact_geo'); ?>
                        </p>
                    </div>
                </div>
            </div>

<!--            <div class="row second-block-contact-form">-->
<!--                <div class="col-lg-4">-->
<!--                    <div class="second-blocks-contact">-->
<!--                        <div class="input-blog">-->
<!--                            <input class="input input-text" type="search" placeholder="Ваше имя">-->
<!--                            <input class="input input-text" type="search" placeholder="Ваша почта">-->
<!--                            <input class="input input-text" type="search" placeholder="Номер телефона">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-8">-->
<!--                    <div class="second-blocks-contact">-->
<!--                        <div class="text-area-blog">-->
<!--                            <textarea class="text-area" placeholder="Введите сообщение" name="" id="" cols="30" rows="3"></textarea>-->
<!--                            <button class="button-none-border button-contact button-contact-text">Отправить</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

        </div>
        <?php
        get_footer();
        ?>
