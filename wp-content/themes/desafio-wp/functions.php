<?php

require_once get_template_directory(  ) . "/inc/class-wp-bootstrap-navwalker.php";
require_once get_template_directory(  ) . "/inc/funcs.php";

add_action('after_setup_theme','theme_chalenge');

function theme_chalenge(){

    add_theme_support ('title-tag'); //titulo
    add_theme_support( 'post-formats', array('aside', 'image')); //formato de post
    add_theme_support( 'custom-logo' ); //Logotipo
    add_theme_support('post-thumbnails'); // thumbnails


    register_nav_menus(
        array(
            'primary' => 'primary'
        ),
    );

}


add_action('wp_enqueue_scripts','theme_styles');
function theme_styles() {
    wp_enqueue_style( 
        'bootstrap', 
        get_template_directory_uri() . 
        '/assets/css/bootstrap.min.css' 
    );

    wp_enqueue_style( 
        'style', 
        get_template_directory_uri() . 
        '/style.css' 
    );
}

add_action('wp_enqueue_scripts','theme_scripts');
function theme_scripts() {
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script(
        'popper',
        get_template_directory_uri() . '/assets/js/popper.js',
        array( ),
        wp_get_theme()->get( 'Version' ),
        true
    );

    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/assets/js/bootstrap.js',
        array( ),
        wp_get_theme()->get( 'Version' ),
        true
    );

    wp_enqueue_script(
        'dragscrool',
        get_template_directory_uri() . '/assets/js/dragscroll.js',
        array( ),
        wp_get_theme()->get( 'Version' ),
        true
    );
}

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_6234c6cea752e',
        'title' => 'Video',
        'fields' => array(
            array(
                'key' => 'field_6234c84d00927',
                'label' => 'thumb',
                'name' => 'thumb',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_6234c6fc95ee3',
                'label' => 'url_video',
                'name' => 'url_video',
                'type' => 'text',
                'instructions' => 'Copie e cole a URL do Video do Youtube',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'https://www.youtube.com/watch?v=_2c8YZwzaMk',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_6234c6e195ee2',
                'label' => 'time_video',
                'name' => 'time_video',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '1m',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_6234c7d300926',
                'label' => 'text',
                'name' => 'text',
                'type' => 'textarea',
                'instructions' => 'Descrição e Sinopse',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    endif;			