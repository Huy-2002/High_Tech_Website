<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Icon -->
    <link rel="stylesheet" href="public/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="public/fonts/themify-icons/themify-icons.css">
    <title>Login</title>
</head>

<body>

    <!-- Sign in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">

                    <figure>
                        <img src="public/images/signin.jpg" alt="Cannot display">
                    </figure>

                    <a href="?mod=users&action=signup" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign in</h2>

                    <form method="POST" action="" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_name"> <i class="fa-solid fa-user"></i> </label>
                            <input type="text" name="username" id="your_name" placeholder="Your Name" required/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"> <i class="fa-solid fa-lock"></i> </label>
                            <input type="password" name="password" id="your_pass" placeholder="Password" required/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                        </div>
                    </form>


                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li> <a href="#"> <i class="fa-brands fa-facebook"></i> </a></li>
                            <li> <a href="#"> <i class="fa-brands fa-instagram"></i> </a></li>
                            <li> <a href="#"> <i class="fa-brands fa-google"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Icon -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>



</body>

</html>
