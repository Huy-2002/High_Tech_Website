<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>

                    <form method="post" action="" name="register-form" id="register-form">

                        <div class="form-group">
                            <label for="name"> <i class="fa-solid fa-user"></i> </label>
                            <input type="text" name="fullname" id="name" placeholder="Tên" />
                        </div>

                        <div class="form-group">
                            <label for="email"> <i class="fa-solid fa-phone"></i> </label>
                            <input type="tel" name="phonenum" id="phonenum" placeholder="Sđt" maxlength="10" required/>
                        </div>

                        <div class="form-group">
                            <label for="date"> <i class="fa-solid fa-calendar"></i> </label>
                            <input type="date" name="date" id="date" placeholder="Ngày sinh" required/>
                            <!-- set gía trị lớn nhất và nhỏ nhất để ngăn người dùng nhập lung tung -->
                        </div>
                        
                        <div class="form-group">
                            <label for="email"> <i class="fa-solid fa-user"></i> </label>
                            <input type="text" name="email" id="email" placeholder="Email" required/>
                        </div>

                        <div class="form-group">
                            <select class="form-select" name="gender">
                                <option selected>-- Chọn giới tính --</option>
                                <option value="1"> Nam </option>
                                <option value="2"> Nữ </option>
                            </select>
                       </div>
                        
                        <div class="form-group">
                            <label for="email"> <i class="fa-solid fa-user"></i> </label>
                            <input type="text" name="username" placeholder="Tài khoản" required/>
                        </div>

                        <div class="form-group">
                            <label for="pass"> <i class="fa-solid fa-lock"></i> </label>
                            <input type="password" name="password" id="pass" placeholder="Mật khẩu" required/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"> <i class="fa-solid fa-lock"></i> </label>
                            <input type="password" name="repassword" id="re_pass" placeholder="Xác nhận mật khẩu" />
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in </label>
                            <a href="#" class="term-service">Terms of service</a>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="btn" id="signup" class="form-submit" value="Sign Up" />
                        </div>
                    </form>

                </div>
                <div class="signup-image">
                    <figure><img src="public/images/signup.jpeg" alt="sing-up_image"></figure>
                    <a href="?mod=users" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
