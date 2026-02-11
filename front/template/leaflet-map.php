<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Leaflet map css -->
    <link rel="stylesheet" href="../assets/vendor/leafletmaps/leaflet.css">

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
                        <h4 class="main-title">Leaflet Map</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-map-pin-line f-s-16"></i> Map
                      </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Leaflet Map</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <div class="row">
                    <!-- Leaflet on Mobile Map start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Leaflet on Mobile Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-280 rounded" id="mobilemap"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Leaflet on Mobile Map end  -->

                    <!-- Accessible maps start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Accessible maps</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-280 rounded" id="accessiblemap"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Accessible maps end  -->

                    <!-- Markers, Circles and Polygons start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Markers, Circles and Polygons</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-280 rounded" id="markersmap"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Markers, Circles and Polygons end  -->

                    <!-- Interactive Choropleth Map start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Interactive Choropleth Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-280 rounded" id="interactivemap"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Interactive Choropleth Map end  -->

                    <!-- Markers With Custom Icons start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Markers With Custom Icons</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-280 rounded" id="customiconsmap"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Markers With Custom Icons end  -->

                    <!-- Layer Groups and Layers Control start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Layer Groups and Layers Control</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-280 rounded" id="layersmap"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Layer Groups and Layers Control end  -->
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
<!--  Leaflet Maps js -->
<script src="../assets/vendor/leafletmaps/leaflet.js"></script>

<!--js-->
<script src="../assets/js/leaflet-map.js"></script>

</html>
