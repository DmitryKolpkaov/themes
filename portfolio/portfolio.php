<?php
/*
Template Name: Портфолио - Портфолио
*/

get_header();

?>
    <div class="content home-page">

    <main class="main">
    <div class="container content content-portfolio">
        <h1 class="title">
            Мои работы
        </h1>

        <div class="row">

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => 6,
                'paged' => $paged
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $thumbnail_url = get_the_post_thumbnail_url();
                    $post_link = get_permalink();
                    ?>
                    <div class="col-lg-4 resume text-center">

                        <div class="first-block-portfolio">
                            <a href="<?php echo $post_link; ?>">
                                <img class="w-100" src="<?php echo CFS()->get('image'); ?>"
                                     alt="<?php the_title(); ?>">
                                <h2 class="title"><?php the_title(); ?></h2>
                            </a>
                            <div>
                                <?php
                                $work_types = get_the_terms(get_the_ID(), 'work_type');
                                if (!empty($work_types)) {
                                    echo '<hr><p class="work-types">';
                                    foreach ($work_types as $work_type) {
                                        echo 'Тип работы: '.'<span>' . $work_type->name . '</span> ';
                                    }
                                    echo '</p>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>
                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'total' => $query->max_num_pages,
                        'prev_text' => '',
                        'next_text' => ''
                    ));
                    ?>
                </div>
                <?php
                wp_reset_postdata(); // Сброс данных поста после цикла
            }
            ?>
        </div>

    </div>
<?php
get_footer();
?>