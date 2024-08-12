<?php

function construct()
{
    //    echo "Dùng chung, load đầu tiên";
    load_model('index');
}

function indexAction()
{
    global $result;
    $result = get_product();
    load_view('product', $result);
}

// Add
function addAction()
{
    load_view('add');
}

function addProductAction()
{
    if (isset($_POST['btn'])) {
        $product_name = $_POST['name'];
        $product_price = $_POST['price'];
        $product_quantity = $_POST['qty'];

        $product_description = $_POST['descript'];
        $realDir = $_FILES['image']['tmp_name'];
        $serverDir = APPPATH . "/public/images/" . $_FILES['image']['name'];

        move_uploaded_file($realDir, $serverDir);
        $product_image = $_FILES['image']['name'];

        if ($product_price < 100000 && $product_quantity <= 0) {
            echo 
            '<script type="text/javascript"> 
            alert("Hay chon gia dung");
            </script>';

            redirect('?mod=products&action=add');
        } else {


            $data = array(
                'product_name' => $product_name,
                'product_price' => $product_price,
                'product_quantity' =>  $product_quantity,
                'product_image' => $product_image,
                'product_description' => $product_description
            );

            add_product($data);
            redirect('?mod=products');
        }
    }
}

// Update
function updateAction()
{
    $data = $_POST; // biến data
    $product = get_one_product($data['id']);
    // Khi truyền bên trong $product là key
    $data['product'] = $product;
    load_view('update', $data);
}

function updateProductAction()
{
    $id = $_POST['id'];
    unset($_POST['id']);
    $where = "product_id = $id";
    update_product($_POST, $where);
    redirect('?mod=products');
}

// Delete
function delete_by_idProductAction()
{
    echo '<script type="text/javascript"> 
         alert("Ban co thuc su muon xoa san pham nay");
         </script';

    $id = $_POST['id'];
    $where = "product_id = $id";
    delete_by_id($where);
    redirect('?mod=products');
}

function delete_allProductAction()
{
    echo '<script type="text/javascript"> 
         alert("Ban co thuc su muon xoa tat ca san pham");
         </script>';

    delete_all_product();
    redirect('?mod=products');
}

// Thống kê tài khoản người dùng

// Thêm xoá sửa đơn hàng

// Hiển thị sản phẩm người dùng