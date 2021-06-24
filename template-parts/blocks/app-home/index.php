    <section class="container app mt-5 row">
        <div class="slider col-6">
            <div class="">
            </div>
        </div>
        <div class="card col-6 text-center">
            
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
    
  
