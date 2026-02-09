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
                        <h4 class="main-title">Base Inputs</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Base Inputs</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- Base inputs start -->
                <div class="row">
                    <!-- Baisc Form Controls start -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Baisc Form Controls</h5>
                            </div>
                            <div class="card-body">
                                <div class="app-form">
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input class="form-control" id="username" placeholder="Enter Your Username"
                                               type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input class="form-control" id="password"
                                               placeholder="Enter Your Password" type="password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="city">City</label>
                                        <select class="form-select" id="city">
                                            <option selected>select Your City</option>
                                            <option value="1">UK</option>
                                            <option value="2">US</option>
                                            <option value="3">Italy</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Content</label>
                                        <div class="input-group" id="content">
                                            <span class="input-group-text">+91</span>
                                            <input class="form-control" placeholder="xxx-xxxxx-xxx" type="text">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="address">Address</label>
                                        <textarea class="form-control" id="address" placeholder="Enter Your Address"
                                                  rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" readonly type="text"
                                               value="Only Readable input ...">
                                    </div>
                                    <div class="form-check mb-3 d-flex gap-1">
                                        <input class="form-check-input mg-2" id="checkDefault" type="checkbox"
                                               value="">
                                        <label class="form-check-label" for="checkDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary b-r-22" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Baisc Form Controls end -->
                    <!-- Rounded Form Control start -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Rounded Form Control</h5>
                            </div>
                            <div class="card-body">
                                <div class="app-form rounded-control">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input class="form-control" placeholder="Enter Your Username" type="text">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control" placeholder="Enter Your Password"
                                               type="password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <select class="form-select">
                                            <option selected>select Your City</option>
                                            <option value="1">UK</option>
                                            <option value="2">US</option>
                                            <option value="3">Italy</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Content</label>
                                        <div class="input-group">
                                            <span class="input-group-text">+91</span>
                                            <input class="form-control" placeholder="xxx-xxxxx-xxx" type="text">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" placeholder="Enter Your Address"
                                                  rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" readonly type="text"
                                               value="Only Readable input ...">
                                    </div>
                                    <div class="form-check mb-3 d-flex gap-1">
                                        <input class="form-check-input mg-2" id="checkDefault1" type="checkbox"
                                               value="">
                                        <label class="form-check-label" for="checkDefault1">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary b-r-22" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Rounded Form Control end -->
                    <!-- Inupt Sizing start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Input Sizing</h5>
                            </div>
                            <div class="card-body">
                                <form class="app-form">
                                    <div class="mb-3">
                                        <input aria-label=".form-control-lg example"
                                               class="form-control form-control-lg"
                                               placeholder=".form-control-lg"
                                               type="text">
                                    </div>
                                    <div class="mb-3">
                                        <input aria-label="default input example" class="form-control"
                                               placeholder="Default input"
                                               type="text">
                                    </div>
                                    <div class="mb-3">
                                        <input aria-label=".form-control-sm example"
                                               class="form-control form-control-sm"
                                               placeholder=".form-control-sm"
                                               type="text">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Inupt Sizing end -->
                    <!-- Basic HTML Input Control start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Basic HTML Input Control</h5>
                            </div>
                            <div class="card-body">
                                <div class="app-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Default Input</label>
                                                <input class="form-control" placeholder="Default Input" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class=" col-form-label">Static Text</label>
                                                <div class="form-control-static">
                                                    Hello !... This is
                                                    static text
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" placeholder="Email Input" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input class="form-control" placeholder="Password Input"
                                                       type="password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">URL</label>
                                                <input class="form-control" placeholder="URL Input" type="url">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Telephone</label>
                                                <input class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                                       type="tel"
                                                       value="+91 (999)-999-999">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Number</label>
                                                <input class="form-control" placeholder="Enter Number"
                                                       type="number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class=" col-form-label">
                                                    Maximum Length
                                                </label>
                                                <input class="form-control" maxlength="6"
                                                       placeholder="Enter Your Zip code" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Date & Time</label>
                                                <input class="form-control" type="datetime-local">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Date</label>
                                                <input class="form-control" type="date">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Time</label>
                                                <input class="form-control" type="time">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label class="form-label">Moth</label>
                                                <input class="form-control" type="month">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="mb-6">
                                                <label class="form-label">Week</label>
                                                <input class="form-control" type="week">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="mb-6">
                                                <label class="form-label">Color</label>
                                                <input class="form-control" type="color" value="#467FFB">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">File</label>
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Search</label>
                                                <input class="form-control" placeholder="Search..." type="search">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class=" col-form-label">Textarea</label>
                                                <div>
                              <textarea class="form-control" cols="5" placeholder="Default textarea"
                                        rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button class="btn btn-primary b-r-22">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic HTML Input Control end -->
                </div>
                <!-- Base inputs end -->
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
