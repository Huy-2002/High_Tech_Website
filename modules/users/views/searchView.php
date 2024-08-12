<?php
get_header();
?>

<div class="row">
    <?php
    foreach ($data as $key => $value) { ?>
        <div class="col-md-2 m-3 border border-success">
            <a href=""></a>
            <div class="col">
                <div class="product-detail mt-3 row justify-content-center">
                    <div class="product-image">
                        <!-- Bọc hình ảnh trong một container mới -->
                        <div class="image-container">
                            <img name="product_image" style="height: 150px;" src="public/images/<?php echo $value['product_image']; ?>" alt="No image">
                        </div>
                    </div>
                </div>

                <div class="other-detail text-center mt-3 row justify-content-center">
                    <div class="product-name">
                        <h2 name="product_name"> <?php echo $value['product_name']; ?> </h2>
                    </div>

                    <div class="product-price">
                        <h4 name="product_price"> Gia tien: <?php echo $value['product_price']; ?> </h4>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>


<?php
get_footer();
?>