<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css -->
    <?php
    include('../layout/head.php');
    include('../layout/css.php');
    ?>

    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/apexcharts/apexcharts.css">
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
                        <h4 class="main-title">Boxplot</h4>
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
                                <a href="#" class="f-s-14 f-w-500">Boxplot</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->
                <div class="row">
                    <!-- Basic Box & Whisker Chart start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Basic Box & Whisker Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="boxplot1"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Box & Whisker Chart end -->
                    <!-- BoxPlot with Scatter Chart start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> BoxPlot with Scatter Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="boxplot2"></div>
                            </div>
                        </div>
                    </div>
                    <!-- BoxPlot with Scatter Chart end -->
                    <!-- Horizontal BoxPlot Chart start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Horizontal BoxPlot Chart</h5>
                            </div>
                            <div class="card-body">
                                <div id="boxplot3"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Horizontal BoxPlot Chart end -->
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
<script src="../assets/js/boxplot.js"></script>
</html>
