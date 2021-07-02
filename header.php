<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Empty_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/sanlucar/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/sanlucar/vendors/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/sanlucar/assets/css/main.css">
    <?php wp_head(); ?>
</head>
<style>
    .contenido__video{
        background: transparent;
        overflow: hidden;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: -1;
    }

    /* Estilos para la etiqueta "video" con la calse (.video)  */
    .video{
        position: absolute;
        max-width: 300%;
        width: 100%;
    }

    /* media queries (personalizarlo a su antojo)*/
    @media(max-width: 900px){
        .video{
            width: 150%;
        }
    }
    @media(max-width: 650px){
        .video{
            width: 280%;
        }
    }
    @media(max-width: 480px){
        .video{
            width: 300%;
        }
    }
</style>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="contenido__video">
    <!--
      autoplay: propiedad para que se reproduzca una ves que carga la página
      loop: propiedad para el vídeo se repita infinitamente
      muted: propiedad para que el vídeo no emita sonido
      poster: propiedad que muestra una imagen hasta que cargue el vídeo
    -->
    <video class="video" autoplay="autoplay" loop="loop" muted="muted" >
        <source src="<?php echo get_site_url(); ?>/wp-content/themes/sanlucar/assets/img/video.mp4" type="video/mp4" />

    </video>
</div>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'empty-theme' ); ?></a>

    <header id="masthead" class="site-header">

        <div class="firstContainer">
            <p class="parrafoHeader">
                <?php echo get_field("texto_header","option") ?>
            </p>
        </div>
        <div class="logoContainer">
            <a href="<?php echo get_field("logo_url","option") ?>">
                <img class="imgLogo" style="margin-top:-36.5px;" src="<?php echo get_field("logo","option") ?>"/>
            </a>
        </div>
        <div class="menuContainer" >
            <div class="menu">
                <?php if(get_field("repeater_menu_principal","option"))
                    foreach(get_field("repeater_menu_principal","option") as $item){
                        ?>
                        <div class="itemMenu" >
                            <div class="<?php if($item["enlace_item_menu"]["title"]==="ALERTAS") echo "notify"?>"><span><?php if($item["enlace_item_menu"]["title"]==="ALERTAS") echo 1?></span></div>
                            <div onMouseOut="mostrar(event)" onClick="goLink(event)" onMouseOver="ocultar(event)" class="imagenMenu">
                                <a class="link" href="<?php echo $item["enlace_item_menu"]["url"]?>">
                                    <img class="front" src="<?php echo $item["icono_item_menu"]?>"/>
                                    <img class="back" src="<?php echo $item["icono_item_menu_hover"]?>"/>
                                </a>
                            </div>
                            <a class="textoMenu" href="<?php echo $item["enlace_item_menu"]["url"]?>"><?php echo $item["enlace_item_menu"]["title"] ?></a>
                        </div>
                    <?php } ?>
            </div>
        </div>
    </header><!-- #masthead -->

