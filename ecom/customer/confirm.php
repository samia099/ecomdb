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
          <li><a href="../index.php">Home</a></li>
          <li><a href="../shop.php">Shop</a></li>
          <li class="active"><a href="my_account.php">My Account</a></li>
          <li><a href="../cart.php">Cart</a></li>
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

  <!-- Content -->
  <div id="content">
    <div class="container">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li>My Account</li>
        </ul>
      </div>
      <div class="col-md-3">
        <?php include("includes/sidebar.php"); ?>
      </div>
      <div class="col-md-9">
        <div class="box">
          <h1 align="center">Please Confirm Your Payment</h1>
          <form action="confirm.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="invoice_number">Invoice Number</label>
              <input type="text" class="form-control" name="invoice_number" id="invoice_number" required>
            </div>
            <div class="form-group">
              <label for="amount">Amount</label>
              <input type="text" class="form-control" name="amount" id="amount" required>
            </div>
            <div class="form-group">
              <label for="payment_mode">Payment Mode</label>
              <select class="form-control" name="payment_mode" id="payment_mode" required>
                <option value="">Select Payment Mode</option>
                <option>Bank Transfer</option>
                <option>Bkash</option>
                <option>Nogod</option>
                <option>Rocket</option>
              </select>
            </div>
            <div class="form-group">
              <label for="date">Transaction number</label>
              <input type="date" class="form-control" name="trfr"  required="">
            <div class="form-group">
              <label for="date">Payment Date</label>
              <input type="date" class="form-control" name="date" id="date" required>
            </div>
            <div class="text-center">
              <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
                Confirm Payment
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include("includes/footer.php"); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
