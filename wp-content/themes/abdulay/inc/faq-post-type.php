<?php
/**
* Register a post type, with REST API support
*
* Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
* @package abdulay
*/
add_action( 'init', 'abdulay_custom_post_faq' );
function abdulay_custom_post_faq()
{
    $labels = array(
    'name'               => _x( 'FAQ', 'post type general name' ),
    'singular_name'      => _x( 'FAQ', 'post type singular name' ),
    'menu_name'          => _x( 'FAQ', 'admin menu' ),
    'name_admin_bar'     => _x( 'FAQ', 'add new on admin bar' ),
    'add_new'            => _x( 'Adicionar FAQ', 'item' ),
    'add_new_item'       => __( 'Adicionar FAQ' ),
    'new_item'           => __( 'Novo' ),
    'update_item'        => __( 'Salvar' ),
    'edit_item'          => __( 'Editar FAQ' ),
    'view_item'          => __( 'Ver FAQ' ),
    'all_items'          => __( 'Todos FAQs' ),
    'search_items'       => __( 'Procurar FAQ' ),
    'parent_item_colon'  => __( 'Parent Itens:' ),
    'not_found'          => __( 'FAQ não encontrado.' ),
    'not_found_in_trash' => __( 'FAQ não encontrado.' )
    );

    $args = array(
    'labels'                => $labels,
    'public'                => false,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'show_in_rest'          => true,
    'show_in_menu'          => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'faq' ),
    'capability_type'       => 'post',
    'has_archive'           => true,
    'menu_icon'             => 'dashicons-editor-ul',
    'hierarchical'          => false,
    'menu_position'         => 5,
    'rest_base'             => 'faq',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'              => array( 'title')
    );

    register_post_type( 'faq', $args );
}

/*
replacing the default "Enter title here" placeholder text in the title input box
with something more descriptive can be helpful for custom post types
place this code in your theme's functions.php or relevant file
source: http://flashingcursor.com/wordpress/change-the-enter-title-here-text-in-wordpress-963
*/
function abdulay_change_default_title($title)
{
    $screen = get_current_screen();
    if ('faq' == $screen->post_type) {
        $title = 'Digite a pergunta aqui';
    }

    return $title;
}
add_filter( 'enter_title_here', 'abdulay_change_default_title' );

