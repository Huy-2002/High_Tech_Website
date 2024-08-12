<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto mt-4">
                <div class="card shadow">
                    <div class="card-header bg-primary">
                        <h3 class="text-light">
                            Thêm sản phẩm
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="?mod=products&action=addProduct" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="">Tên sản phẩm </label>
                                <input name="name" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for=""> Hình ảnh sản phẩm </label>
                                <input name="image" type="file" value="" class="form-control">

                            </div>

                            <div class="form-group">
                                <label for=""> Giá sản phẩm </label>
                                <input name="price" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for=""> Số lượng sản phẩm </label>
                                <input name="qty" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for=""> Mô tả sản phẩm </label>
                                <textarea name="descript" class="form-control" width="50px" height="100px" style="resize: none;"></textarea>
                            </div>

                            <button class="btn btn-primary my-4" name="btn" type="submit"> Thêm sản phẩm </button>
                            <button class="btn btn-primary my-4" name="btn" type="submit"> <a href="?mod=products" style="text-decoration: none; color: white"> Trở về </a> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>