<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 21/06/21
 * Time: 18:20
 */
function cptui_register_my_cpts() {

    /**
     * Post Type: Noticias.
     */

    $labels = [
        "name" => __( "Noticias", "twentytwentyone" ),
        "singular_name" => __( "Noticia", "twentytwentyone" ),
    ];

    $args = [
        "label" => __( "Noticias", "twentytwentyone" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "noticia", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "noticia", $args );

    /**
     * Post Type: Documentos.
     */

    $labels = [
        "name" => __( "Documentos", "twentytwentyone" ),
        "singular_name" => __( "Documento", "twentytwentyone" ),
    ];

    $args = [
        "label" => __( "Documentos", "twentytwentyone" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "documentos", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "documentos", $args );

    /**
     * Post Type: Servicios.
     */

    $labels = [
        "name" => __( "Servicios", "twentytwentyone" ),
        "singular_name" => __( "Servicio", "twentytwentyone" ),
    ];

    $args = [
        "label" => __( "Servicios", "twentytwentyone" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "servicios", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "servicios", $args );

    /**
     * Post Type: Alertas.
     */

    $labels = [
        "name" => __( "Alertas", "twentytwentyone" ),
        "singular_name" => __( "Alerta", "twentytwentyone" ),
    ];

    $args = [
        "label" => __( "Alertas", "twentytwentyone" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "alerta", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "alerta", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
