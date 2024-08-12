<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Chỉnh sửa món ăn</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto mt-4">
                <div class="card shadow">
                    <div class="card-header bg-success">
                        <h3 class="text-light">
                            Cập nhật sản phẩm
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="?mod=products&action=updateProduct" method="post">

                            <div class="form-group">
                                <label for=""> Tên sản phẩm </label>
                                <input name="product_name" type="text" placeholder="<?php echo $data['product']['product_name'] ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for=""> Hình ảnh sản phẩm </label>
                                <input name="product_image" type="file" placeholder="<?php echo $data['product']['product_image'] ?>" class="form-control">

                            </div>

                            <div class="form-group">
                                <label for=""> Giá sản phẩm </label>
                                <input name="product_price" type="text" placeholder="<?php echo $data['product']['product_price'] ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for=""> Số lượng sản phẩm </label>
                                <input name="product_quantity" type="text" placeholder="<?php echo $data['product']['product_quantity'] ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for=""> Mô tả sản phẩm </label>
                                <textarea style="resize:none" name="product_description" placeholder="<?php echo $data['product']['product_description'] ?>" class="form-control"> </textarea>
                            </div>

                            <button class="btn btn-success my-4" name="id" value="<?php echo $data['id'] ?>" name="btn" type="submit"> Cập nhật sản phẩm </button>
                            <button class="btn btn-success my-4" name="btn" type="submit"> <a href="?mod=products" style="text-decoration: none; color: white"> Trở về </a> </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>