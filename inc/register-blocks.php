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
