<div class="products-showcase">
    <h2>Products</h2>    
    <div class="allprodcuts">
        <div class="row">
        <?php foreach ($products as $product) : ?>
            
                <div class="col-md-3">
                    <div class="thumbnail pepe">
                    <img src="<?php echo $product->image; ?>">
                    <div class="caption">
                        <h2><a href="<?php echo $product->getUrl(); ?>"><?php echo $product->name;?></a></h2>
                        <h5><?php echo $product->description; ?></h5>
                        <p><strong>Price:</strong>  €<?php echo $product->price; ?> <strong>Stock:</strong>  <?php echo $product->amount_in_stock; ?></p>
                        
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($product->id); ?>">
                            <input type="text" name="quantity" value="1" size="2" />
                            <input type="submit" class="btn btn-primary" value="Add to cart">
                        </form>
                    </div>
                    </div>
                </div>
             
        <?php endforeach; ?>
        </div> 
   </div> 
</div>        