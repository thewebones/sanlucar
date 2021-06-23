
<?php
$args = array(
    'post_type'=> 'documentos',
    'order'    => 'ASC'
);
$the_query = new WP_Query( $args );
?>

<div class="docsContainer">
    <div class="searchContainer">
        <div class="selectContainer">
            <label class="textSearch">Select a department</label>
            <select class="selectSearch" name="" id="">
                <option value="">all</option>
            </select>
        </div>
    </div>
    <div class="allDocs">
        <?php if($the_query->have_posts()) :
            while($the_query->have_posts()) :
                $the_query->the_post();
        ?>
        <div class="singleDocs">
			<div class="iconDoc">
				<a>   
				<?php the_post_thumbnail();?>
				</a>
			</div>
			<div class="textContainer">
                <h1 class="tituloDoc"><?php echo the_title() ?></h1>
                <p class="descriptionDoc"><?php echo get_the_excerpt() ?></p>
            </div>
        </div>  
        <?php 
        endwhile;
        wp_reset_postdata();
    else:
    endif;
        ?>      
    </div>
</div>


