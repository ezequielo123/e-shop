<?php 

class Category_Model extends model
{
   protected static $object_class = 'Category_Object';

   public static function getTopCategories()
   {
        //write query
        $query = "
            SELECT category.*
            FROM category
            WHERE category.parent_id IS NULL
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }

   public static function getSubCategories($parent_category_id)
   {
        //write query
        $query = "
            SELECT category.*
            FROM category
            WHERE category.parent_id = ?
        ";

        //run query and get result set
        $resultset = db::query($query, array($parent_category_id));

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }

   //retreives 1 object of the class Category_Object based on it's Id column
   public static function retreiveById($id)
   {
        $query = "
            SELECT category.*
            FROM category
            WHERE id = ?
            ";
        $resultset = db::query($query, array($id));  

        $objects = static::fetchObject($resultset);

        return $objects;
   }

   public static function getProductfromCategory($id)
   {
        $query = "
            SELECT product.*, category.name as category_name
            FROM product
            INNER JOIN category_has_product
            ON product.id = category_has_product.product_id
            INNER JOIN category
            ON category.id = category_has_product.category_id
            WHERE category.id = ?
            
            ";
        $resultset = db::query($query, array($id));  

        $objects = static::fetchObjects($resultset);

        return $objects;
   }

}