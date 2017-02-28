<?php
if(isset($_GET['id']))
{
    
    $category_id = request::get('id');

}
?>
<div class="allprodcuts">
    <div class="row">
    
<?php foreach ($category_product as $product) : ?>

    <div class="col-md-3">
        <div class="thumbnail pepe">
            <img src="<?php echo $product->image; ?>">
            <div class="caption">
                <h2><a href="<?php echo $product->getUrl(); ?>"><?php echo $product->name;?></a></h2>
                <h5><?php echo $product->description; ?></h5>
                <p><strong>Price:</strong>  €<?php echo $product->price; ?> <strong>Stock:</strong>  <?php echo $product->amount_in_stock; ?></p>
                <p><a href="#" class="btn btn-primary" role="button">Buy</a> <a href="#" class="btn btn-default" role="button">Add to chart<i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></p>
            </div>
        </div>
    </div>

<?php endforeach; ?>
    </div>      
</div>