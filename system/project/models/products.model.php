<?php

class Products_Model extends model
{
   protected static $object_class = 'Products_Object';

   public static function getProduct($unique_id)
   {
        //write query
        $query = "
            SELECT * 
            FROM product 
            WHERE id = ?
        ";

        //run query and get result set
        $resultset = db::query($query, array($unique_id));

        //retreive all the rows as objects
        $objects = static::fetchObject($resultset);

        return $objects;
   }

   public static function insertorderid($userid)
    {
        //write query
        $query = "
            INSERT INTO orders (user_id, created) VALUES (?, NOW())'
        ";

        //run query and get result set
        db::query($query, array($userid));
        return $this->db->lastInsertId();

    }
}