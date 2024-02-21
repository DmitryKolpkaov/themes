<?php
/*
Template Name: Single Portfolio
*/

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        $thumbnail_url = get_the_post_thumbnail_url();
        ?>
        <div class="content home-page">
            <main class="main">
                <div class="container content content-portfolio">
                    <h1 class="title text-center"><?php the_title(); ?></h1>
                    <div class="row justify-content-center">
                        <div class="resume text-center">
                            <div class="portfolio-description">
                                <img class="w-50 br-border-radius" src="<?php echo CFS()->get('image'); ?>"
                                <br/>
                                <br/>
                                <br/>
                                <p>
                                    <?php echo CFS()->get('description'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php
    }
}

get_footer();
?>