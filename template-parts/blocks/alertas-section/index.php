<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 6/29/2021
 * Time: 10:29 AM
 */

$args = array(
    'post_type'=> 'alerta',
    'order'    => 'ASC'
);
$the_query = new WP_Query( $args );
?>
<section class="container service" style="background: blue; width: 100%">
  <div class="services-section__grid" style="display: flex; flex-wrap: wrap; margin-top: 8%">
        <?php if($the_query->have_posts() ) :
            while ( $the_query->have_posts() ) :
                $the_query->the_post();?>
                <div class="imagenservice col-lg-4">
                    <div class="imagen">
                        <div class="imagenalerta">
                        <?php if( has_post_thumbnail() ) {
                            the_post_thumbnail( 'post-thumbnails', array('class' => 'image-section__image' ) );
                        } ?>
                        </div>
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
                            <a class="botontitulo" href="<?php echo get_post_meta( get_the_ID(),'boton', true)['url']?>">
                                <h1 class="botontitulo"><?php echo get_post_meta( get_the_ID(), 'titulo_boton', true );?></h1>
                            </a>
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