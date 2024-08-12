<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="public/fonts/fontawesome-free-6.4.0-web/css/all.min.css">

    <!-- Add these lines in the head section of your HTML -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="public/css/headfoot.css">
    <link rel="stylesheet" href="public/css/paymentinfo.css">
    <link rel="stylesheet" href="public/css/cart.css">
    <link rel="stylesheet" href="public/css/cartheader.css">
    <link rel="stylesheet" href="public/css/thankyou.css">
    <script src="public/js/code.jquery.com_jquery-3.7.0.min.js"></script>
    
</head>

<body>
    <header>
        <a href="?mod=users&action=mainpage" class="brand">
            <span> <i class="fa-solid fa-computer"></i> </span>
            <h1>High-Tech</h1>
        </a>

        <div class="navbar">
            <form action="?mod=users&action=searchProduct" method="POST" class="searchBox">
                <input type="text" placeholder="Tìm kiếm tại đây" name="search">
                <button class="fas fa-search" id="searchIcon" name='btn'></button>
            </form>

            <ul>
                <li>
                    <a href="?mod=users&action=mainpage"> Home </a>
                </li>

                <li>
                    <a href="?mod=users&action=cartHeader"> Cart </a>
                </li>

                <li>
                    <a href="?mod=users&action=index"> Log out </a>
                </li>
            </ul>

        </div>
    </header>