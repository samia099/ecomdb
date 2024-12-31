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
    <div class="row" id="productmain">
        <div class="col-sm-6">
            <div id="mainimage">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner"><!--start-->>
                        <div class="item active">
                            <center>
                                <img src="https://www.thespruceeats.com/thmb/SalyKjzBU-K1Bv-FTFWnbd6ckjY=/2121x1414/filters:fill(auto,1)/GettyImages-639704020-5c4a63ecc9e77c00017bfebf.jpg" class="img-responsive">
                            </center>
                        </div>
                        <div class="item">
                            <center>
                                <img src="https://www.thespruceeats.com/thmb/SalyKjzBU-K1Bv-FTFWnbd6ckjY=/2121x1414/filters:fill(auto,1)/GettyImages-639704020-5c4a63ecc9e77c00017bfebf.jpg" class="img-responsive">
                            </center>
                        </div>
                        <div class="item">
                            <center>
                                <img src="https://www.thespruceeats.com/thmb/SalyKjzBU-K1Bv-FTFWnbd6ckjY=/2121x1414/filters:fill(auto,1)/GettyImages-639704020-5c4a63ecc9e77c00017bfebf.jpg" class="img-responsive">
                            </center>
                        </div>
                    </div>
                    <!--end-->>
                    <a href="mycarousel" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only"> Previous</span>
                    </a>
                    <a href="mycarousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only"> Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
    <div class="box">
        <h1 class="text-center">biriyani</h1>
        <form action="details.php" method="post" class="form-horizontal">
            <div class="form-group"><!-- form-group Start -->
                <label class="col-md-5 control-label">item quantity</label>
                <div class="col-md-7"><!-- col-md-7 Start -->
                    <select name="product_qty" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div><p class="price">BDT 150</p>
                </div><!-- col-md-7 End -->
            </div>
</form><!-- Form End -->

<div class="row"><!-- Box End -->
    <div class="col-xs-4">
        <a href="#" class="thumb">
            <img src="https://www.thespruceeats.com/thmb/SalyKjzBU-K1Bv-FTFWnbd6ckjY=/2121x1414/filters:fill(auto,1)/GettyImages-639704020-5c4a63ecc9e77c00017bfebf.jpg">
        </a>
    </div>
    <div class="col-xs-4">
        <a href="#" class="thumb">
            <img src="https://www.thespruceeats.com/thmb/SalyKjzBU-K1Bv-FTFWnbd6ckjY=/2121x1414/filters:fill(auto,1)/GettyImages-639704020-5c4a63ecc9e77c00017bfebf.jpg">
        </a>
    </div>
    <div class="col-xs-4">
        <a href="#" class="thumb">
            <img src="https://www.thespruceeats.com/thmb/SalyKjzBU-K1Bv-FTFWnbd6ckjY=/2121x1414/filters:fill(auto,1)/GettyImages-639704020-5c4a63ecc9e77c00017bfebf.jpg">
        </a>
    </div>
</div><!-- form-group End -->
        </form>
    </div>
</div>
<div class="box" id="details">
  <h4>Product Details</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
  <div>
  <h4>menu size</h4>
  <ul>
    <li>half platter</li>
    <li>full platter</li>
    <li>student platter</li>
  </ul>
</div>
</div>
<div id="row-same-height-row" class="row">
  <div class="col-md-6 col-sm-6 ">
    <div class="box same-height headline">
      <h3 class="text-center">You Also Like These Products</h3>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3 col-sm-6">
    <div class="product same-height">
      <a href="details.php">
        <img src="https://th.bing.com/th/id/OIP.2dhr5Ln6cMHIu9SmwE_uBgHaE7?w=270&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Pizza 1">
      </a>
      <div class="text">
        <h3><a href="details.php">PIZZA 1</a></h3>
        <p class="price">BDT 500</p>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="product same-height">
      <a href="details.php">
        <img src="https://th.bing.com/th/id/OIP.2dhr5Ln6cMHIu9SmwE_uBgHaE7?w=270&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Pizza 2">
      </a>
      <div class="text">
        <h3><a href="details.php">PIZZA 2</a></h3>
        <p class="price">BDT 500</p>
      </div>
    </div>
  </div>
    <div class="col-md-3 col-sm-6">
    <div class="product same-height">
      <a href="details.php">
        <img src="https://th.bing.com/th/id/OIP.2dhr5Ln6cMHIu9SmwE_uBgHaE7?w=270&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Pizza 3">
      </a>
      <div class="text">
        <h3><a href="details.php">PIZZA 3</a></h3>
        <p class="price">BDT 500</p>
      </div>
    </div>
  </div>
    <div class="col-md-3 col-sm-6">
    <div class="product same-height">
      <a href="details.php">
        <img src="https://th.bing.com/th/id/OIP.2dhr5Ln6cMHIu9SmwE_uBgHaE7?w=270&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Pizza 4">
      </a>
      <div class="text">
        <h3><a href="details.php">PIZZA 4</a></h3>
        <p class="price">BDT 500</p>
      </div>
    </div>
  </div>
</div>

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