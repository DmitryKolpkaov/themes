<?php
/*
Template Name: Резюме - Портфолио
*/

get_header();

?>
<div class="content home-page">

    <main class="main">
        <div class="container content content-resume">
            <h1 class="title">Навыки</h1>
            <!--            <div class="button-block-resume">-->
            <!--                <button class="button-none-border button-resume button-resume-text" type="submit">Образование</button>-->
            <!--                <button class="button-none-border button-resume button-resume-text" type="submit">Опыт</button>-->
            <!--            </div>-->
            <div class="row">

                <?php
                $args = array(
                    'post_type' => 'skills',
                    'posts_per_page' => -1, // Получить все посты
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $thumbnail_url = get_the_post_thumbnail_url();
                        $post_link = get_permalink();
                        ?>
                        <div class="col-lg-4 resume text-center">

                            <div class="first-block-resume">
                                <img class="img-resume" src="<?php echo CFS()->get('image'); ?>" alt="">
                                <h2 class="title-resume"><?php the_title(); ?></h2>
                                <div class="progress">
                                    <div class="progress-resume" role="progressbar" aria-valuenow="<?php echo CFS()->get('progress'); ?>" aria-valuemin="0"
                                         aria-valuemax="100" style="width: <?php echo CFS()->get('progress'); ?>%;">
                                    </div>
                                    <span class="show"><?php echo CFS()->get('progress'); ?>%</span>
                                </div>
                                <p class="article-resume"><?php echo CFS()->get('description'); ?>
                                </p>
                            </div>
                        </div>

                        <?php
                    }
                    wp_reset_postdata(); // Сброс данных поста после цикла
                }
                ?>
            </div>
        </div>
        <?php
        get_footer();
        ?>
