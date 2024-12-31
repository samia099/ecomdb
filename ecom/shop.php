<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teehosting E-commerce</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Top Bar -->
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
                        <li><a href="checkout.php">My Account</a></li>
                        <li><a href="cart.php">Go to Cart</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.php">
                    <!--<img src="https://tse2.mm.bing.net/th?id=OIP.RgBttdx5ttxG80P-Of6Z-wHaE8&pid=Api&P=0&h=220" alt="Brand Logo" class="hidden-xs">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.RgBttdx5ttxG80P-Of6Z-wHaE8&pid=Api&P=0&h=220" alt="Brand Logo" class="visible-xs">-->
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>

            <div class="col-md-3">
                <?php include("includes/sidebar.php"); ?>
            </div>

            <div class="col-md-9">
                <div class="box">
                    <h1>Shop</h1>
                    <p>This theme is created by Er. Anvesh Tiwari, who is the instructor of the Institute of Computer Science & Research, Sohawal, Ayodhya.</p>
                </div>

                <div class="row"><!--row start-->
                    <!-- Product 1 -->
                    <div class="col-md-4 col-sm-6 center responsive">
                        <div class="product">
                            <a href="details.php">
                                <img src="https://tse2.mm.bing.net/th?id=OIP.wBu0Xsb774mtzvjhq1C3DgHaE8&pid=Api&P=0&h=220" class="img-responsive">
                            </a>
                            <h3><a href="details.php">Molla Biryani 3</a></h3>
                            <p class="price">BDT 100</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- Repeat Product Template for Other Products -->
                    <?php for ($i = 0; $i < 5; $i++): ?>
                    <div class="col-md-4 col-sm-6 center responsive">
                        <div class="product">
                            <a href="details.php">
                                <img src="https://tse2.mm.bing.net/th?id=OIP.wBu0Xsb774mtzvjhq1C3DgHaE8&pid=Api&P=0&h=220" class="img-responsive">
                            </a>
                            <h3><a href="details.php">Molla Biryani 3</a></h3>
                            <p class="price">BDT 100</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                                </a>
                            </p>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div><!--row ens-->
                <center>
                    <ul class="pagination">
                        <li><a href="shop.php">First page</a></li>
                        <li><a href="shop.php">2</a></li>
                        <li><a href="shop.php">3</a></li>
                        <li><a href="shop.php">4</a></li>
                        <li><a href="shop.php">5</a></li>
                        <li><a href="shop.php">last page</a></li>
                    </ul>
                </center>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("includes/footer.php"); ?>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>