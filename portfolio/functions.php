<?php
function enqueue_scripts_and_styles() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts_and_styles');

function register_my_menu() {
    register_nav_menu('bottom',__( 'footer' ));
}
add_action( 'init', 'register_my_menu' );

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="item height-100"'; // Добавляем классы к ссылке

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

function my_wp_nav_menu_args($args = '') {
    $args['container_class'] = 'menu text-left height-100'; // Добавляем классы к контейнеру
    $args['walker'] = new My_Walker_Nav_Menu();
    return $args;
}
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');


// Register Custom Post Type
function create_portfolio_post_type() {
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => __('Портфолио'),
                'singular_name' => __('Портфолио')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        )
    );
}
add_action('init', 'create_portfolio_post_type');

function create_skills_post_type() {
    register_post_type('skills',
        array(
            'labels' => array(
                'name' => __('Навыки'),
                'singular_name' => __('Навыки')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        )
    );
}
add_action('init', 'create_skills_post_type');

// Register Custom Taxonomy
function create_work_type_taxonomy() {
    register_taxonomy(
        'work_type',
        'portfolio',
        array(
            'label' => __('Типы работ'),
            'rewrite' => array('slug' => 'work_type'),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'create_work_type_taxonomy');
