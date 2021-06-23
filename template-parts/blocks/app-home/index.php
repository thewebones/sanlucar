    <section class="container app mt-5 row">
        <div class="slider col-6">
            <div class="">
            </div>
        </div>
        <div class="card col-6">
            
            <?php 
                if(get_field("repeater-home")){
                foreach (get_field("repeater-home") as $item) {?>
                    <div class="item">
                        <a class="item-enlace" href="<?php echo $item["enlace-card"]?>">
                        <svg class="item-img" src="<?php echo $item["ico-card"] ?>"></svg>
                        <span class="item-nombre"><?php echo $item["nombre-card"] ?></span>
                        </a>
                    </div>
                <?php }} ?>
            
        </div>
    </section>