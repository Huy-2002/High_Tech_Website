<?php
get_header();
$cart = [];
$cartdetail = [];
$totalPrice = 0;
$totalQuantity = 0;

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}
if (isset($_SESSION['cart_detail'])) {
    $cartdetail = $_SESSION['cart_detail'];
}
?>

<div class="container">
    <div class="cart">
        <div class="products">
            <?php foreach ($cart as $key => $value) {

                $totalPrice += $cartdetail[$key]['product_price'] * $value;
                $totalQuantity += $value;
                
            ?>
                <div class="product">
                    <img src="public/images/<?php echo $cartdetail[$key]['product_image'] ?>" alt="No Image">

                    <div class="product-info">
                        <h3 class="product-name">
                            <?php echo $cartdetail[$key]['product_name'] ?>
                        </h3>

                        <h4 class="product-price">
                            <span class="price">
                                <?php
                                echo $cartdetail[$key]['product_price'] * $value;
                                ?>
                            </span><span>đ</span>

                        </h4>


                        <p class="product-quantity">
                            <span class="btn_decrease" id="decrease_btn">-</span>
                            <input class="qty" type="text" min="1" max="100" value="<?php echo $value; ?>" pattern="\d*" id="quantity" readonly />
                            <span class="btn_increase" id="increase_btn">+</span>
                        </p>

                        <form action="?mod=users&action=delete_by_id" method="post">
                            <p class="product-remove">
                                <input type="hidden" name="id" value="<?php echo $key; ?>">
                                <button type="submit" class="remove" onclick="return confirm('Bạn có muốn xoá sản phẩm này ko')">Xoá</button>
                            </p>
                        </form>


                    </div>
                </div>

            <?php } ?>

        </div>

        <div class="cart-total">
            <p>
                <span> Giá Tổng: </span>
                <span> <?php echo $totalPrice ?> đ</span>
            </p>

            <p>
                <span> Số lượng sản phẩm: </span>
                <span> <?php echo $totalQuantity ?> </span>
            </p>
            <form action="?mod=users&action=getProductOrder" method="post">
                <button class="btn btn-success"> Thanh toán </button>
            </form>

        </div>
    </div>
</div>

<script>
    // Adjust quantity in cartHeader
    var value;
    var btn_decrease = document.querySelectorAll('.btn_decrease');
    btn_decrease.forEach(element => {
        element.onclick = () => {
            var qty = element.parentNode.querySelector('input').value;
            if (qty == 1) return;
            var price = element.parentNode.parentNode.querySelector('.price').innerHTML;
            var originPrice = price / qty;
            var currentValue = --element.parentNode.querySelector('input').value;
            element.parentNode.parentNode.querySelector('.price').innerHTML = currentValue * originPrice;
        }

    });

    var btn_increase = document.querySelectorAll('.btn_increase');
    btn_increase.forEach(element => {
        element.onclick = () => {
            var qty = element.parentNode.querySelector('input').value;
            var price = element.parentNode.parentNode.querySelector('.price').innerHTML;
            var originPrice = price / qty;
            var currentValue = ++element.parentNode.querySelector('input').value;
            element.parentNode.parentNode.querySelector('.price').innerHTML = currentValue * originPrice;
        }
    })
</script>

<?php
// get_footer();
?>