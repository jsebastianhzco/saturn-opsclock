<!DOCTYPE html>
<html lang="en">

<head>

    <!-- glight css -->
    <link rel="stylesheet" href="../assets/vendor/glightbox/glightbox.min.css">

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
                        <h4 class="main-title">Gallery</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                    <span>
                      <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                    </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- Gallery start -->
                <div class="row">
                    <div class="col-12 gallery-grid-container">
                        <div class="row ">
                            <div class="col-sm-6 col-lg-4">
                                <div class="imagebox">
                                    <a class="glightbox" data-glightbox="type: image; zoomable: true;"
                                       href="../assets/images/gallary/01.jpg">
                                        <img alt="image" class="img-fluid rounded"
                                             src="../assets/images/gallary/01.jpg">
                                    </a>
                                    <div class="caption-content">
                                        <p>Simple Image</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="imagebox">
                                    <a class="glightbox"
                                       data-glightbox='title:Description Bottom; description: You can set the position of the description '
                                       href="../assets/images/gallary/02.jpg">
                                        <img alt="image" class="img-fluid rounded"
                                             src="../assets/images/gallary/02.jpg">
                                    </a>
                                    <div class="caption-content">
                                        <p>Image With Bottom Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-6 col-sm-3 col-lg-6">
                                        <div class="imagebox">
                                            <a class="glightbox"
                                               data-glightbox='title:Description Right; description: You can set the position of the description ;descPosition: right;'
                                               href="../assets/images/gallary/03.jpg">
                                                <img alt="image" class="img-fluid w-100 rounded"
                                                     src="../assets/images/gallary/03.jpg">
                                            </a>
                                            <div class="caption-content">
                                                <p>Image With Right Description</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-3 col-lg-6">
                                        <div class="imagebox">
                                            <a class="glightbox"
                                               data-glightbox="title: Description Left;  description: You can set the position of the description; descPosition: left;"
                                               href="../assets/images/gallary/04.jpg">
                                                <img alt="image" class="img-fluid w-100 rounded"
                                                     src="../assets/images/gallary/04.jpg">
                                            </a>
                                            <div class="caption-content">
                                                <p>Image With Right Description</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-3 col-lg-6">
                                        <div class="imagebox">
                                            <a class="glightbox"
                                               data-glightbox="title: Description Left;  description: You can set the position of the description; descPosition: top;"
                                               href="../assets/images/gallary/05.jpg">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/gallary/05.jpg">
                                            </a>
                                            <div class="caption-content">
                                                <p>Image With Top Description</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-3 col-lg-6">
                                        <div class="imagebox">
                                            <a class="glightbox" data-glightbox="type: image; zoomable: true;"
                                               href="../assets/images/gallary/06.jpg">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/gallary/06.jpg">
                                            </a>
                                            <div class="caption-content">
                                                <p>Simple Image</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="imagebox">
                                    <a class="glightbox"
                                       href="../assets/images/gallary/07.jpg">
                                        <img alt="image" class="img-fluid rounded"
                                             src="../assets/images/gallary/07.jpg">
                                    </a>
                                    <div class="caption-content">
                                        <p>Simple Image With Video</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="imagebox">
                                    <a class="glightbox" data-glightbox="type: image; zoomable: true;"
                                       href="../assets/images/gallary/08.jpg">
                                        <img alt="image" class="img-fluid rounded"
                                             src="../assets/images/gallary/08.jpg">
                                    </a>
                                    <div class="caption-content">
                                        <p>Simple Image</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="imagebox">
                                    <a class="glightbox" data-glightbox="type: image; zoomable: true;"
                                       href="../assets/images/gallary/09.jpg">
                                        <img alt="image" class="img-fluid rounded"
                                             src="../assets/images/gallary/09.jpg">
                                    </a>
                                    <div class="caption-content">
                                        <p>Simple Image</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="imagebox">
                                    <a class="glightbox" data-glightbox="type: image; zoomable: true;"
                                       href="../assets/images/gallary/10.jpg">
                                        <img alt="image" class="img-fluid rounded"
                                             src="../assets/images/gallary/10.jpg">
                                    </a>
                                    <div class="caption-content">
                                        <p>Simple Image</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="imagebox">
                                            <a class="glightbox" data-glightbox="type: image; zoomable: true;"
                                               href="../assets/images/gallary/11.jpg">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/gallary/11.jpg">
                                            </a>
                                            <div class="caption-content">
                                                <p>Simple Image</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="imagebox">
                                            <a class="glightbox" data-glightbox="type: image; zoomable: true;"
                                               href="../assets/images/gallary/12.jpg">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/gallary/12.jpg">
                                                <div class="transparent-box2">
                                                </div>
                                            </a>
                                            <div class="caption-content">
                                                <p>Simple Image</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="imagebox">
                                            <a class="glightbox" data-glightbox="type: image; zoomable: true;"
                                               href="../assets/images/gallary/14.jpg">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/gallary/14.jpg">
                                            </a>
                                            <div class="caption-content">
                                                <p>Simple Image</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="imagebox">
                                            <a class="glightbox"
                                               href="../assets/images/gallary/video.mp4">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/gallary/13.jpg">
                                                <div class="caption-content video-caption">
                                                    <i class="fa-solid fa-play-circle fa-fw f-s-35"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="imagebox">
                                            <a class="glightbox" data-glightbox="type: image; zoomable: true;"
                                               href="../assets/images/gallary/15.jpg">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/gallary/15.jpg">
                                            </a>
                                            <div class="caption-content">
                                                <p>Simple Image</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="imagebox">
                                            <a class="glightbox" data-glightbox="type: image; zoomable: true;"
                                               href="../assets/images/gallary/16.jpg">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/gallary/16.jpg">
                                            </a>
                                            <div class="caption-content">
                                                <p>Simple Image</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery end -->
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

<!-- Glight js -->
<script src="../assets/vendor/glightbox/glightbox.min.js"></script>
<script src="../assets/vendor/masonry/masonry.pkgd.min.js"></script>

<!-- js -->
<script src="../assets/js/glightbox.js"></script>

</html>
