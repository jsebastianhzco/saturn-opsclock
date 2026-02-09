<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Toatify css-->
    <link rel="stylesheet" href="../assets/vendor/notifications/toastify.min.css">

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
            <div class="container-fluid ui-section">
                <!-- Breadcrumb start -->
                <div class="row m-1">
                    <div class="col-12 ">
                        <h4 class="main-title">Sweetalert</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                              <span>
                                <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                              </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Sweetalert</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- sweetalert start  -->
                <div class="row">
                    <!-- Examples start -->
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Basic Example</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_1</span></p>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-light-primary btn-md" id="click_1" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>A title with a text under</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_2</span></p>
                            </div>

                            <div class="card-body">
                                <button class="btn btn-light-secondary btn-md" id="click_2" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>A success message!</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_3</span></p>
                            </div>

                            <div class="card-body">
                                <button class="btn btn-light-success btn-md" id="click_3" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>A custom positioned dialog</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_4</span></p>
                            </div>

                            <div class="card-body">
                                <button class="btn btn-light-warning btn-md" id="click_4" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Custom animation</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_5</span></p>
                            </div>

                            <div class="card-body">
                                <button class="btn btn-light-info btn-md" id="click_5" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>A message with custom Image Header</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_6</span></p>
                            </div>

                            <div class="card-body">
                                <button class="btn btn-light-danger btn-md" id="click_6" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Ajax request example</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_7</span></p>
                            </div>

                            <div class="card-body">
                                <button class="btn btn-light-light btn-md" id="click_7" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5> modals (queue) example</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_8</span></p>
                            </div>

                            <div class="card-body">
                                <button class="btn btn-light-dark btn-md" id="click_8" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>A message with auto close timer</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_9</span></p>
                            </div>

                            <div class="card-body">
                                <button class="btn btn-light-info btn-md" id="click_9" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Custom HTML description and buttons</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_10</span></p>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-light-success btn-md" id="click_10" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Confirmation With Triggers</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_11</span></p>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-light-secondary btn-md" id="click_11" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Confirmation With Approvals</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_12</span></p>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-light-danger btn-md" id="click_12" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5> Custom width, padding and background</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_13</span></p>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-light-primary btn-md" id="click_13" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Dynamic queue example</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_14</span></p>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-light-warning btn-md" id="click_14" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Dismiss Alert</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_15</span></p>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-light-light btn-md" id="click_15" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Mixin example</h5>
                                <p class="mb-0 text-secondary">if you want to keep this sweet alert then you can
                                    keep it using <span class="text-danger">click_16</span></p>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-light-dark btn-md" id="click_16" type="button">
                                    Click Now
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Examples end -->
                </div>
                <!-- sweetalert start  -->

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

<!-- Toatify js-->
<script src="../assets/vendor/notifications/toastify-js.js"></script>

<!-- sweetalert js-->
<script src="../assets/vendor/sweetalert/sweetalert.js"></script>

<!-- js -->
<script src="../assets/js/sweet_alert.js"></script>
</html>
