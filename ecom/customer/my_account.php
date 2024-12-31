<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teehosting E-commerce</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li><a href="../customer_registration.php">Register</a></li>
            <li><a href="my_account.php">My Account</a></li>
            <li><a href="../cart.php">Go to Cart</a></li>
            <li><a href="../login.php">Login</a></li>
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
          <li ><a href="../index.php">Home</a></li>
          <li ><a href="../shop.php">Shop</a></li>
          <li class="active"><a href="my_account.php">My Account</a></li>
          <li><a href="../cart.php">food Cart</a></li>
          <li><a href="../about.php">About Us</a></li>
          <li><a href="../services.php">Services</a></li>
          <li><a href="../contactus.php">Contact Us</a></li>
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
        <li>my_account</li>
      </ul>
      <div class="col-md-3">
        <?php
          include("includes/sidebar.php");
        ?>
      </div>
      <div class="col-md-9">
        <!--including my order.php start-->
        <?php
          if (isset($_GET['my_order'])){
            include("my_order.php");
          }
        ?>
        <!--including my order.php end-->

        <!--including payoffline.php start-->
        <?php
          if (isset($_GET['pay_offline'])){
            include("pay_offline.php");
          }
        ?>


        <!--including payoffline.php end-->
        <!--including Edit Account.php start-->

        <?php
          if (isset($_GET['edit_act'])){
            include("edit_act.php");
          }
        ?>

        <!--including Edit Account.php end-->

        <!--including change password.php start-->
        <?php
          if (isset($_GET['change_pass'])){
            include("change_password.php");
          }
        ?>
        <!--including change password.php start-->


         <!--including delete.php start-->
        <?php
          if (isset($_GET['delete_ac'])){
            include("delete_ac.php");
          }
        ?>
        <!--including delete.php start-->
        
      </div>
<!-- Footer -->
<?php include("includes/footer.php"); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
