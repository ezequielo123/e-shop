<div class="products-showcase">
    <div class="jumbotron">
        <h2 class="best">Best Sellers</h2>
           
    <div class="allprodcuts">
        <div class="row">
        <?php foreach ($products as $product) : ?>
            
                <div class="col-xs-6 col-md-3">
                    <a href="<?php echo $product->getUrl(); ?>" class="thumbnail pepehomepage">
                        <img src="<?php echo $product->image; ?>">
                        <div class="name">
                            <?php echo $product->name; ?>
                        </div>    
                    </a>    
                </div>
             
        <?php endforeach; ?>
        </div> 
   </div> 
   </div> 
</div>        