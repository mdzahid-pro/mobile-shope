<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--Owl Carosel 2 CDN Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />

    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/dcc6da25ef.js" crossorigin="anonymous"></script>

    <!--Custom CSS File-->
    <link rel="stylesheet" href="style.css">
    <title>Mobile Shopee</title>

    <?php
        //Require All Function from function file
        require('functions.php');
    ?>
</head>
<body>
<!-- start Header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-size-12 font-baloo text-black-50 m-0">
            tongi bazar 1704 , gazipur city ,bangladesh
        </p>
        <div class="font-baloo font-size-14">
            <a href="login.php" class="px-3 border-right border-left text-dark">Login</a>
            <a href="#" class="px-3 border-right text-dark">Whishlist(0)</a>
        </div>
    </div>

    <!-- Primary Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark color-secund-bg">
        <a class="navbar-brand" href="#">Hand To Hand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Product <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Coming Soon</a>
                </li>
            </ul>
            <!-- shopping csrd -->
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-cart-arrow-down"></i></span>
                    <span class="py-2 px-3 rounded-pill text-dark bg-light"><?php
                        $select = $db->con->query("SELECT * FROM cart WHERE user_id={$userId}");
                        echo mysqli_num_rows($select);
                        ?></span>
                </a>
            </form>
            <!-- !shopping csrd -->
        </div>
    </nav>

    <!-- !Primary Navigation Menu -->

</header>
<!-- !start Header -->

<!-- start main -->
<main id="main">