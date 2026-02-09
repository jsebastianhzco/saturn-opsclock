<!DOCTYPE html>
<html lang="en">

<head>
    <!-- tree-view css  -->
    <link rel="stylesheet" href="../assets/vendor/jstree/style.min.css">

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
                        <h4 class="main-title">Tree View</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a href="#" class="f-s-14 f-w-500">
                                            <span>
                                                <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                                            </span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#" class="f-s-14 f-w-500">Tree View</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!--tree-view start -->
                <div class="row tree-view">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Basic Tree</h5>
                            </div>

                            <div class="card-body">
                                <div class="nestable">
                                    <div id="theme_tree"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Tree With Checkbox</h5>
                            </div>

                            <div class="card-body">
                                <div class="level-nestable">
                                    <div id="level_tree"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- tree-view end -->
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

<!-- tree-view js  -->
<script src="../assets/vendor/jstree/jquery.min.js"></script>
<script src="../assets/vendor/jstree/jstree.min.js"></script>

<!-- js  -->
<script src="../assets/js/tree-view.js"></script>

</html>
