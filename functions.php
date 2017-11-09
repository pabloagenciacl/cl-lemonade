<?php
function scripts_do_template() {
    // Bootstrap core JavaScript
    // Se preferir utilizar a própria cópia do Bootstrap, descomente a linha a seguir e comente a próxima
    //wp_register_script('bootstrap', get_template_directory_uri().'/lib/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'));
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'));

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts', 'scripts_do_template');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );



if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'before_widget' => '<div class="row"><div class="col-md-12">',
        'after_widget' => '</div></div>',
    ));
}

function get_color_category() {
    // load all 'category' terms for the post
    $terms = get_the_terms( get_the_ID(), 'category');

    // we will use the first term to load ACF data from
    $custom_field = '#FFFFFF';

    if( !empty($terms) ) {
        $term = array_pop($terms);
        $custom_field = get_field('cor_de_fundo', $term );
    }

    return $custom_field;
}

    
    function logonav()
    {
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }else{
            get_bloginfo($show = 'name');
        }
    }

    function get_categoria()
    {
        $categories = get_the_category();

        if ( ! empty( $categories ) ) {
            echo esc_html( $categories[0]->name );   
        }
    }

    function themename_custom_logo_setup() {
    $defaults = array(
        'default-image'          => '',
        'width'                  => 150,
        'height'                 => 30,
        'flex-height'            => false,
        'flex-width'             => false,
        'uploads'                => true,
        'random-default'         => false,
        'header-text'            => true,
    );
    add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


    
?>