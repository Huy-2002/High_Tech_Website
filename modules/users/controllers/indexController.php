<?php
session_start();
function construct()
{
    //    echo "Dùng chung, load đầu tiên";
    load_model('index');
}


function indexAction()
{

    global $username, $password;

    if (isset($_POST['signin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = login($username, $password);
        extract($result);

        if ($role == 1) {
            redirect('?mod=users&action=mainpage');
        } 
        else if ($role == 0) {
            redirect('?mod=products');
        }
    }

    load_view('signin');
}

function signupAction()
{
    if (isset($_POST['btn'])) {

        $fullname = $_POST['fullname'];
        $phonenum = $_POST['phonenum'];
        $dob = $_POST['date'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        
        $sql = array(
            'fullname' => $fullname,
            'phone_num' => $phonenum,
            'dob' => $dob,
            'email' => $email,
            'gender' => $gender,
            'username' => $username,
            'password' => $password,
            'repass' => $repassword,

        );

        add_user($sql);
                
        redirect("?mod=users&action=index");
    }

    load_view('signup');
}

function mainpageAction()
{
    global $product_list;
    $product_list = get_products();
    load_view('mainpage', $product_list);
}


// Search (Attention)
function searchProductAction()
{
    if (isset($_POST['btn']) and $_POST['search'] != null) {
        $data = $_POST['search'];
        // Đưa dữ liệu nhập vào
        global $product_list;
        $product_list = search($data);
        // Thực hiện chức năng tìm kiếm trog dữ liệu
        $product['product_list'] = $product_list;
        //$product đóng vai trò chuyển dữ liệu từ controller về view
        load_view('search', $product_list);
        //$product trong load_view sử dụng khi cần đổ dữ liệu từ sever xuống view
    } else {

        // echo '<script type="text/javascript"> 
        //  alert("Vui long nhap san pham ban can");
        //  </script>';

        redirect('?mod=users&action=mainpage');
    }
}

// Lấy sp vào Giỏ hàng và điều chỉnh só lượng giỏ hàng
function getProductAction()
{
    $data = $_POST;
    $product_detai = get_product_by_id($data['id']);
    $data['products'] = $product_detai;
    load_view('cartdetail', $data);
    //load_view('cartdetail');
}
function getPriceAction()
{
    $id = $_POST['id'];
    echo json_encode(get_product_by_id($id));
}

function sessionCreateAction()
{
    extract($_POST);
    $_SESSION[$key] = $data;
}

//Thanh toán
function addCartAction()
{
    try {
        if (isset($_SESSION['cart'][$_POST['id']])) {
            $_SESSION['cart'][$_POST['id']] += $_POST['qty'];
        } else
            $_SESSION['cart'][$_POST['id']] = $_POST['qty'];
        echo true;
    } catch (\Throwable $th) {
        echo false;
    }
}
function cartHeaderAction()
{
    foreach ($_SESSION['cart'] as $key => $value) {
        $_SESSION['cart_detail'][$key] = get_product_by_id($key);
    }
    load_view('cartheader');
}

function delete_by_idAction()
{
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Check if the product exists in the cart
        if (isset($_SESSION['cart'][$id])) {
            // Remove the product from the cart
            unset($_SESSION['cart'][$id]);
            unset($_SESSION['cart_detail'][$id]);
            redirect('?mod=users&action=cartHeader');
        }
    }
}

// Voucher Đơn Hàngx
function getVoucherAction()
{
    //xem cai GetPrice ben cart_ajax va controller 
    if (isset($_POST['id']) and $_POST['voucher_input'] == null) {

        $voucher_name = $_POST['voucher_input'];
        echo json_encode(get_voucher($voucher_name));
    }
}

// Thông tin thanh toán với paymentinfo
function getProductOrderAction()
{
    foreach ($_SESSION['cart'] as $key => $value) {
        $_SESSION['cart_detail'][$key] = get_product_by_id($key);
    }
    load_view('paymentinfo');
}

function addOrderAction()
{
    if (isset($_POST['id'])) {
        $order_cusname = $_POST['order_cusname'];
        $order_cusphone = $_POST['order_cusphone'];
        $order_cusemail = $_POST['order_cusemail'];
        $order_cusaddress = $_POST['order_cusaddress'];
        $order_shipping_method = $_POST['shipping'];
        $order_payment_method = $_POST['payment'];
        $order_product_quantity = $_POST['order_product_quantity'];
        //$id = $_POST['id'];

        // Initialize total price
        $totalPrice = 0;

        // Calculate total price based on products in the cart
        foreach ($_SESSION['cart'] as $key => $value) {
            $totalPrice += $_SESSION['cart_detail'][$key]['product_price'] * $value;
            //$product_quantity = $value;
        }

        $data = array(
            'order_cus_name' => $order_cusname,
            'order_cus_phone' => $order_cusphone,
            'order_cus_email' => $order_cusemail,
            'order_cus_address' => $order_cusaddress,
            'order_shipping_method' => $order_shipping_method,
            'order_payment_method' => $order_payment_method,
            'order_total_price' => $totalPrice, // Assign total price
            'order_product_quantity' => $order_product_quantity,
            // 'order_product_id' =>  $id,
        );

        // Add order to the database
        add_order($data);

        // Clear the cart and cart_detail sessions
        unset($_SESSION['cart']);
        unset($_SESSION['cart_detail']);

        // Redirect to thank you page
        redirect('?mod=users&action=thankYouPage');
        
    } else if (isset($_POST['id_cancel'])) {
        redirect('?mod=users&action=mainpage');
    }
}

// Thank you page
function thankYouPageAction()
{
    load_view('thankyou');
}
