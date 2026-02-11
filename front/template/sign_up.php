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
        <!-- sign up start -->
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
                            <img alt="" class="img-fluid" src="../assets/images/login/02.png">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 form-contentbox">
                    <div class="form-container">
                        <form class="app-form rounded-control">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5 text-center text-lg-start">
                                        <h2 class="text-primary-dark f-w-600">Create Account</h2>
                                        <p>Get Started For Free Today!</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input class="form-control" id="username" placeholder="Enter Your Username"
                                               required
                                               type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Email</label>
                                        <input class="form-control" id="email" placeholder="Enter Your Email"
                                               required type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input class="form-control" id="password" placeholder="Enter Your Password"
                                               required
                                               type="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Confirm Password</label>
                                        <input class="form-control" id="password1" placeholder="Enter Your Password"
                                               required
                                               type="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-between gap-3">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="checkDefault" type="checkbox" value="">
                                            <label class="form-check-label text-secondary" for="checkDefault">
                                                Accept Terms & Conditions
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <a class="btn btn-light-primary w-100" href="./index.php" role="button">Sign
                                            Up</a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-center text-lg-start">
                                        Already Have A Account? <a class="link-primary-dark text-decoration-underline"
                                                                   href="./sign_in.php">
                                            Sign in</a>
                                    </div>
                                </div>
                                <div class="app-divider-v justify-content-center">
                                    <p>Or sign up with</p>
                                </div>
                                <div class="col-12">
                                    <div class="text-center">
                                        <button class="btn btn-light-facebook icon-btn b-r-22 m-1" type="button"><i
                                                    class="ti ti-brand-facebook "></i></button>
                                        <button class="btn btn-light-gmail icon-btn b-r-22 m-1" type="button"><i
                                                    class="ti ti-brand-google "></i></button>
                                        <button class="btn btn-light-github icon-btn b-r-22 m-1" type="button"><i
                                                    class="ti ti-brand-github "></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- sign up end -->
    </div>
</div>


<!-- latest jquery-->
<script src="../assets/js/jquery-3.6.3.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>

</body>

<!-- Javascript -->

<!-- latest jquery-->
<script src="../assets/js/jquery-3.6.3.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>

</html>
