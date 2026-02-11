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
                        <h4 class="main-title">Pie</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-chart-pie-slice f-s-16"></i> Chart
                      </span>
                                </a>
                            </li>
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        Apexcharts
                      </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Pie</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->
                <div class="row">
                    <!-- Simple Pie Chart start -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card equal-card ">
                            <div class="card-header">
                                <h5> Simple Pie Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="pie1"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Simple Pie Chart end -->
                    <!-- updating Donut Chart start -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Updating Donut Chart</h5>
                            </div>
                            <div class="card-body">
                                <div class="updating-btn-box actions text-center">
                                    <button class="btn btn-sm btn-primary" id="add" onclick="appendData(this)">
                                        + ADD
                                    </button>

                                    <button class="btn btn-sm btn-danger" id="remove">
                                        - REMOVE
                                    </button>

                                    <button class="btn btn-sm btn-success" id="reset">
                                        RESET
                                    </button>
                                </div>
                                <div id="chart9"></div>
                            </div>
                        </div>
                    </div>
                    <!-- updating Donut Chart end -->
                    <!-- simple Donut Chart start -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Updating Donut Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="chart3"></div>
                            </div>
                        </div>
                    </div>
                    <!-- simple Donut Chart end -->
                    <!-- simple Donut Chart start -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Patterned Donut Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="chart4"></div>
                            </div>
                        </div>
                    </div>
                    <!-- simple Donut Chart end -->
                    <!-- simple Donut Chart start -->
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Pie Chart with Image Fill</h5>
                            </div>
                            <div class="card-body">
                                <div id="chart5"></div>
                            </div>
                        </div>
                    </div>
                    <!-- simple Donut Chart end -->


                </div>
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

<!-- apexcharts-->
<script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>

<!-- js-->
<script src="../assets/js/pie_charts.js"></script>

</html>
