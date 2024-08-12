<?php

// Sign Up
function add_user($sql)
{
   return db_insert('users', $sql);
}

// Sign In
function login($username, $password)
{

   $check_user = db_fetch_row("SELECT * 
                              FROM users 
   WHERE username = '{$username}' AND password = '{$password}'");

   return $check_user;
}

// Search
function search($data)
{
   if ($data == null) {
      echo '<script type="text/javascript"> 
      alert("Vui lòng nhập kí tự tìm kiếm ");
      </script>';
   } else {
      $check_products = db_fetch_array("SELECT * 
                                   FROM products 
                                   WHERE product_name LIKE '%$data%'");
      // print_r($check_products);
      // echo "<br/>";
      return $check_products;
   }
}

// Display product
function get_products()
{
   $id = "SELECT * FROM products";
   //show_array($products);
   return db_fetch_array($id);
}


// get product and display to cart
function get_product_by_id($id)
{
     $sql = db_fetch_row("SELECT * FROM products WHERE product_id = $id");
     return $sql;
     
}

// add order info
function add_order($data)
{
   return db_insert('orders', $data);
}

// Get Voucher
function get_voucher($voucher_name)
{
   $sql = db_fetch_row("SELECT * FROM voucher WHERE voucher_name = $voucher_name");
   return $sql;
}