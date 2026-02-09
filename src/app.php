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
                        <h4 class="main-title">Time tracking</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-newspaper f-s-16"></i> Other Pages
                      </span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#" class="f-s-14 f-w-500">Blank</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- Blank start -->
                <div class="row">
                    <!-- Default Card start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Welcome, {Johan S Hernandez}</h5>
                            </div>
                            <div class="card-body">
                                <form class="app-form">
                                    <div class="row">
                                        
                                        <div class="col-md-12 floating-select">
                                            <div class="mb-3">
                                                <label class="form-label">Work Location</label>
                                                <select class="form-select">
                                                    <option selected="">select Your Location</option>
                                                    <option value="1">Forest Ridge Apartments</option>
                                                    <option value="2">Big Garages LLC</option>
                                                    <option value="3">Ray's House</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Check-in Date</label>
                                                <input type="date" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Clock In Time</label>
                                                <input type="time" class="form-control" required>
                                            </div>
                                        </div>
          
                                    </div>
                                    

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Check-Out Date</label>
                                                <input type="date" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Clock Out Time</label>
                                                <input type="time" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Default Card end -->
                </div>
                <!-- Blank end -->
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

</html>
