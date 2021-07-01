<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 6/28/2021
 * Time: 9:47 AM
 */
$argsCategorias=array(
    'taxonomy'=>'category',
    'order'=>'ASC',
    'hide_empty' => true,
);
$cats=get_categories($argsCategorias);

?>

<section class="container service" style="background: blue; width: 100%">

    <?php foreach($cats as $index=>$cat) {


        $args = array(
            'post_type'=> 'servicios',
            'order'    => 'ASC',
            'category_name'=> $cat->name
        );
        $the_query = new WP_Query( $args );

        if($the_query->posts){
        ?>



    <div class="foodservice">
        <h1><?php echo $cat->name?></h1>
    </div>
    <div class="services-section__grid" style="display: flex; flex-wrap: wrap; margin-top: 8%">
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
                <a class="botontitulo" href="<?php echo get_post_meta( get_the_ID(),'boton', true)['url']?>">
            <h1 class="botontitulo"><?php echo get_post_meta( get_the_ID(), 'titulo_boton', true );?></h1>
                </a>
            </div>

        </div>
    </div>
        <?php
    endwhile;
     wp_reset_postdata();

 endif;
 ?>
    </div>
    <?php } } ?>
</section>