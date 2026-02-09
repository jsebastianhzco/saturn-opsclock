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
            <!-- Create Account start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="login-form-container">
                            <div class="mb-4">
                                <a class="logo d-inline-block" href="index.php">
                                    <img alt="#" src="../assets/images/logo/1.png" width="250">
                                </a>
                            </div>
                            <div class="form_container">
                                <form class="app-form p-3 rounded-control">
                                    <div class="mb-3 text-center">
                                        <h3 class="text-primary-dark">Create Account</h3>
                                        <p class="f-s-12 text-secondary">Get started For Free Today.</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input class="form-control" placeholder="Enter Your Username" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" placeholder="Enter Your Email" type="email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control" placeholder="Enter Your Password" type="password">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input class="form-check-input" id="formCheck1" type="checkbox">
                                        <label class="form-check-label" for="formCheck1">remember me</label>
                                    </div>
                                    <div>
                                        <a class="btn btn-light-primary w-100" href="./index.php"
                                           role="button">Submit</a>
                                    </div>
                                    <div class="app-divider-v justify-content-center">
                                        <p>OR</p>
                                    </div>
                                    <div class="mb-3">
                                        <div class="text-center">
                                            <button class="btn btn-light-primary icon-btn b-r-5 m-1" type="button"><i
                                                        class="ti ti-brand-facebook "></i></button>
                                            <button class="btn btn-light-danger icon-btn b-r-5 m-1" type="button"><i
                                                        class="ti ti-brand-google "></i></button>
                                            <button class="btn btn-light-dark icon-btn b-r-5 m-1" type="button"><i
                                                        class="ti ti-brand-github "></i></button>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a class="text-secondary text-decoration-underline"
                                           href="./terms_condition.php">Terms of use &amp;
                                            Conditions</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Create Account end -->
        </main>
        <!-- Body main section ends -->
    </div>
</div>


</body>

<!-- Javascript -->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.6.3.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>

</html>
