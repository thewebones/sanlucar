    <section class="container app mt-5 row">
        <div class="slider col-lg-6"> 
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        
            <div class="carousel-inner">
                <?php
                $active="active";
                $count=0;
                if(get_field("slider-home")){
                    foreach (get_field("slider-home") as $item) {?>
            <div class="carousel-item <?php if($count == 0) {
                echo $active;
                }?>">
                <h2><?php echo $item["titulo-slider"]?></h2>
                <p><?php echo $item["contenido-slider"]?></p>
                <img class="d-block w-100" src="<?php echo $item["imagen-slider"]?>" alt="First slide" style="border-radius:1px">
            </div>
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators<?php $count ?>" data-slide-to="<?php $count ?>" class="<?php if($count == 0) { echo $active; }?>" style="width:5px; height:5px;border-radius:50%"></li>
                </ol>
                <?php $count ++;}} ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators<?php $count ?>" role="button" data-slide="prev">
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
                    <div class="item" id="item-<?php echo $count ?>">
                        <a class="item-enlace" href="<?php echo $item["enlace-card"]?>" target="blank">
                            <div id="img-ico-<?php echo $count ?>" class="img-ico text-center" style="background-image: url('<?php echo $item["ico-card"] ?>'); height:50px; width:75px; background-repeat: no-repeat;  background-position: center top"></div>
                            <div id="img-icohover-<?php echo $count ?>" class="img-icohover text-center" style="background-image: url('<?php echo $item["ico-card_hover"] ?>'); height:50px; width:75px; background-repeat: no-repeat;  background-position: center top"></div>
                            <h6 id="item-nombre-<?php echo $count ?>" class="item-nombre mb-3"><?php echo $item["nombre-card"] ?></h6>
                        </a>
                    </div>
                    
                <?php $count++; }} ?>
            
        </div>
    </section>
    
  
