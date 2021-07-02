<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 6/23/2021
 * Time: 7:20 PM
 */
?>
<?php
$args = array(
    'post_type'=> 'noticia',
    'order'    => 'ASC'
);
$the_query = new WP_Query( $args );
?>
<div class="container noticias" style= "margin-top: 100px !important; width: 100%">
    <?php if($the_query->have_posts() ) :
while ( $the_query->have_posts() ) :
$the_query->the_post();?>
    <section class="image-section">
        <div class="imagendestacada">
        <?php if( has_post_thumbnail() ) {
            the_post_thumbnail( 'post-thumbnails', array('class' => 'image-section__image' ) );
        } ?>
        </div>
        <div class="post-content">
            <h1 class="titulo-post"><?php echo the_title(); ?></h1>
            <div class="excerpt-post"><?php echo the_excerpt(); ?></div>
        </div>
        <div class="link-flecha">
            <a class="enlace" href="<?php echo get_post_meta("enlace")["link"]?>">
                <img class="flecha" src="<?php echo get_site_url(); ?>/wp-content/themes/assets/img/flecha-abrir.svg">
            </a>
        </div>
    </section>
    <?php
endwhile;
    wp_reset_postdata();
else:
endif;
?>

</div>
