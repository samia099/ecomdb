<?php
include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teehosting E-commerce</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offer">
                    <a href="#" class="btn btn-success btn-sm">Welcome Guest</a>
                    <a href="#">Shopping Cart Total Price: INR 100, Total Items: 2</a>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="menu list-inline">
                        <li><a href="customer_registration.php">Register</a></li>
                        <li><a href="customer/my_account.php">My Account</a></li>
                        <li><a href="cart.php">Go to Cart</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.php">
                    <img src="images/logo.png" alt="Teehosting Logo" class="img-responsive" style="max-height: 50px;">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navigation">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                    <li><a href="cart.php">Food Cart</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items In Cart</span>
                </a>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container" id="slider">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <?php
                    $get_slider = "select * from slider LIMIT 0,1"; // Get the first slider item for "active" class
                    $run_slider = mysqli_query($con, $get_slider);
                    while ($row = mysqli_fetch_array($run_slider)) {
                        $slider_image = $row['slider_image'];
                        echo "<div class='item active'>
                                <img src='admin_area/slider_images/$slider_image'>
                            </div>";
                    }

                    $get_slider = "select * from slider LIMIT 1,3"; // Get the rest
                    $run_slider = mysqli_query($con, $get_slider);
                    while ($row = mysqli_fetch_array($run_slider)) {
                        $slider_image = $row['slider_image'];
                        echo "<div class='item'>
                                <img src='admin_area/slider_images/$slider_image'>
                            </div>";
                    }
                    ?>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div id="advantage">
        <div class="container">
            <div class="row same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">BEST DEALS OVER FOOD</a></h3>
                        <p>You can check on all other sites about the prices and then compare with us.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">100% SATISFACTION GUARANTEED</a></h3>
                        <p>We prioritize our customers.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">FAST DELIVERY</a></h3>
                        <p>Hygiene and cleanliness are the most important for any food.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/1st.jpg" alt="product_images" class="img-responsive">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Cheese Pasta</a></h3>
                        <p class="price">INR 299</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <button class="btn btn-primary" onclick="addToCart(1)">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            </div>
    </div>

    <?php include("includes/footer.php"); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
</body>
</html>