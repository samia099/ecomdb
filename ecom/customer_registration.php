<!DOCTYPE html>
<html>
<head>
  <title>E-Commerce Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PV1G0fQNHSOD2xbE+QkPxCAFINEevoEH3S1@sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

  <!-- Top Section -->
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
          <!-- Placeholder for logo -->
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
          <span class="sr-only">Toggle Navigation</span>
          <i class="fa fa-align-justify"></i>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navigation">
        <ul class="nav navbar-nav navbar-left">
          <li  class="active"><a href="index.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="checkout.php">My Account</a></li>
          <li><a href="cart.php">food Cart</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </div>
      <a href="cart.php" class="btn btn-primary navbar-btn right">
        <i class="fa fa-shopping-cart"></i>
        <span>4 items In Cart</span>
      </a>
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
 <div id="content">
  <div class="container">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><a href="home.php">Home</a></li>
        <li>REGISTRATION</li>
      </ul>
      <div class="col-md-3">
        <?php
          include("includes/sidebar.php");
        ?>
        </div>
        <div class="col-md-9">
            <div class="box">
                <div class="box-header">
                    <center>
                        <h2>CUSTOMER REGISTRATION</h2>
                        
                    </center>
                <form action="customer_registration.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Customer Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="email">Customer Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="">
                    </div>
                     <div class="form-group">
                        <label for="subject">Customer password</label>
                        <input type="text" name="c_passwordt" class="form-control"  required="">
                    </div>
                    
                     <div class="form-group">
                        <label for="subject">Country</label>
                        <input type="text" name="c_country" id="subject" class="form-control"required="">
                    </div>
                     <div class="form-group">
                        <label for="subject">city</label>
                        <input type="text" name="c_city" id="subject" class="form-control"required="">
                    </div>
                     <div class="form-group">
                        <label for="subject">contact_number</label>
                        <input type="text" name="c_number" id="subject" class="form-control"required="">
                    </div>
                    <div class="form-group">
                        <label for="subject">address</label>
                        <input type="text" name="c_address" id="subject" class="form-control"required="">
                    </div>
                     <div class="form-group">
                        <label >Image</label>
                        <input type="file" name="c_image" class="form-control"required="">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="c_message" id="message" class="form-control" rows="5" required=""></textarea>
                    </div>
                    <div class="text-center">
                          <div class="text-center">
                              <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i> Register
                              </button>
                          </div>
    

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
                </div>
                <form action="contactus.php" method="post">
                    <div class="form-group">
                        </div>
                    </form>
            </div>
</div>
        <?php include("includes/footer.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>