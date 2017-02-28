<div class="categories">
    <h2 class="products-top"></h2>
    <ul class="categories-ul">
        <?php foreach($categories as $category) : ?>
        
            <li>
                 <a href="<?php echo $category->getUrl(); ?>">
                    <?php echo $category->name; ?>
                </a>
            </li>


        <?php endforeach; ?> 
        
    </ul>  

    
</div>      