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
    <div class="main-container">
        <!-- Create Password start -->
        <div class="container">
            <div class="row sign-in-content-bg">
                <div class="col-lg-6 image-contentbox d-none d-lg-block">
                    <div class="form-container">
                        <div class="signup-content mt-4">
                    <span>
                      <img alt="" class="img-fluid " src="../assets/images/logo/1.png">
                    </span>
                        </div>
                        <div class="signup-bg-img">
                            <img alt="" class="img-fluid" src="../assets/images/login/05.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 form-contentbox">
                    <div class="form-container">
                        <form class="app-form rounded-control">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5 text-center text-lg-start">
                                        <h2 class="text-primary-dark f-w-600">Create Password</h2>
                                        <p>Your new password must be different from pervious userd password</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="password">current password</label>
                                        <input class="form-control" id="password" placeholder="Enter Your Password"
                                               type="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="password">New Password</label>
                                        <input class="form-control" id="password1" placeholder="Enter Your Password"
                                               type="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Confirm Password</label>
                                        <input class="form-control" id="password2" placeholder="Enter Your Password"
                                               type="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <a class="btn btn-light-primary w-100" href="./sign_in.php" role="button">Create
                                            Password</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Create Password end -->

    </div>
</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.6.3.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sign_in.js"></script>

</body>

<!-- Javascript -->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.6.3.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>

</html>
