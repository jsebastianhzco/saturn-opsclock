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
                        <h4 class="main-title">Google Maps</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-map-pin-line f-s-16"></i> Map
                      </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Google Maps</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <div class="row">
                    <!-- Terrain Type Map start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Terrain Type Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400 rounded" id="maptypes"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Terrain Type Map start  -->

                    <!-- satellite Type Map start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>satellite Type Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400 rounded" id="maptypes1"></div>
                            </div>
                        </div>
                    </div>
                    <!-- satellite Type Map end  -->


                    <!-- Polygons map start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Polygons</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400 rounded" id="map-types"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Polygons map end  -->

                    <!-- Fusion Tables layers start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Fusion Tables layers</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400 rounded" id="maplayers"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Fusion Tables layers end  -->


                    <!-- Google Map start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Google Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400 rounded" id="g-map"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Google Map end  -->
                    <!-- Markers Map start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Markers Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400 rounded" id="mapmarkers"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Markers Map end  -->


                    <!-- Overlays Map start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Overlays Map</h5>
                            </div>
                            <div class="card-body">
                                <div class="w-100 h-400 rounded" id="mapOverlays"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Overlays Map end  -->

                    <!-- Street View Map start  -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Street View Map</h5>
                            </div>

                            <div class="card-body">
                                <div class="w-100 h-400 rounded" id="g-streetmap"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Street View Map end  -->


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

<!-- google maps api -->
<script src="https://maps.google.com/maps/api/js"></script>

<!--  gmaps plugins -->
<script src="../assets/vendor/googlemap/gmaps.js"></script>

<!-- js -->
<script src="../assets/js/google-map.js"></script>

</html>
