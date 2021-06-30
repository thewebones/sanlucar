<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 6/28/2021
 * Time: 9:47 AM
 */
?>
<?php
$args = array(
    'post_type'=> 'servicios',
    'order'    => 'ASC'
);
$the_query = new WP_Query( $args );
?>

<section class="container service" style="background: blue; width: 100%">
    <div class="foodservice">
        <h1>Food Service</h1>
    </div>
    <div class="services-section__grid" style="display: flex; flex-wrap: wrap">
 <?php if($the_query->have_posts() ) :
    while ( $the_query->have_posts() ) :
    $the_query->the_post();?>
    <div class="imagenservice col-lg-4">
        <div class="imagen">
            <?php if( has_post_thumbnail() ) {
                the_post_thumbnail( 'post-thumbnails', array('class' => 'image-section__image' ) );
            } ?>
    </div>
       <div class="container serviceblock">
          <div class="tituloservice">
            <h1><?php echo the_title(); ?></h1>
          </div>
          <div class="servicecontent">
            <?php echo the_excerpt(); ?>
          </div>
        </div>
        <div class="serviceboton">
            <div class="titulo">
            <h1 class="botontitulo"><?php echo get_post_meta( get_the_ID(), 'titulo_boton', true );?></h1>
            </div>
            <div>
            <a class="boton" href="<?php echo get_post_meta("boton")["link"]?>"></a>
            </div>
        </div>
    </div>
        <?php
    endwhile;
     wp_reset_postdata();
 else:
 endif;
 ?>
    </div>
</section>