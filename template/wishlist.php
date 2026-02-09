<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css -->
    <?php
    include('../layout/head.php');
    include('../layout/css.php');
    ?>
</head>

<body>

<div class="app-wrapper">
    <!-- app loader -->
    <div class="loader-wrapper">
        <div class="loader_16"></div>
    </div>

    <?php
    include('../layout/sidebar.php');
    ?>

    <div class="app-content">
        <!-- header -->
        <?php
        include('../layout/header.php');
        ?>

        <!-- main section -->
        <main>
            <div class="container-fluid">
                <!-- Breadcrumb start -->
                <div class="row m-1">
                    <div class="col-12 ">
                        <h4 class="main-title">Wishlist</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                                </a>
                            </li>
                            <li>
                                <a class="f-s-14 f-w-500" href="#">E-shop</a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Wishlist</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- Wishlist start -->

                <div class="row wishlist-container">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="product-content-box">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a class="image" href="product.php" target="_blank">
                                                <img alt="" class="pic-1" src="../assets/images/ecommerce/04.jpg">
                                                <img alt="" class="images_box"
                                                     src="../assets/images/ecommerce/03.jpg">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="m-0 f-s-20 f-w-500" href="product_details.php">Jackets</a>
                                            <p class="text-warning">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                        </div>
                                        <p class="text-secondary">Women white jacket</p>
                                        <div class="pricing-box">
                                            <h6>$345 <span>(<del>$467</del>)</span><span class="text-success ms-2">10% off</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="bg-danger-300 h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-danger-dark"></i>
                       </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="product-content-box">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a class="image" href="product.php" target="_blank">
                                                <img alt="" class="pic-1" src="../assets/images/ecommerce/05.jpg">
                                                <img alt="" class="images_box"
                                                     src="../assets/images/ecommerce/06.jpg">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="m-0 f-s-20 f-w-500" href="product_details.php">Hoodie</a>
                                            <p class="text-warning">3.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                        </div>
                                        <p class="text-secondary">Men Solid Hooded Sweatshirt</p>
                                        <div class="pricing-box">
                                            <h6>$300 <span>(<del>$600</del>)</span><span class="text-success ms-2">20% off</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="bg-danger-300 h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-danger-dark"></i>
                       </span>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="product-content-box">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a class="image" href="product.php" target="_blank">
                                                <img alt="" class="pic-1" src="../assets/images/ecommerce/23.jpg">
                                                <img alt="" class="images_box"
                                                     src="../assets/images/ecommerce/24.jpg">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="m-0 f-s-20 f-w-500" href="product_details.php">Jackets</a>
                                            <p class="text-warning">5.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                        </div>
                                        <p class="text-secondary">Sky modern jacket for kid</p>
                                        <div class="pricing-box">
                                            <h6>$300 <span>(<del>$450</del>)</span><span class="text-success ms-2">20% off</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="bg-danger-300 h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-danger-dark"></i>
                       </span>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="product-content-box">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a class="image" href="product.php" target="_blank">
                                                <img alt="" class="pic-1" src="../assets/images/ecommerce/15.jpg">
                                                <img alt="" class="images_box"
                                                     src="../assets/images/ecommerce/16.jpg">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="m-0 f-s-20 f-w-500" href="product_details.php">Jumpsuit</a>
                                            <p class="text-warning">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                        </div>
                                        <p class="text-secondary">Girls Tie-Ups Basic Jumpsuit</p>
                                        <div class="pricing-box">
                                            <h6>$500 <span>(<del>1000</del>)</span><span class="text-success ms-2">50% off</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="bg-danger-300 h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-danger-dark"></i>
                       </span>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="product-content-box">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a class="image" href="product.php" target="_blank">
                                                <img alt="" class="pic-1" src="../assets/images/ecommerce/11.jpg">
                                                <img alt="" class="images_box"
                                                     src="../assets/images/ecommerce/12.jpg">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="m-0 f-s-20 f-w-500" href="product_details.php">Shoes</a>
                                            <p class="text-warning">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                        </div>
                                        <p class="text-secondary">Casual shoes for boys</p>
                                        <div class="pricing-box">
                                            <h6>$345 <span>(<del>$467</del>)</span><span class="text-success ms-2">10% off</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="bg-danger-300 h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-danger-dark"></i>
                       </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="product-content-box">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a class="image" href="product.php" target="_blank">
                                                <img alt="" class="pic-1" src="../assets/images/ecommerce/13.jpg">
                                                <img alt="" class="images_box"
                                                     src="../assets/images/ecommerce/14.jpg">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="m-0 f-s-20 f-w-500" href="product_details.php">Watch</a>
                                            <p class="text-warning">4 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                        </div>
                                        <p class="text-secondary">Designer watch for women</p>
                                        <div class="pricing-box">
                                            <h6>$400 <span>(<del>$800</del>)</span><span class="text-success ms-2">20% off</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="bg-danger-300 h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-danger-dark"></i>
                       </span>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="product-content-box">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a class="image" href="product.php" target="_blank">
                                                <img alt="" class="pic-1" src="../assets/images/ecommerce/09.jpg">
                                                <img alt="" class="images_box"
                                                     src="../assets/images/ecommerce/10.jpg">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="m-0 f-s-20 f-w-500" href="product_details.php">Sandals</a>
                                            <p class="text-warning">5.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                        </div>
                                        <p class="text-secondary">Stylist Sandals for women</p>
                                        <div class="pricing-box">
                                            <h6>$450 <span>(<del>$900</del>)</span><span class="text-success ms-2">45% off</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="bg-danger-300 h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-danger-dark"></i>
                       </span>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="product-content-box">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a class="image" href="product.php" target="_blank">
                                                <img alt="" class="pic-1" src="../assets/images/ecommerce/07.jpg">
                                                <img alt="" class="images_box"
                                                     src="../assets/images/ecommerce/08.jpg">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="m-0 f-s-20 f-w-500" href="product_details.php">Stylish
                                                Bag</a>
                                            <p class="text-warning">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                        </div>
                                        <p class="text-secondary">Girls Stylish Bag</p>
                                        <div class="pricing-box">
                                            <h6>$500 <span>(<del>1000</del>)</span><span class="text-success ms-2">50% off</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <span class="bg-danger-300 h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-danger-dark"></i>
                       </span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- Wishlist end -->
            </div>
        </main>
    </div>

    <!-- tap on top -->
    <div class="go-top">
      <span class="progress-value">
        <i class="ti ti-arrow-up"></i>
      </span>
    </div>

    <!-- footer -->
    <?php
    include('../layout/footer.php');
    ?>
</div>

<!--customizer-->
<div id="customizer"></div>

</body>

<!-- Javascript -->
<?php
include('../layout/script.php');
?>

<!-- js-->
<script src="../assets/js/wishlist.js"></script>

</html>
