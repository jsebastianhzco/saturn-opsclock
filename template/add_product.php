<!DOCTYPE html>
<html lang="en">

<head>
    <!-- filepond css -->
    <link rel="stylesheet" href="../assets/vendor/filepond/filepond.css">
    <link rel="stylesheet" href="../assets/vendor/filepond/image-preview.min.css">

    <!-- editor css -->
    <link rel="stylesheet" href="../assets/vendor/trumbowyg/trumbowyg.min.css">


    <!-- Selecrt css -->
    <link href="../assets/vendor/select/select2.min.css" rel="stylesheet">

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
                        <h4 class="main-title">Add Product</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                                </a>
                            </li>
                            <li>
                                <a class="f-s-14 f-w-500" href="#">E-shop</a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Add Product</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- Add Product start -->
                <div class="row">
                    <div class="col-lg-8 col-xxl-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="app-product-section">
                                    <div class="main-title">
                                        <h6>General Information</h6>
                                    </div>
                                    <div>
                                        <form class="app-form rounded-control">
                                            <div class="mb-3">
                                                <label class="form-label">Product Title</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Brand Name</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Product Description</label>
                                                <div id="description-editor">
                                                    <p>Hello !</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="app-divider-v dashed"></div>

                                    <div class="main-title">
                                        <h6>Category</h6>
                                    </div>

                                    <div>
                                        <form class="app-form rounded-control">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Category</label>
                                                        <select class="category-select w-100">
                                                            <option value="IN">Industry</option>
                                                            <option value="FN">Functionality</option>
                                                            <option value="CN">Customer Needs</option>
                                                            <option value="CP">Customer Preferences</option>
                                                            <option value="DE">Demographics</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Product Tags</label>
                                                        <select class="category-select w-100">
                                                            <option value="Cl">Clothing</option>
                                                            <option value="SH">Shoes</option>
                                                            <option value="TO">Toys</option>
                                                            <option value="IT">Internet Of Things</option>
                                                            <option value="BS">Books & Stationaries</option>
                                                            <option value="AS">Art Supplies</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="app-divider-v dashed"></div>

                                    <div class="main-title">
                                        <h6>Inventory</h6>
                                    </div>

                                    <div>
                                        <form class="app-form rounded-control">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">SKU(Optional)</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Barcode</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label">Quantity</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                    <div class="app-divider-v dashed"></div>

                                    <div class="main-title">
                                        <h6>Shipping</h6>
                                    </div>

                                    <form class="app-form rounded-control">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Weight</label>
                                                    <input class="form-control" type="text">
                                                    <div class="form-text">Package Size(The package you use to ship
                                                        your product)
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Shipping Days</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Length</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Breadth</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Width</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mt-4 d-flex justify-content-end gap-2 flex-column flex-sm-row text-end">
                                                    <button class="btn btn-light-secondary rounded" type="button">
                                                        Discard
                                                    </button>
                                                    <a class="btn btn-primary rounded" href="product_details.php"
                                                       role="button">Add Product</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="app-product-section">
                                    <div class="main-title">
                                        <h6>Product Media</h6>
                                    </div>

                                    <div>
                                        <input class="app-file-upload addproduct" data-allow-reorder="true"
                                               id="addProduct"
                                               multiple="multiple" type="file">
                                    </div>
                                    <div class="app-divider-v dashed"></div>
                                    <div class="main-title">
                                        <h6>Pricing</h6>
                                    </div>

                                    <form class="app-form rounded-control">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Price</label>
                                                    <div class="input-group mb-3">
                                                            <span class="input-group-text b-r-left"
                                                                  id="basic-addon1">$</span>
                                                        <input aria-describedby="basic-addon1" aria-label="Username"
                                                               class="form-control b-r-right"
                                                               type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Compare at price</label>
                                                    <div class="input-group mb-3">
                                                            <span class="input-group-text b-r-left"
                                                                  id="basic-addon2">$</span>
                                                        <input aria-describedby="basic-addon1" aria-label="Username"
                                                               class="form-control b-r-right"
                                                               type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Discount(%)</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Discount Type</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="app-divider-v dashed"></div>

                                    <div>
                                        <div class="main-title">
                                            <h6>Product Variants</h6>
                                        </div>

                                        <div class="variants-box">
                                            <a class="text-primary" data-bs-target="#exampleModal"
                                               data-bs-toggle="modal"
                                               role="button">
                                                <i class="ti ti-plus"></i> Add Variants
                                            </a>
                                        </div>
                                        <div aria-hidden="true" aria-labelledby="exampleModalLabel"
                                             class="modal fade"
                                             id="exampleModal"
                                             tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal
                                                            title</h1>
                                                        <button aria-label="Close" class="btn-close"
                                                                data-bs-dismiss="modal"
                                                                type="button"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="app-form rounded-control">
                                                            <div class="mb-3">
                                                                <label class="form-label">City</label>
                                                                <select class="form-select">
                                                                    <option selected="">select Option</option>
                                                                    <option value="1">Size</option>
                                                                    <option value="2">Weight</option>
                                                                    <option value="3">Color</option>
                                                                </select>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">Product Hight</label>
                                                                <input class="form-control"
                                                                       placeholder="Enter Number"
                                                                       type="number">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal"
                                                                type="button">Close
                                                        </button>
                                                        <button class="btn btn-primary" data-bs-dismiss="modal"
                                                                type="button">Add Variants
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="app-divider-v dashed"></div>

                                    <div class="main-title">
                                        <h6>Visibility</h6>
                                    </div>

                                    <div>
                                        <div class="form-check d-flex align-items-center mt-2">
                                            <input class="form-check-input f-s-18 mb-1 m-1" id="Visibility_1"
                                                   name="flexRadioDefault"
                                                   type="radio">
                                            <label class="form-check-label" for="Visibility_1">
                                                Published
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center mt-2">
                                            <input class="form-check-input f-s-18 mb-1 m-1" id="Visibility_2"
                                                   name="flexRadioDefault"
                                                   type="radio">
                                            <label class="form-check-label" for="Visibility_2">
                                                Schedule
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center mt-2">
                                            <input class="form-check-input f-s-18 mb-1 m-1" id="Visibility_3"
                                                   name="flexRadioDefault"
                                                   type="radio">
                                            <label class="form-check-label" for="Visibility_3">
                                                Hidden
                                            </label>
                                        </div>
                                    </div>

                                    <form class="app-form mt-4 rounded-control ">
                                        <div class="mb-3">
                                            <label class="form-label">Publish Date</label>
                                            <input class="form-control" type="text">
                                            <div class="form-text">The category will not be visible until the
                                                specified date.
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Product end -->
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

<!-- select2 -->
<script src="../assets/vendor/select/select2.min.js"></script>

<!-- filepond -->
<script src="../assets/vendor/filepond/file-encode.min.js"></script>
<script src="../assets/vendor/filepond/validate-size.min.js"></script>
<script src="../assets/vendor/filepond/validate-type.js"></script>
<script src="../assets/vendor/filepond/exif-orientation.min.js"></script>
<script src="../assets/vendor/filepond/image-preview.min.js"></script>
<script src="../assets/vendor/filepond/filepond.min.js"></script>


<!-- Trumbowyg js -->
<script src="../assets/vendor/trumbowyg/trumbowyg.min.js"></script>

<!-- add product -->
<script src="../assets/js/add_product.js"></script>

</html>
