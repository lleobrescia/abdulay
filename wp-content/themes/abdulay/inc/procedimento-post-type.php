<?php
/**
* Register a post type, with REST API support
*
* Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
* @package abdulay
*/
add_action( 'init', 'abdulay_custom_post_procedimento' );
function abdulay_custom_post_procedimento()
{
    $labels = array(
    'name'               => _x( 'Procedimento', 'post type general name' ),
    'singular_name'      => _x( 'Procedimento', 'post type singular name' ),
    'menu_name'          => _x( 'Procedimentos', 'admin menu' ),
    'name_admin_bar'     => _x( 'Procedimento', 'add new on admin bar' ),
    'add_new'            => _x( 'Adicionar Procedimento', 'item' ),
    'add_new_item'       => __( 'Adicionar Procedimento' ),
    'new_item'           => __( 'Novo' ),
    'update_item'        => __( 'Salvar' ),
    'edit_item'          => __( 'Editar Procedimento' ),
    'view_item'          => __( 'Ver Procedimento' ),
    'all_items'          => __( 'Todos Procedimentos' ),
    'search_items'       => __( 'Procurar Procedimento' ),
    'parent_item_colon'  => __( 'Parent Itens:' ),
    'not_found'          => __( 'Procedimento não encontrado.' ),
    'not_found_in_trash' => __( 'Procedimento não encontrado.' )
    );

    $args = array(
    'labels'                => $labels,
    'public'                => false,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'show_in_rest'          => true,
    'show_in_menu'          => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'procedimento' ),
    'capability_type'       => 'post',
    'has_archive'           => true,
    'menu_icon'             => 'dashicons-list-view',
    'hierarchical'          => false,
    'menu_position'         => 5,
    'rest_base'             => 'procedimento',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'              => array( 'title','editor'),
    'taxonomies'            => array( 'category' ),
    );

    register_post_type( 'procedimento', $args );
}
