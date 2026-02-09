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
    <!-- <div class="app-content"> -->
    <div class="main-container">
        <!-- Body main section starts -->

        <div class="container">
            <!-- Verify OTP start -->
            <div class="sign-in-content-bg">
                <div class="row sign-in-content-bg">
                    <div class="col-lg-6 image-contentbox d-none d-lg-block">
                        <div class="form-container">
                            <div class="signup-content mt-4">
                  <span>
                    <img alt="" class="img-fluid " src="../assets/images/logo/1.png">
                  </span>
                            </div>
                            <div class="signup-bg-img">
                                <img alt="" class="img-fluid" src="../assets/images/login/04.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 form-contentbox">
                        <div class="form-container">
                            <form class="app-form rounded-control">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-5 text-center text-lg-start">
                                            <h2 class="text-primary-dark">Verify OTP</h2>
                                            <p>Enter the 5 digit code sent to the registered email Id</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="verification-box justify-content-lg-start mb-3">
                                            <div>
                                                <input class="form-control h-60 w-60 text-center" id="one"
                                                       maxlength="1"
                                                       oninput='digitValidate(this)' onkeyup='tabChange(1)' type="text">
                                            </div>
                                            <div>
                                                <input class="form-control h-60 w-60 text-center" id="two"
                                                       maxlength="1"
                                                       oninput='digitValidate(this)' onkeyup='tabChange(2)' type="text">
                                            </div>
                                            <div>
                                                <input class="form-control h-60 w-60 text-center" id="three"
                                                       maxlength="1"
                                                       oninput='digitValidate(this)' onkeyup='tabChange(3)' type="text">
                                            </div>
                                            <div>
                                                <input class="form-control h-60 w-60 text-center" id="four"
                                                       maxlength="1"
                                                       oninput='digitValidate(this)' onkeyup='tabChange(4)' type="text">
                                            </div>
                                            <div>
                                                <input class="form-control h-60 w-60 text-center" id="five"
                                                       maxlength="1"
                                                       oninput='digitValidate(this)' onkeyup='tabChange(5)' type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p>
                                            Did not recieve a code <a
                                                    class="link-primary-dark text-decoration-underline"
                                                    href="#">
                                                Resend!</a>
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <button class="btn btn-light-primary w-100" type="reset">Verify</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Verify OTP end -->
        </div>

        <!-- Body main section ends -->
    </div>
</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.6.3.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>

<!-- js -->
<script src="../assets/js/two_step.js"></script>

</body>

<!-- Javascript -->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.6.3.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>

</html>
