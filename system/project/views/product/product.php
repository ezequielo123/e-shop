<?php
if(isset($_GET['id']))
{
    
    $unique_id = request::get('id');

}
?>
<div class="row">
  <div class="col-xs-12">
    <div class="thumbnail">
      <img src="<?php echo $product->image; ?>">
      <div class="caption">
        <h2><?php echo $product->name; ?></h2>
        <h4><?php echo $product->description; ?></h4>
        <p>Price:  €<?php echo $product->price; ?></p>
        <p><a href="#" class="btn btn-primary" role="button">Buy</a> <a href="#" class="btn btn-default" role="button">Add to </a></p>
      </div>
    </div>
  </div>
</div>
