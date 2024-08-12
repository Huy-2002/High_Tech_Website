<?php
//public/images/signup.jpeg
get_header();
?>
    <div class="container-fluid mt-3">
        <div class="col">
            <div class="row">
                <?php
                foreach ($data as $key => $value) {
                ?>
                    <div class="col-md-3 p-2">
                        <div style="border: 1px solid #f00; border-radius: 12px;">
                            <div class="product-detail mt-3">
                                <div class="product-image">
                                    <img name="product_image" style="width: 100%; height; 250px;" src="public/images/<?php echo $value['product_image']; ?>" alt="No image" class="picture">
                                </div>
                            </div>
                            <div class="other-detail text-center mt-3">
                                <div class="product-name">
                                    <h2 class="name" name="product_name">
                                        <?php echo $value['product_name']; ?>
                                    </h2>
                                </div>
                                <div class="product-price">
                                    <h4 class="price" name="product_price">
                                        GIÁ TIỀN: <?php echo $value['product_price']; ?>
                                    </h4>
                                </div>

                                <div class="product-btn d-flex justify-content-center">
                                    <form action="?mod=users&action=getProduct&id=<?php echo $value['product_id']; ?>" method="post">
                                        <button name="id" class="btn btn-success mb-5" value="<?php echo $value['product_id']; ?>"> Thêm vào giỏ hàng </button>
                                        <!-- chú ý name của button khi lấy id  -->
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();
?>