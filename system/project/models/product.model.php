<?php 

class Product_Model extends model
{
   protected static $object_class = 'Product_Object';

   public static function getTopProducts()
   {
        //write query
        $query = "
            SELECT product.* 
            FROM product 
            WHERE product.is_top = 1
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
   }

    public static function getProducts()
    {
        //write query
        $query = "
            SELECT product.* 
            FROM product 
            WHERE product.unit_qty = 1
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    public static function getProduct($id)
    {
        //write query
        $query = "
            SELECT product.* 
            FROM product 
            WHERE product.id = ?
        ";

        //run query and get result set
        $resultset = db::query($query, array($id));

        //retreive all the rows as objects
        $objects = static::fetchObject($resultset);

        return $objects;
    }

}