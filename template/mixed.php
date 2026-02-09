<!DOCTYPE html>
<html lang="en">

<head>
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/apexcharts/apexcharts.css">

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
                        <h4 class="main-title">Mixed</h4>
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
                                <a class="f-s-14 f-w-500" href="#">Mixed</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->
                <div class="row">
                    <!-- Line & Column Chart start -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5> Line & Column Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="mixed1"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Line & Column Chart end -->
                    <!-- Multiple Y-Axis Chart start -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5> Multiple Y-Axis Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="mixed2"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Multiple Y-Axis Chart end -->
                    <!-- Line & Area Chart start -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5> Line & Area Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="mixed3"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Line & Area Chart end -->
                    <!-- Line, Column & Area Chart start -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5> Line, Column & Area Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="mixed4"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Line, Column & Area Chart end -->
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
<script src="../assets/js/mixed.js"></script>

</html>
