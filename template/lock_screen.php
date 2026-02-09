<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css -->
    <?php
    include('../layout/head.php');
    include('../layout/css.php');
    ?>
</head>


<body class="sign-in-bg">
<div class="app-wrapper d-block">
    <!-- Body main section starts -->
    <div class="main-container">
        <!-- lock_screen start -->
        <div class="container">
            <div class="row sign-in-content-bg">
                <div class="col-lg-6 image-contentbox d-none d-lg-block">
                    <div class="form-container">
                        <div class="signup-content mt-4">
                  <span>
                    <img alt="avtar" class="img-fluid " src="../assets/images/logo/1.png">
                  </span>
                        </div>
                        <div class="signup-bg-img">
                            <img alt="avtar" class="img-fluid" src="../assets/images/login/06.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 form-contentbox">
                    <div class="form-container">
                        <form class="app-form rounded-control">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 user-screen">
                                        <div class="w-90 h-90 b-r-15 d-flex-center overflow-hidden text-bg-primary">
                                            <img alt="avtar" class="img-fluid" src="../assets/images/avtar/14.png">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-5 text-center text-lg-start">
                                        <h2 class="text-primary-dark f-w-600">Lock Screen</h2>
                                        <p>Hello enter your password to unlock the screen</p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input class="form-control" id="password" placeholder="Enter Your Password"
                                               required=""
                                               type="password">
                                        <p class="text-dark f-s-12 mt-2">Enter Your Password to View your Screen</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="invalidCheck" required="" type="checkbox"
                                               value="">
                                        <label class="form-check-label" for="invalidCheck">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <a class="btn btn-light-primary w-100" href="./index.php"
                                           role="button">Unlock</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- lock_screen end -->

    </div>
    <!-- Body main section ends -->
</div>


<!-- latest jquery-->
<script src="../assets/js/jquery-3.6.3.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>


</body>


</body>

<!-- Javascript -->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.6.3.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>

</html>
