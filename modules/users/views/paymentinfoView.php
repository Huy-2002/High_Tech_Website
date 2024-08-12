<?php
get_header();
$cart = [];
$cartdetail = [];
$totalPrice = 0;

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}
if (isset($_SESSION['cart_detail'])) {
    $cartdetail = $_SESSION['cart_detail'];
}
?>

<form action="?mod=users&action=addOrder" method="post">

    <?php
    foreach ($cart as $key => $value) {
        $totalPrice += $cartdetail[$key]['product_price'] * $value;    
        $product_name = $cartdetail[$key]['product_name'];
        $product_quantity = $value;
    }

    ?> <div class="container">
        <h1> Thông tin đơn hàng </h1>
        <div class="container_content">
            Họ tên khách hàng
            <input type="text" name="order_cusname" placeholder="Tên khách hàng">
            Số điện thoại
            <input type="text" name="order_cusphone" placeholder="Số điện thoại">
            Email
            <input type="text" name="order_cusemail" placeholder="Email">
            Địa chỉ
            <input type="text" name="order_cusaddress" placeholder="Địa chỉ">
            
            <input type="hidden" name="id" value="<?php echo array_key_last($_SESSION['cart']) ?>">
        </div>

        <div class="payment_method" name="order_shipping_method">
            <label for="">
                PHƯƠNG THỨC GIAO HÀNG
                <select name="shipping">
                    <option value="1">
                        Nhận hàng tại cửa hàng
                    </option>

                    <option value="2">
                        Giao hàng tận nơi
                    </option>
                </select>
            </label>

            <label for="">
                PHƯƠNG THỨC THANH TOÁN

                <select name="payment" name="order_payment_method">
                    <option value="1">
                        Thanh toán khi nhận hàng
                    </option>

                    <option value="2">
                        Thanh toán bằng VNPAY
                    </option>
                </select>
            </label>

            <h1 name="order_product_name"> Tên sản phẩm: <?php echo $product_name ?> </h1>
            <h1 name="order_product_quantity"> Số lượng sản phẩm: <?php echo $product_quantity ?> </h1>
            <h1 name="order_total_price"> Tổng tiền là: <?php echo $totalPrice ?> </h1>
        </div>




        <div class="btn">
            <button class="btn btn-success"> Thanh toán </button>


            <button class="btn btn-danger" name="id_cancel"> Huỷ bỏ </button>


        </div>


    </div>
</form>