<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- Top Bar -->
<div id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">Welcome Guest</a>
                <a href="#">Shopping Cart Total Price: INR 398, Total Items: 3</a>
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
                <img src="logo.png" alt="Brand Logo" class="hidden-xs">
                <img src="logo_small.png" alt="Brand Logo" class="visible-xs">
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
                <li><a href="cart.php">Food Cart</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Content -->
<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li>Cart</li>
            </ul>
        </div>
        <div class="col-md-9" id="cart">
            <div class="box">
                <h1>Shopping Cart</h1>
                <p class="text-muted">Currently you have 3 item(s) in your cart.</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> food Product</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>platter size</th>
                                <th>Delete</th>
                                <th>Sub Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="tshirt1.jpg" alt="T-Shirt"> Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts for Men</td>
                                <td>2</td>
                                <td>INR 199</td>
                                <td>Large</td>
                                <td><input type="checkbox" name="remove[]" value="0"></td>
                                <td>INR 398</td>
                            </tr>
                            <tr>
                                <td><img src="tshirt1.jpg" alt="T-Shirt"> Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts for Men</td>
                                <td>2</td>
                                <td>INR 199</td>
                                <td>Large</td>
                                <td><input type="checkbox" name="remove[]" value="1"></td>
                                <td>INR 398</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">Total</th>
                                <th>INR 398</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="pull-left">
                        <a href="index.php" class="btn btn-default">
                            <i class="fa fa-chevron-left"></i> Continue Shopping
                        </a>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-default" type="submit" name="update">
                            <i class="fa fa-refresh"></i> Update Cart
                        </button>
                        <a href="checkout.php" class="btn btn-primary">
                            Proceed to Checkout <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="box" id="order-summary">
                <div class="box-header">
                    <h4>Order Summary</h4>
                </div>
                
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Order Subtotal</td>
                                <th>INR 398</th>
                            </tr>
                            
                            <tr class="total">
                                <th colspan="5">Total</td>
                                <th colspan="2">INR 418</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Recommendations Section -->
        <div class="col-md-3" id="recommendations">
            <h4>You May Also Like</h4>
            <div class="thumbnail">
                <img src="product1.jpg" alt="Product 1">
                <div class="caption">
                    <h5>Stylish Jacket</h5>
                    <p>INR 999</p>
                    <a href="product1.php" class="btn btn-primary btn-sm">View Product</a>
                </div>
            </div>
            <div class="thumbnail">
                <img src="product2.jpg" alt="Product 2">
                <div class="caption">
                    <h5>Leather Wallet</h5>
                    <p>INR 499</p>
                    <a href="product2.php" class="btn btn-primary btn-sm">View Product</a>
                </div>
            </div>
            <div class="thumbnail">
                <img src="product3.jpg" alt="Product 3">
                <div class="caption">
                    <h5>Sports Shoes</h5>
                    <p>INR 1999</p>
                    <a href="product3.php" class="btn btn-primary btn-sm">View Product</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Pages</h4>
                <ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Top Product Categories</h4>
                <ul>
                    <li><a href="#">Jackets</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">T-Shirts</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Where to Find Us</h4>
                <p>
                    Teehosing.com<br>
                    Sohawal, Ayodhya<br>
                    Uttar Pradesh<br>
                    <strong>Email:</strong> icrslabindia@gmail.com
                </p>
            </div>
        </div>
    </div>
</footer>
<?php include("includes/footer.php"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>