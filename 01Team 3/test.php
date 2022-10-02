<?php
// echo $_GET['id'];
$Rproduct_id = $_GET['id'];





require 'dbcon.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>




<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Single Product :: Ruby - Jewelry Store e-Commerce Bootstrap 4 Template</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" />

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="assets/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <?php
    // $query = "SELECT * FROM `proudcts` WHERE product_id = $Rproduct_id  ";
    // $conn->query($query);

    $query = "SELECT * FROM proudcts WHERE product_id = '$Rproduct_id' ";
    $conn->query($query);

    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {

    ?>

            <!--== Page Content Wrapper Start ==-->
            <div id="page-content-wrapper" class="p-9">
                <div class="ruby-container">
                    <div class="row">
                        <!-- Single Product Page Content Start -->
                        <div class="col-lg-12">
                            <div class="single-product-page-content">
                                <div class="row">
                                    <!-- Product Thumbnail Start -->
                                    <div class="col-lg-5">
                                        <div class="product-thumbnail-wrap">
                                            <div class="product-thumb-carousel owl-carousel">
                                                <div class="single-thumb-item">
                                                    <a href="single-product.html"><img class="img-fluid" src="assets/img/<?php echo $row['img']?>" alt="Product" /></a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Thumbnail End -->



                                    <!-- Product Details Start -->
                                    <div class="col-lg-7 mt-5 mt-lg-0">
                                        <div class="product-details">
                                            <h2><a href="single-product.html"></a><?php echo $row['product_name']; ?></h2>



                                            <span class="price">$ <?php echo $row['price']; ?></span>

                                            <div class="product-info-stock-sku">
                                                <span class="product-stock-status"><?php echo $row['stock']; ?> In Stock</span>
                                                <span class="product-sku-status ml-5"><strong>SKU</strong> MH03</span>
                                            </div>

                                            <p class="products-desc"> <?php echo $row['description']; ?></p>


                                    <?php    }
                            }; ?>


                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="quantity-field">
                                            <label for="qty">Qty</label>
                                            <input type="number" id="qty" min="1" max="100" value="1" />
                                        </div>

                                        <a href="single-product.html" class="btn btn-add-to-cart">Add to Cart</a>
                                    </div>

                                
                                        </div>
                                    </div>
                                    <!-- Product Details End -->
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Product Full Description Start -->
                                        <div class="product-full-info-reviews">
                                            <!-- Single Product tab Menu -->

                                            <!-- Single Product tab Menu -->

                                            <!-- Single Product tab Content -->
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="description">
                                                    <p>Stay comfortable and stay in the race no matter what the weather's up to. The
                                                        Bruno Compete Hoodie's water-repellent exterior shields you from the
                                                        elements, while advanced fabric technology inside wicks moisture to keep you
                                                        dry.Stay comfortable and stay in the race no matter what the weather's up
                                                        to. The Bruno Compete Hoodie's water-repellent exterior shields you from the
                                                        elements, while advanced fabric technology inside wicks moisture to keep you
                                                        dry.Stay comfortable and stay in the race no matter what the weather's up
                                                        to. The Bruno Compete Hoodie's water-repellent exterior shields you from the
                                                        elements, while advanced fabric technology inside wicks moisture to keep you
                                                        dry.</p>
                                                </div>

                                                <div class="tab-pane fade" id="reviews">
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <div class="product-ratting-wrap">
                                                                <div class="pro-avg-ratting">
                                                                    <h4>4.5 <span>(Overall)</span></h4>
                                                                    <span>Based on 9 Comments</span>
                                                                </div>
                                                                <div class="ratting-list">
                                                                </div>
                                                                <div class="rattings-wrapper">

                                                                    <div class="sin-rattings">
                                                                        <div class="ratting-author">
                                                                            <h3>Cristopher Lee</h3>

                                                                        </div>
                                                                    </div>
                                                                    <p>enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                                        odit aut fugit, sed quia res eos qui ratione voluptatem
                                                                        sequi Neque porro quisquam est, qui dolorem ipsum quia
                                                                        dolor sit amet, consectetur, adipisci veli</p>
                                                                </div>

                                                            </div>
                                                            <div class="ratting-form-wrapper fix">
                                                                <h3>Add your Comments</h3>
                                                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                                                    <div class="ratting-form row">
                                                                        <div class="col-12 mb-4">
                                                                            <h5>Rating:</h5>

                                                                        </div>
                                                                        <div class="col-md-6 col-12 mb-4">
                                                                            <label for="name">Name:</label>
                                                                            <input name="name" id="name" placeholder="Name" type="text">
                                                                        </div>
                                                                        <div class="col-md-6 col-12 mb-4">
                                                                            <label for="email">Email:</label>
                                                                            <input name="email" id="email" placeholder="Email" type="text">
                                                                        </div>
                                                                        <div class="col-12 mb-4">
                                                                            <label for="your-review">Your Review:</label>
                                                                            <textarea name="review" id="your-review" placeholder="Write a review"></textarea>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <!-- <button type="submit" name="save" class="btn btn-primary">Save </button> -->
                                                                            <input name="save" value="add review" type="submit">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product tab Content -->
                                    </div>
                                    <!-- Product Full Description End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product Page Content End -->
                </div>
            </div>
            </div>
            <!--== Page Content Wrapper End ==-->




            <!--=======================Javascript============================-->
            <!--=== Jquery Min Js ===-->
            <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
            <!--=== Jquery Migrate Min Js ===-->
            <script src="assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
            <!--=== Popper Min Js ===-->
            <script src="assets/js/vendor/popper.min.js"></script>
            <!--=== Bootstrap Min Js ===-->
            <script src="assets/js/vendor/bootstrap.min.js"></script>
            <!--=== Plugins Min Js ===-->
            <script src="assets/js/plugins.js"></script>

            <!--=== Active Js ===-->
            <script src="assets/js/active.js"></script>
</body>

</html>