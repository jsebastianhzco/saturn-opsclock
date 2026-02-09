<!DOCTYPE html>
<html lang="en">

<head>
    <!-- slick css -->
    <link rel="stylesheet" href="../assets/vendor/slick/slick.css">
    <link rel="stylesheet" href="../assets/vendor/slick/slick-theme.css">

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
                        <h4 class="main-title">Pricing</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                    <span>
                      <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                    </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Pricing</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- Pricing start -->
                <div class="row">

                    <!-- Pricing Plans start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Pricing Plans</h5>
                            </div>
                            <div class="card-body">
                                <div class="row flip-pricing-container app-arrow">
                                    <div class="col-xl-3">
                                        <div class="flip-pricing">
                                            <div class="flip-card">
                                                <div class="front-pricing card">
                                                    <div class="pricing-header">
                                                        <h6 class="f-w-500 text-dark">Basic Plans</h6>
                                                        <img alt="" class="w-60 h-60"
                                                             src="../assets/images/pricing/1.png">
                                                    </div>
                                                    <div class="app-divider-v justify-content-center m-0">
                                                        <p class="price f-w-700 text-secondary">$20<span
                                                                    class="f-w-500 f-s-12">/per Month</span></p>
                                                    </div>
                                                    <div class="pricing-content">
                                                        <ul class="pricing-list">
                                                            <li>5 Free Websites</li>
                                                            <li>1 GB Hard disk Storage</li>
                                                            <li>1 fields</li>
                                                            <li>10 User</li>
                                                            <li>Email Support</li>
                                                        </ul>
                                                        <button class="btn btn-secondary w-100" type="button">Buy
                                                            Plans
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="back-pricing card">
                                                    <div class="pricing-header">
                                                        <h6 class="f-w-500 text-dark">Basic Plans</h6>
                                                        <img alt="" class="w-60 h-60"
                                                             src="../assets/images/pricing/9.png">
                                                    </div>
                                                    <div class="app-divider-v justify-content-center m-0">
                                                        <p class="price f-w-700 text-secondary">$80<span
                                                                    class="f-w-500 f-s-12">/per Yearly</span></p>
                                                    </div>
                                                    <div class="pricing-content">
                                                        <ul class="pricing-list">
                                                            <li>10 Free Websites</li>
                                                            <li>1 GB Hard disk Storage</li>
                                                            <li>2 fields</li>
                                                            <li>15 User</li>
                                                            <li>Email Support</li>
                                                        </ul>
                                                        <button class="btn btn-secondary w-100" type="button">Buy
                                                            Plans
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="flip-pricing">
                                            <div class="flip-card">
                                                <div class="front-pricing card">
                                                    <div class="box-ribbon box-right">
                                                        <div class="ribbonbox box-right ribbon-primary">Best</div>
                                                    </div>
                                                    <div class="pricing-header">
                                                        <h6 class="f-w-500 text-dark">Business Plans</h6>
                                                        <img alt="" class="w-60 h-60"
                                                             src="../assets/images/pricing/2.png">
                                                    </div>
                                                    <div class="app-divider-v justify-content-center m-0">
                                                        <p class="price f-w-700 text-primary">$80<span
                                                                    class="f-w-500 f-s-12">/per Month</span></p>
                                                    </div>
                                                    <div class="pricing-content">
                                                        <ul class="pricing-list">
                                                            <li>40 Free Websites</li>
                                                            <li>20 GB Hard disk Storage</li>
                                                            <li>50 fields</li>
                                                            <li>25 User</li>
                                                            <li>Email Support</li>
                                                        </ul>
                                                        <button class="btn btn-primary w-100" type="button">Buy
                                                            Plans
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="back-pricing card">
                                                    <div class="pricing-header">
                                                        <h6 class="f-w-500 text-dark">Business Plans</h6>
                                                        <img alt="" class="w-60 h-60"
                                                             src="../assets/images/pricing/8.png">
                                                    </div>
                                                    <div class="app-divider-v justify-content-center m-0">
                                                        <p class="price f-w-700 text-primary">$100<span
                                                                    class="f-w-500 f-s-12">/per Yearly</span></p>
                                                    </div>
                                                    <div class="pricing-content">
                                                        <ul class="pricing-list">
                                                            <li>40 Free Websites</li>
                                                            <li>20 GB Hard disk Storage</li>
                                                            <li>50 fields</li>
                                                            <li>30 User</li>
                                                            <li>Email Support</li>
                                                        </ul>
                                                        <button class="btn btn-primary w-100" type="button">Buy
                                                            Plans
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="flip-pricing">
                                            <div class="flip-card">
                                                <div class="front-pricing card">
                                                    <div class="pricing-header">
                                                        <h6 class="f-w-500 text-dark">Premium Plans</h6>
                                                        <img alt="" class="w-60 h-60"
                                                             src="../assets/images/pricing/3.png">
                                                    </div>
                                                    <div class="app-divider-v justify-content-center m-0">
                                                        <p class="price f-w-700 text-secondary">$200<span
                                                                    class="f-w-500 f-s-12">/per Month</span></p>
                                                    </div>
                                                    <div class="pricing-content">
                                                        <ul class="pricing-list">
                                                            <li>Unlimited Websites</li>
                                                            <li>40 GB Hard disk Storage</li>
                                                            <li>Unlimited fields</li>
                                                            <li>40 User</li>
                                                            <li>Email Support</li>
                                                        </ul>
                                                        <button class="btn btn-secondary w-100" type="button">Buy
                                                            Plans
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="back-pricing card">
                                                    <div class="box-ribbon box-right">
                                                        <div class="ribbonbox box-right ribbon-primary">Best</div>
                                                    </div>
                                                    <div class="pricing-header">
                                                        <h6 class="f-w-500 text-dark">Basic Plans</h6>
                                                        <img alt="" class="w-60 h-60"
                                                             src="../assets/images/pricing/7.png">
                                                    </div>
                                                    <div class="app-divider-v justify-content-center m-0">
                                                        <p class="price f-w-700 text-secondary">$500<span
                                                                    class="f-w-500 f-s-12">/per Yearly</span></p>
                                                    </div>
                                                    <div class="pricing-content">
                                                        <ul class="pricing-list">
                                                            <li>Unlimited Websites</li>
                                                            <li>40 GB Hard disk Storage</li>
                                                            <li>Unlimited fields</li>
                                                            <li>40 User</li>
                                                            <li>Email Support</li>
                                                        </ul>
                                                        <button class="btn btn-secondary w-100" type="button">Buy
                                                            Plans
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="flip-pricing">
                                            <div class="flip-card">
                                                <div class="front-pricing card">
                                                    <div class="pricing-header">
                                                        <h6 class="f-w-500 text-dark">Golden Premium Plans</h6>
                                                        <img alt="" class="w-60 h-60"
                                                             src="../assets/images/pricing/15.png">
                                                    </div>
                                                    <div class="app-divider-v justify-content-center m-0">
                                                        <p class="price f-w-700 text-primary">$500<span
                                                                    class="f-w-500 f-s-12">/per Month</span></p>
                                                    </div>
                                                    <div class="pricing-content">
                                                        <ul class="pricing-list">
                                                            <li>Unlimited Websites</li>
                                                            <li>40 GB Hard disk Storage</li>
                                                            <li>Unlimited fields</li>
                                                            <li>Unlimited User</li>
                                                            <li>Email Support</li>
                                                        </ul>
                                                        <button class="btn btn-primary w-100" type="button">Buy
                                                            Plans
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="back-pricing card">
                                                    <div class="pricing-header">
                                                        <h6 class="f-w-500 text-dark">Basic Plans</h6>
                                                        <img alt="" class="w-60 h-60"
                                                             src="../assets/images/pricing/14.png">
                                                    </div>
                                                    <div class="app-divider-v justify-content-center m-0">
                                                        <p class="price f-w-700 text-primary">$1000<span
                                                                    class="f-w-500 f-s-12">/per Yearly</span></p>
                                                    </div>
                                                    <div class="pricing-content">
                                                        <ul class="pricing-list">
                                                            <li>Unlimited Websites</li>
                                                            <li>40 GB Hard disk Storage</li>
                                                            <li>Unlimited fields</li>
                                                            <li>Unlimited User</li>
                                                            <li>Email Support</li>
                                                        </ul>
                                                        <button class="btn btn-primary w-100" type="button">Buy
                                                            Plans
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing Plans end -->

                    <!-- Simple Pricing Plans start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Simple Pricing Plans</h5>
                            </div>
                            <div class="card-body">
                                <div class="row simple-pricing-container app-arrow">
                                    <div class="col-md-6 col-xl-3 p-3">
                                        <div class="simple-pricing-card card">
                                            <div class="card-body">
                                                <div class="simple-price-header text-center">
                                                    <h4 class="mb-0">Basic</h4>
                                                </div>
                                                <div class="simple-price-body">
                                                    <div class="simple-price-value text-center b-r-5 bg-light-success d-block ">
                                                        <span class="f-s-24 f-w-600 text-center">$9.99/</span>
                                                        <span class=" f-s-12 f-w-600">per month</span>
                                                    </div>

                                                    <div class="simple-price-content">
                                                        <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">100 request per day</p>
                                                        </div>
                                                        <div class="app-divider-v mt-2 mb-2"></div>
                                                        <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">Free trial features access </p>
                                                        </div>
                                                        <div class="app-divider-v mt-2 mb-2"></div>
                                                        <div class="d-flex">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">Limited API access </p>
                                                        </div>
                                                        <button class="btn btn-success b-r-5 w-100 p-2"
                                                                type="button">Get Started
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 p-3">
                                        <div class="simple-pricing-card card">
                                            <div class="card-body">
                                                <div class="simple-price-header text-center">
                                                    <h4 class="mb-0">Primium</h4>
                                                </div>
                                                <div class="simple-price-body">
                                                    <div class="simple-price-value text-center b-r-5 bg-light-secondary d-block ">
                                                        <span class="f-s-24 f-w-600 text-center">$9.99/</span>
                                                        <span class=" f-s-12 f-w-600">per month</span>
                                                    </div>

                                                    <div class="simple-price-content">
                                                        <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">Unlimited Ai generation</p>
                                                        </div>
                                                        <div class="app-divider-v mt-2 mb-2"></div>
                                                        <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">Full new features access </p>
                                                        </div>
                                                        <div class="app-divider-v mt-2 mb-2"></div>
                                                        <div class="d-flex">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">Priority support </p>
                                                        </div>
                                                        <button class="btn btn-secondary b-r-5 w-100 p-2"
                                                                type="button">Get
                                                            Started
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 p-3">
                                        <div class="simple-pricing-card card">
                                            <div class="card-body">
                                                <div class="simple-price-header text-center">
                                                    <h4 class="mb-0">Enterprice</h4>
                                                </div>
                                                <div class="simple-price-body">
                                                    <div class="simple-price-value text-center b-r-5 bg-light-success d-block ">
                                                        <span class="f-s-24 f-w-600 text-center">$9.99/</span>
                                                        <span class=" f-s-12 f-w-600">per month</span>
                                                    </div>

                                                    <div class="simple-price-content">
                                                        <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">Custome deployment</p>
                                                        </div>
                                                        <div class="app-divider-v mt-2 mb-2"></div>
                                                        <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">Comprahansive usages</p>
                                                        </div>
                                                        <div class="app-divider-v mt-2 mb-2"></div>
                                                        <div class="d-flex">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">Training models</p>
                                                        </div>
                                                        <button class="btn btn-success b-r-5 w-100 p-2"
                                                                type="button">Get Started
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 p-3">
                                        <div class="simple-pricing-card card">
                                            <div class="card-body">
                                                <div class="simple-price-header text-center">
                                                    <h4 class="mb-0">Profetional</h4>
                                                </div>
                                                <div class="simple-price-body">
                                                    <div class="simple-price-value text-center b-r-5 bg-light-secondary d-block ">
                                                        <span class="f-s-24 f-w-600 text-center">$9.99/</span>
                                                        <span class=" f-s-12 f-w-600">per month</span>
                                                    </div>

                                                    <div class="simple-price-content">
                                                        <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">Access to all features</p>
                                                        </div>
                                                        <div class="app-divider-v mt-2 mb-2"></div>
                                                        <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">Priority email support</p>
                                                        </div>
                                                        <div class="app-divider-v mt-2 mb-2"></div>
                                                        <div class="d-flex">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                            <p class="ms-2 mb-0">Weekly backups</p>
                                                        </div>
                                                        <button class="btn btn-secondary b-r-5 w-100 p-2"
                                                                type="button">Get
                                                            Started
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Simple Pricing Plans end -->

                    <!-- Compare plans start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Compare plans</h5>
                            </div>
                            <div class="card-body">
                                <div class="pricing-table table-responsive">
                                    <table class="table table-bottom-border table-striped align-middle text-center">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Free</th>
                                            <th>Pro</th>
                                            <th>Enterprise</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th class="text-start f-w-500" scope="row">Public</th>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                        </tr>
                                        <tr>
                                            <th class="text-start f-w-500" scope="row">Private</th>
                                            <td><i class="ph-duotone  ph-x-circle text-danger f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                        </tr>
                                        </tbody>

                                        <tbody>
                                        <tr>
                                            <th class="text-start f-w-500" scope="row">Permissions</th>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                        </tr>
                                        <tr>
                                            <th class="text-start f-w-500" scope="row">Sharing</th>
                                            <td><i class="ph-duotone  ph-x-circle text-danger f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                        </tr>
                                        <tr>
                                            <th class="text-start f-w-500" scope="row">Unlimited members</th>
                                            <td><i class="ph-duotone  ph-x-circle text-danger f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                        </tr>
                                        <tr>
                                            <th class="text-start f-w-500" scope="row">Extra security</th>
                                            <td><i class="ph-duotone  ph-x-circle text-danger f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-x-circle text-danger f-s-24"></i></td>
                                            <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Compare plans start -->
                </div>
                <!-- Pricing start -->
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

<!-- slick-file -->
<script src="../assets/vendor/slick/slick.min.js"></script>

<!-- js -->
<script src="../assets/js/pricing.js"></script>

</html>
