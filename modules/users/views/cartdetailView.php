<?php
get_header();

?>


<div class="container flex">
    <div class="left">
        <!-- product_image -->
        <div class="main_image">
            <img name="product_image" src="public/images/<?php echo $data['products']['product_image']; ?>" alt="No image" class="slide">
        </div>
    </div>

    <div class="right">
        <!-- product_name -->
        <h3 name="product_name">

            <?php echo $data['products']['product_name']; ?>
        </h3>

        <!-- product_description -->
        <p name="product_description">
            <?php echo $data['products']['product_description']; ?>
        </p>

            <!-- product_price -->
            <h4 name="product_price" id="total">

            </h4>

       

            <!-- product_price -->
            <div class="add flex1">
                <span id="decrease_btn" onclick="decreaseNumber()">-</span>

                <input onchange="updateTotal()" type="text" min="1" max="100" value="1" pattern="\d*" id="quantity" />

                <span id="increase_btn" onclick="increaseNumber()">+</span>
            </div>
    


        <!-- Voucher -->

        <label class="label_voucher">
                <input type="text" placeholder="Nhap ma voucher" class="input_voucher" name="voucher_input">
                <button class="btn1_voucher" onclick="applyVoucher()"> Ap dung</button>
        </label>


        <!-- Btn -->
        <form action="?mod=users&action=getProductOrder" method='post'>
            <button class="btn2" name="id" onclick="addToCart();"> Mua ngay </button>
        </form>

        <form action="?mod=users&action=cartHeader" method='post'>
            <button class="btn2" onclick="addToCart()"> Thêm vào giỏ hàng </button>
        </form>
    </div>

</div>

<?php
get_footer();
?>  