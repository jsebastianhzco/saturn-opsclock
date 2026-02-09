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
<div class="app-wrapper d-block">
    <div class="">
        <!-- Body main section starts -->
        <main class="w-100 p-0">
            <div class="container-fluid">
                <div class="row">
                    <!-- Verify OTP 1 start -->
                    <div class="col-12 p-0 ">
                        <div class="login-form-container">
                            <div class="mb-4">
                                <a class="logo d-inline-block" href="index.php">
                                    <img alt="#" src="../assets/images/logo/1.png" width="250">
                                </a>
                            </div>
                            <div class="form_container">
                                <form class="app-form rounded-control">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-5 text-center">
                                                <h2 class="text-primary-dark">Verify OTP</h2>
                                                <p>Enter the 5 digit code sent to the registered email Id</p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="verification-box">
                                                <div>
                                                    <input class="form-control h-60 w-60 text-center" id="one"
                                                           maxlength="1"
                                                           oninput='digitValidate(this)' onkeyup='tabChange(1)'
                                                           type="text">
                                                </div>
                                                <div>
                                                    <input class="form-control h-60 w-60 text-center" id="two"
                                                           maxlength="1"
                                                           oninput='digitValidate(this)' onkeyup='tabChange(2)'
                                                           type="text">
                                                </div>
                                                <div>
                                                    <input class="form-control h-60 w-60 text-center" id="three"
                                                           maxlength="1"
                                                           oninput='digitValidate(this)' onkeyup='tabChange(3)'
                                                           type="text">
                                                </div>
                                                <div>
                                                    <input class="form-control h-60 w-60 text-center" id="four"
                                                           maxlength="1"
                                                           oninput='digitValidate(this)' onkeyup='tabChange(4)'
                                                           type="text">
                                                </div>
                                                <div>
                                                    <input class="form-control h-60 w-60 text-center" id="five"
                                                           maxlength="1"
                                                           oninput='digitValidate(this)' onkeyup='tabChange(5)'
                                                           type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p>
                                                Did not recieve a code <a class="link-primary text-decoration-underline"
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
                    <!-- Verify OTP 1 end -->
                </div>
            </div>
        </main>
        <!-- Body main section ends -->
    </div>
</div>
<!-- latest jquery-->
<script src="../assets/js/jquery-3.6.3.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../assets/js/two_step.js"></script>

</body>

<!-- Javascript -->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.6.3.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>

</html>
