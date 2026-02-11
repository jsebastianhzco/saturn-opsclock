<!DOCTYPE html>
<html lang="en">

<head>
    <!-- filepond css -->
    <link rel="stylesheet" href="../assets/vendor/filepond/filepond.css">
    <link rel="stylesheet" href="../assets/vendor/filepond/image-preview.min.css">

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
                        <h4 class="main-title">File upload</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a href="#" class="f-s-14 f-w-500">
                                        <span>
                                            <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                                        </span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#" class="f-s-14 f-w-500">File upload</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- file upload start -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Basic File Upload</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-xl-6">
                                        <form class="app-form">
                                            <label class="form-label mt-2">File Upload</label>
                                            <input type="file" class="form-control">
                                        </form>
                                    </div>
                                    <div class="col-sm-12 col-xl-6">
                                        <div class="app-form">
                                            <label class="form-label mt-2">Custom File Upload</label>
                                            <input type="file" id="real-file" hidden="hidden">
                                            <div class="d-flex align-items-center gap-3">
                                                <button class="btn btn-primary flex-shrink-0" type="button" id="custom-button">Add
                                                    file
                                                </button>
                                                <span id="custom-text" class="custom-text">No file chosen, yet.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="card equal-card">
                            <div class="card-header">
                                <h5>Filepond File Uploader</h5>
                            </div>
                            <div class="card-body">
                                <div class="row file-uploader-box">
                                    <div class="col-sm-6">
                                        <input type="file" class="filepond-file">
                                    </div>

                                    <div class="col-sm-6">
                                        <input class="filepond-1" type="file" id="id" multiple="multiple"
                                               data-allow-reorder="true">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Circle File Uploader</h5>
                            </div>
                            <div class="card-body">
                                <div class="row file-uploader-box">
                                    <div class="col">
                                        <input class="filepond-2 m-auto" type="file" id="fileupload-2" name="filepond"
                                               accept="image/png, image/jpeg, image/gif">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Solid Style</h5>
                            </div>
                            <div class="card-body">
                                <div class="row file-uploader-box">
                                    <div class="col-sm-6 col-md-3 col-xl-3">
                                        <input class="filepondsolid1 filesolid file-primary" type="file" id="solid1"
                                               multiple="multiple" data-allow-reorder="true">
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xl-3">
                                        <input class="filepondsolid2 filesolid file-secondary" type="file"
                                               id="solid2" multiple="multiple" data-allow-reorder="true">
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xl-3">
                                        <input class="filepondsolid3 filesolid file-success" type="file" id="solid3"
                                               multiple="multiple" data-allow-reorder="true">
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xl-3">
                                        <input class="filepondsolid4 filesolid file-danger" type="file" id="solid4"
                                               multiple="multiple" data-allow-reorder="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Light Style</h5>
                            </div>
                            <div class="card-body">
                                <div class="row file-uploader-box">
                                    <div class="col-sm-6 col-md-3 col-xl-3">
                                        <input class="filepondlight1 filelight file-light-primary" type="file"
                                               id="light1" multiple="multiple" data-allow-reorder="true">
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xl-3">
                                        <input class="filepondlight2 filelight file-light-secondary" type="file"
                                               id="light2" multiple="multiple" data-allow-reorder="true">
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xl-3">
                                        <input class="filepondlight3 filelight file-light-success" type="file"
                                               id="light3" multiple="multiple" data-allow-reorder="true">
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-xl-3">
                                        <input class="filepondlight4 filelight file-light-danger" type="file"
                                               id="light4" multiple="multiple" data-allow-reorder="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- file upload end -->
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

<!-- filepond -->
<script src="../assets/vendor/filepond/file-encode.min.js"></script>
<script src="../assets/vendor/filepond/validate-size.min.js"></script>
<script src="../assets/vendor/filepond/validate-type.js"></script>
<script src="../assets/vendor/filepond/exif-orientation.min.js"></script>
<script src="../assets/vendor/filepond/image-preview.min.js"></script>
<script src="../assets/vendor/filepond/filepond.min.js"></script>

<!-- phosphor js -->
<script src="../assets/vendor/phosphor/phosphor.js"></script>

<!-- js -->
<script src="../assets/js/file_upload.js"></script>

</html>
