<?php
include("includes/db.php");

if (isset($_POST['submit'])) {

    // Get product details from the form
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];

    // Handle image uploads
    $product_img1 = time() . '_' . $_FILES['product_img1']['name'];
    $product_img2 = time() . '_' . $_FILES['product_img2']['name'];
    $product_img3 = time() . '_' . $_FILES['product_img3']['name'];

    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];

    // Check if files were uploaded successfully
    if (move_uploaded_file($temp_name1, "product_images/$product_img1") && 
        move_uploaded_file($temp_name2, "product_images/$product_img2") && 
        move_uploaded_file($temp_name3, "product_images/$product_img3")) {

        // Insert the product into the database using a prepared statement
        $insert_product = $con->prepare("INSERT INTO products (p_cat_id, cat_id, date, product_title, product_img1, product_img2, product_img3, product_price, product_desc, product_keywords) 
        VALUES (?, ?, NOW(), ?, ?, ?, ?, ?, ?, ?)");
        
        // Bind parameters to the prepared statement
        $insert_product->bind_param("iisssssss", $product_cat, $cat, $product_title, $product_img1, $product_img2, $product_img3, $product_price, $product_desc, $product_keywords);
        
        // Execute the query
        $insert_product->execute();

        if ($insert_product) {
            echo "<script>alert('Product Inserted Successfully');</script>";
            echo "<script>window.location.href = 'insert_product.php';</script>"; // Redirect to the same page (create a new insert form)
        } else {
            echo "<script>alert('Error inserting product into the database');</script>";
        }

    } else {
        echo "<script>alert('Failed to upload product images');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Product</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.2/tinymce.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> Dashboard / Insert Product
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money"></i> Insert Product
                    </h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Title</label>
                            <div class="col-md-6">
                                <input type="text" name="product_title" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Category</label>
                            <div class="col-md-6">
                                <select name="product_cat" class="form-control" required>
                                    <option value="">Select a product category</option>
                                    <?php
                                    $get_p_cats = "SELECT * FROM product_category";
                                    $run_p_cats = mysqli_query($con, $get_p_cats);

                                    while ($row = mysqli_fetch_array($run_p_cats)) {
                                        $id = $row['p_cat_id'];
                                        $cat_title = $row['p_cat_title'];
                                        echo "<option value='$id'>$cat_title</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Categories</label>
                            <div class="col-md-6">
                                <select name="categories" class="form-control" required>
                                    <option value="">Select categories</option>
                                    <?php
                                    $get_cats = "SELECT * FROM categories";
                                    $run_cats = mysqli_query($con, $get_cats);

                                    while ($row = mysqli_fetch_array($run_cats)) {
                                        $id = $row['cat_id'];
                                        $cat_title = $row['cat_title'];
                                        echo "<option value='$id'>$cat_title</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Image 1</label>
                            <div class="col-md-6">
                                <input type="file" name="product_img1" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Image 2</label>
                            <div class="col-md-6">
                                <input type="file" name="product_img2" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Image 3</label>
                            <div class="col-md-6">
                                <input type="file" name="product_img3" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Price</label>
                            <div class="col-md-6">
                                <input type="text" name="product_price" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Keywords</label>
                            <div class="col-md-6">
                                <input type="text" name="product_keywords" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Description</label>
                            <div class="col-md-6">
                                <textarea name="product_desc" class="form-control" rows="6"  cols="19" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" name="submit" class="btn btn-primary form-control">Insert Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>

   