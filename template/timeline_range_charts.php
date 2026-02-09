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
                        <h4 class="main-title">Timeline & Range Charts</h4>
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
                                <a href="#" class="f-s-14 f-w-500">Timeline & Range Charts</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->
                <div class="row">
                    <!-- Basic Timeline Chart start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Basic Timeline Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="timeline1"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Timeline Chart end -->
                    <!-- Different color for each bar start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Different color for each bar</h5>
                            </div>
                            <div class="card-body">
                                <div id="timeline2"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Different color for each bar end -->
                    <!-- Multi-series Timeline start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Multi-series Timeline</h5>
                            </div>
                            <div class="card-body">
                                <div id="timeline3"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Multi-series Timeline end -->
                    <!-- Advanced Timeline (Multiple range) start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Advanced Timeline (Multiple range)</h5>
                            </div>
                            <div class="card-body">
                                <div id="timeline4"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Advanced Timeline (Multiple range) end -->
                    <!-- Timeline – Grouped Rows start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Timeline – Grouped Rows</h5>
                            </div>
                            <div class="card-body">
                                <div id="timeline5"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Timeline – Grouped Rows end -->
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
<script src="../assets/vendor/apexcharts/timelinechart/moment.min.js"></script>


<!-- js-->
<script src="../assets/js/timeline_range_charts.js"></script>

</html>
