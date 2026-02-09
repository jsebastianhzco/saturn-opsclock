<!DOCTYPE html>
<html lang="en">

<head>
    <!-- vector map css -->
    <link rel="stylesheet" href="../assets/vendor/vector-map/jquery-jvectormap.css">

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
                        <h4 class="main-title">Vector Maps</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a href="#" class="f-s-14 f-w-500">
                    <span>
                      <i class="ph-duotone  ph-map-pin-line f-s-16"></i> Map
                    </span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#" class="f-s-14 f-w-500">Vector Maps</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <div class="row">
                    <!-- world map Markers start -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>world map Markers</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400" id="world-markers"></div>
                            </div>
                        </div>
                    </div>
                    <!-- world map Markers end -->
                    <!-- world Map start -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5> world Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400" id="worldMaps"></div>
                            </div>
                        </div>
                    </div>
                    <!-- world Map end -->
                    <!-- europe Map start -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>europe Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400" id="map"></div>
                            </div>
                        </div>
                    </div>
                    <!-- europe Map end -->
                    <!-- USA Map start -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>USA Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400" id="map2"></div>
                            </div>
                        </div>
                    </div>
                    <!-- USA Map end -->
                    <!-- Africa Map start -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Africa Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400" id="af-map"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Africa Map end -->
                    <!-- Asia Map start -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Asia Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400" id="asi-map"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Asia Map end -->
                    <!-- uk Map start -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>uk Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400" id="uk-map"></div>
                            </div>
                        </div>
                    </div>
                    <!-- uk Map end -->
                    <!-- Russia Map start -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Russia Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400" id="rs-map"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Russia Map end -->
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

<!-- vector map plugin js -->
<script src="../assets/vendor/vector-map/jquery-jvectormap-2.0.5.min.js"></script>
<script src="../assets/vendor/vector-map/jquery-jvectormap-world-mill.js"></script>
<script src="../assets/vendor/vector-map/europe-mill.js"></script>
<script src="../assets/vendor/vector-map/jquery-jvectormap-us-lcc.js"></script>
<script src="../assets/vendor/vector-map/jvectormap-es-mill.js"></script>
<script src="../assets/vendor/vector-map/africa-mill.js"></script>
<script src="../assets/vendor/vector-map/asia-mill.js"></script>
<script src="../assets/vendor/vector-map/uk_countries-mill.js"></script>
<script src="../assets/vendor/vector-map/ru-mill.js"></script>

<!-- map js -->
<script src="../assets/js/vector-map.js"></script>


</html>
