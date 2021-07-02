<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 21/06/21
 * Time: 18:20
 */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Ajustes Generales',
        'menu_title'	=> 'Ajustes Generales',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_register_block_type(array(
        'name'              => 'app-home',
        'title'             => __('app-home'),
        'description'       => __('app home'),
        'render_template'   => 'template-parts/blocks/app-home/index.php',
        'icon'              => 'admin-comments',
        'keywords'          => array('home', 'app'),
        'category' => 'widgets'
    
    ));

}

acf_register_block_type(array(
    'name'              => 'noticias-section',
    'title'             => __('noticias section'),
    'description'       => __('noticias'),
    'render_template'   => 'template-parts/blocks/noticias-section/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('noticias', 'seccion'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'docs',
    'title'             => __('Lista de documentos'),
    'description'       => __('Lista de todos los documentos'),
    'render_template'   => 'template-parts/blocks/documentos/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('docs', 'documentos'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'services-section',
    'title'             => __('services section'),
    'description'       => __('noticias'),
    'render_template'   => 'template-parts/blocks/services/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('services', 'seccion'),
    'category' => 'widgets'
));
acf_register_block_type(array(
    'name'              => 'alertas-section',
    'title'             => __('alertas section'),
    'description'       => __('alertas'),
    'render_template'   => 'template-parts/blocks/alertas-section/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('alertas', 'seccion'),
    'category' => 'widgets'
));



