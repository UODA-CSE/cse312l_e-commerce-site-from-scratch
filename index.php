<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_GET['action']) && $_GET['action'] == "add") {
    $id = intval($_GET['id']);
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    } else {
        $sql_p = "SELECT * FROM products WHERE id={$id}";
        $query_p = mysqli_query($con, $sql_p);
        if (mysqli_num_rows($query_p) != 0) {
            $row_p = mysqli_fetch_array($query_p);
            $_SESSION['cart'][$row_p['id']] = array("quantity" => 1, "price" => $row_p['productPrice']);
            header('location:index.php');
        } else {
            $message = "Product ID is invalid";
        }
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Online Furniture Shop</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/green.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/config.css">
    <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
</head>

<body class="cnt-home">
    <header class="header-style-1">
        <?php include('includes/top-header.php'); ?>
        <?php include('includes/main-header.php'); ?>
        <?php include('includes/menu-bar.php'); ?>
    </header>
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="furniture-container homepage-container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 homebanner-holder">
                        <div id="hero" class="homepage-slider3">
                            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                                <div class="full-width-slider">
                                    <div class="item"
                                        style="background-image: url(assets/images/sliders/slider5.jpeg);">
                                        <!-- /.container-fluid -->
                                    </div><!-- /.item -->
                                </div><!-- /.full-width-slider -->
                                <div class="full-width-slider">
                                    <div class="item" style="background-image: url(assets/images/sliders/slider1.png);">
                                        <!-- /.container-fluid -->
                                    </div><!-- /.item -->
                                </div><!-- /.full-width-slider -->
                                <div class="full-width-slider">
                                    <div class="item full-width-slider"
                                        style="background-image: url(assets/images/sliders/slider2.png);">
                                    </div><!-- /.item -->
                                </div><!-- /.full-width-slider -->
                                <div class="full-width-slider">
                                    <div class="item full-width-slider"
                                        style="background-image: url(assets/images/sliders/slider3.png);">
                                    </div><!-- /.item -->
                                </div><!-- /.full-width-slider -->
                                <div class="full-width-slider">
                                    <div class="item full-width-slider"
                                        style="background-image: url(assets/images/sliders/slider4.png);">
                                    </div><!-- /.item -->
                                </div><!-- /.full-width-slider -->
                            </div><!-- /.owl-carousel -->
                        </div>
                    </div><!-- /.homebanner-holder -->
                </div><!-- /.row -->

                <div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">

                    <div class="more-info-tab clearfix">
                        <h3 class="new-product-title pull-left">Latest items</h3>
                    </div>
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                    <?php
                                    $ret = mysqli_query($con, "select * from products order by id desc limit 5");
                                    while ($row = mysqli_fetch_array($ret)) {
                                    ?>

                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">

                                                <div class="product-image">
                                                    <div class="image">
                                                        <a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>">
                                                            <img src="admin/productimages/<?php echo htmlentities($row['productImage']); ?>"
                                                                data-echo="admin/productimages/<?php echo htmlentities($row['productImage']); ?>"
                                                                width="180" height="300" alt=""></a>
                                                    </div><!-- /.image -->
                                                </div><!-- /.product-image -->
                                                <div class="product-info text-left">

                                                    <h3 class="name"><a
                                                            href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['productName']); ?></a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price">
                                                            Rs.<?php echo htmlentities($row['productPrice']); ?>
                                                        </span>
                                                        <span
                                                            class="price-before-discount">Tk.<?php echo htmlentities($row['productPriceBeforeDiscount']); ?>
                                                        </span>
                                                    </div><!-- /.product-price -->
                                                </div><!-- /.product-info -->
                                                <div class="action"><a
                                                        href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
                                                        class="lnk btn btn-primary">Add to Cart</a></div>
                                            </div><!-- /.product -->
                                        </div><!-- /.products -->
                                    </div><!-- /.item -->
                                    <?php } ?>
                                </div><!-- /.home-owl-carousel -->
                            </div><!-- /.product-slider -->
                        </div>
                    </div>
                </div>
                <?php include('includes/brands-slider.php'); ?>
            </div>
        </div>
        <?php include('includes/footer.php'); ?>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/echo.min.js"></script>
        <script src="assets/js/jquery.easing-1.3.min.js"></script>
        <script src="assets/js/bootstrap-slider.min.js"></script>
        <script src="assets/js/jquery.rateit.min.js"></script>
        <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js">
        </script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>

</body>

</html>