    <section class="container app mt-5 row">
        <div class="slider col-lg-6 mb-3"> 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php
                function feed($feedURL){
                $i = 0; 
                $url = $feedURL; 
                $rss = simplexml_load_file($url);
                $cant = (count($rss->channel->item));
                 
                    foreach($rss->channel->item as $item) { 
                    $link = $item->link;  //extrae el link
                    $title = $item->title;  //extrae el titulo
                    $guid = $item->guid;
                    $des_pure=$item->description;
                    $aux=explode('src="',$des_pure)[1];
                    $src=explode('" class',$aux)[0];
                    $description = strip_tags($item->description);?>
                    
                    <?php if ($i < 21) {?>
                        
                        <div class="carousel-item<?php if($i == 0) { echo ' active'; }?>">
                            
                                <h2><a href="<?php echo $link ?>" target="_blank"><?php echo $title ?></a></h2>
                                <p style="margin-bottom: 20px"><?php echo $description ?></p>
                                <img class="img-slider img-fluid" src="<?php echo $src ?>" alt="" style="width: 521px; height: 445px; border-radius:10px; objet-fit: cover">
                                
                            
                        </div>
                            
                    <?php } 
                        $i++;
                    } ?>

                    <ol class="carousel-indicators">
                    <?php 
                    for ( $i=0; $i<$cant; $i++) { ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php $i ?>" class="<?php if($i == 0) {echo 'active';}?>" style="width:7px; height:7px; border-radius:50%; color: #8BDDFC"></li>
                    <?php } ?>
                    </ol>

                <?php  } ?>
                
                <?php feed("https://lucanova.sanlucar.com/feed") ?>
                
            </div>   
            
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>  
            </div> 
        </div>

        <div class="card col-lg-6 text-center">
            
            <?php 
            $count = 1;
                if(get_field("repeater-home")){
                foreach (get_field("repeater-home") as $item) {?>
                    <div class="item text-center" id="item-<?php echo $count ?>">
                        <a class="item-enlace" href="<?php echo $item["enlace-card"]?>" target="blank">
                            <div id="img-ico-<?php echo $count ?>" class="img-ico text-center" style="background-image: url('<?php echo $item["ico-card"] ?>'); height:50px; width:75px; background-repeat: no-repeat;  background-position: center "></div>
                            <div id="img-icohover-<?php echo $count ?>" class="img-icohover text-center" style="background-image: url('<?php echo $item["ico-card_hover"] ?>'); height:50px; width:75px; background-repeat: no-repeat;  background-position: center"></div>
                            <h6 id="item-nombre-<?php echo $count ?>" class="item-nombre mb-3"><?php echo $item["nombre-card"] ?></h6>
                        </a>
                    </div>
                    
                <?php $count++; }} ?>
            
        </div>
    </section>
      



