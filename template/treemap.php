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
                        <h4 class="main-title">Treemap</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-chart-pie-slice f-s-16"></i> Chart
                      </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="f-s-14 f-w-500">
                      <span>
                        Apexcharts
                      </span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#" class="f-s-14 f-w-500">Treemap</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->
                <div class="row">
                    <!-- Basic Treemap Chart start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Basic Treemap Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="treemap1"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Treemap Chart end -->
                    <!-- Multi-Dimensional Treemap Chart start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Multi-Dimensional Treemap Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="treemap2"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Multi-Dimensional Treemap Chart end -->
                    <!-- Distributed Treemap Chart start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Distributed Treemap Chart (set color for each cell)</h5>
                            </div>
                            <div class="card-body">
                                <div id="treemap3"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Distributed Treemap Chart end -->
                    <!-- Treemap Chart with Color ranges start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Treemap Chart with Color ranges</h5>
                            </div>
                            <div class="card-body">
                                <div id="treemap4"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Treemap Chart with Color ranges end -->
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
<script src="../assets/js/treemap.js"></script>

</html>
