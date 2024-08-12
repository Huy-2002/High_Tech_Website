<?php

    //get Product
    function get_product()
    {
        $sql = "SELECT * FROM products";
        return db_fetch_array($sql);
    }

    // Add
    function add_product($data)
    {
       return db_insert('products',$data);
    }

    // Update
    function get_one_product($id)
    {
        if($id == null)
        {
            return $id;
        }
        else
        {
            return db_fetch_row("SELECT * FROM products WHERE product_id = $id");
        }
    }

    function update_product($data,$where)
    {
        $result = db_update('products',$data,$where);
        return $result;
    }

    

    //Delete
        function delete_by_id($where)
    {
        $result = db_delete('products',$where);
        return $result;
    }
    
        function delete_all_product()
    {   
            return db_delete('products','true');
            //return db_delete('products','1-1');
    }

   

  

    