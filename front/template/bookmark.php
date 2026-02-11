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
                        <h4 class="main-title">Bookmark</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Bookmark</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- Bookmark start -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h5>Bookmark</h5>
                            </div>
                            <div class="card-body">
                                <div class="vertical-tab setting-tab">
                                    <ul class="nav nav-tabs tab-light-primary m-0" id="v-bg" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button aria-controls="bookmark-tab" aria-selected="true"
                                                    class="nav-link active"
                                                    data-bs-target="#bookmark-tab-pane" data-bs-toggle="tab"
                                                    id="bookmark-tab"
                                                    role="tab"
                                                    type="button"><i class="ph-bold  ph-bookmark pe-2"></i>
                                                Book Mark
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button aria-controls="favourite-tab-pane" aria-selected="false"
                                                    class="nav-link"
                                                    data-bs-target="#favourite-tab-pane" data-bs-toggle="tab"
                                                    id="favourite-tab"
                                                    role="tab" type="button"><i
                                                        class="ph-bold  ph-heart pe-2"></i>Favourites
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button aria-controls="share-tab-pane" aria-selected="false"
                                                    class="nav-link"
                                                    data-bs-target="#share-tab-pane"
                                                    data-bs-toggle="tab" id="share-tab" role="tab"
                                                    type="button"><i
                                                        class="ph-bold  ph-share-network pe-2"></i>Share
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button aria-controls="important-tab-pane" aria-selected="false"
                                                    class="nav-link"
                                                    data-bs-target="#important-tab-pane" data-bs-toggle="tab"
                                                    id="important-tab"
                                                    role="tab" type="button"><i
                                                        class="ph-bold  ph-star pe-2"></i>Important
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button aria-controls="delet-tab-pane" aria-selected="false"
                                                    class="nav-link"
                                                    data-bs-target="#delet-tab-pane"
                                                    data-bs-toggle="tab" id="delet-tab" role="tab"
                                                    type="button"><i
                                                        class="ph-bold  ph-trash pe-2"></i>Delete
                                            </button>
                                        </li>
                                        <li>
                                            <div class="app-divider-v pt-2 pb-2 dashed"></div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="email-list">
                                    <li>
                                        <h6>Labels</h6>
                                    </li>
                                    <li><i class="ti ti-circle-filled pe-2 text-danger"></i> Social</li>
                                    <li><i class="ti ti-circle-filled pe-2 text-primary"></i> Company</li>
                                    <li><i class="ti ti-circle-filled pe-2 text-success"></i> Important</li>
                                    <li><i class="ti ti-circle-filled pe-2 text-info"></i> Private</li>
                                </ul>
                                <div class="app-divider-v pt-2 pb-2 dashed"></div>
                                <ul class="email-list">
                                    <li><i class="ph-bold  ph-bookmark fs-5 pe-2"></i>All Bookmark</li>
                                    <li><i class="ph-bold  ph-book-bookmark fs-5 pe-2"></i>Primary</li>
                                    <li><i class="ph-bold  ph-tag fs-5 pe-2"></i>Promotions</li>
                                    <li><i class="ph-bold  ph-user-circle fs-5 pe-2"></i>Social</li>
                                </ul>
                                <button class="btn btn-primary w-100 mt-4 rounded"
                                        data-bs-target="#bookmarkAddModal"
                                        data-bs-toggle="modal"
                                        type="button">Add Bookmark
                                </button>
                                <!-- add bookmark model start  -->
                                <div aria-hidden="true" aria-labelledby="bookmarkAddModalLabel" class="modal fade"
                                     id="bookmarkAddModal" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h1 class="modal-title fs-5 text-white" id="bookmarkAddModalLabel">
                                                    New Bookmark</h1>
                                                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"
                                                        type="button"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="app-form">
                                                    <div class="mb-3">
                                                        <label class="form-label f-s-16">Title</label>
                                                        <input class="form-control" id="title" required type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label f-s-16">Url</label>
                                                        <input class="form-control" id="weburl" required
                                                               type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label f-s-16">Image</label>
                                                        <input class="form-control file_upload" required
                                                               type="file">
                                                    </div>
                                                    <div class="mt-3">
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal"
                                                                type="button">Close
                                                        </button>
                                                        <button class="btn btn-primary" id="bookkey" type="button">
                                                            Add New
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- add bookmark model end  -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div aria-labelledby="bookmark-tab" class="tab-pane fade active show"
                                 id="bookmark-tab-pane"
                                 role="tabpanel" tabindex="0">
                                <div class="bookmark-card row">
                                    <div class="col-sm-6 col-xxl-4">
                                        <div class="card book-mark-card">
                                            <div class="card-body">
                                                <div class="draggable-card-img">
                                                    <img alt="" class="img-fluid"
                                                         src="../assets/images/draggable/01.jpg ">
                                                    <div class="video-transparent-box"></div>
                                                    <div class="draggable-card-icon">
                                                            <span class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 heartBtn mb-2">
                                                                <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                                            </span>
                                                        <span class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                                                <a aria-expanded="false" class=""
                                                                   data-bs-toggle="dropdown"
                                                                   href="#"
                                                                   role="button">
                                                                <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end ms-3"
                                                                    data-popper-placement="bottom-end">
                                                                <li class="d-flex justify-content-around">
                                                                    <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                                                    <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                                                    <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                                                    <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                                                </li>
                                                            </ul>
                                                            </span>
                                                        <span class="bg-white h-35 w-35 d-flex-center b-r-50 me-3  starBtn mb-2">
                                                                <i class="ph-bold  ph-star f-s-18 text-warning staricon"></i>
                                                              </span>
                                                    </div>
                                                    <div class="dropdown action-icon">
                                                        <a aria-expanded="false" class="" data-bs-toggle="dropdown"
                                                           href="#"
                                                           role="button">
                                                            <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            data-popper-placement="bottom-end">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   data-bs-target="#editCardModal"
                                                                   data-bs-toggle="modal"
                                                                   href="#">
                                                                    <i class="ti ti-edit text-success"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item deletbtn" href="#">
                                                                    <i class="ti ti-trash text-danger"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="draggable-card-content pt-4">
                                                    <h5 class="mb-2 f-w-500">Entire apartment</h5>
                                                    <p class="f-s-16  text-secondary">https://axelit bookmark com
                                                        // bookmark page.php</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xxl-4">
                                        <div class="card book-mark-card ">
                                            <div class="card-body">
                                                <div class="draggable-card-img">
                                                    <img alt="" class="img-fluid"
                                                         src="../assets/images/draggable/02.jpg ">
                                                    <div class="video-transparent-box"></div>
                                                    <div class="draggable-card-icon">
                                <span class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 heartBtn mb-2">
                                  <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                </span>
                                                        <span class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                    <a aria-expanded="false" class="" data-bs-toggle="dropdown" href="#"
                                       role="button">
                                    <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end ms-3"
                                        data-popper-placement="bottom-end">
                                    <li class="d-flex justify-content-around">
                                        <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                        <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                        <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                        <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                    </li>
                                </ul>
                                </span>
                                                        <span class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 importantBtn mb-2">
                                  <i class="ph-bold  ph-star f-s-18 text-warning staricon"></i>
                                </span>
                                                    </div>
                                                    <div class="dropdown action-icon">
                                                        <a aria-expanded="false" class="" data-bs-toggle="dropdown"
                                                           href="#"
                                                           role="button">
                                                            <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            data-popper-placement="bottom-end">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   data-bs-target="#editCardModal"
                                                                   data-bs-toggle="modal"
                                                                   href="#">
                                                                    <i class="ti ti-edit text-success"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item deletbtn" href="#">
                                                                    <i class="ti ti-trash text-danger"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>

                                                    </div>

                                                </div>
                                                <div class="draggable-card-content pt-4">
                                                    <h5 class="mb-2 f-w-500">The Art of Minimalism</h5>
                                                    <p class="f-s-16  text-secondary">https://axelit bookmark com
                                                        // bookmark page.php</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xxl-4">
                                        <div class="card book-mark-card">
                                            <div class="card-body">
                                                <div class="draggable-card-img">
                                                    <img alt="" class="img-fluid"
                                                         src="../assets/images/draggable/08.jpg ">
                                                    <div class="video-transparent-box"></div>
                                                    <div class="draggable-card-icon">
                                <span class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 heartBtn">
                                  <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                </span>
                                                        <span class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                    <a aria-expanded="false" class="" data-bs-toggle="dropdown" href="#"
                                       role="button">
                                    <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end ms-3"
                                        data-popper-placement="bottom-end">
                                    <li class="d-flex justify-content-around">
                                        <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                        <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                        <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                        <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                    </li>
                                </ul>
                                </span>
                                                        <span class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 importantBtn">
                                  <i class="ph-bold  ph-star f-s-18 text-warning staricon" id="starIcon"></i>
                                </span>
                                                    </div>
                                                    <div class="dropdown action-icon">
                                                        <a aria-expanded="false" class="" data-bs-toggle="dropdown"
                                                           href="#"
                                                           role="button">
                                                            <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            data-popper-placement="bottom-end">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   data-bs-target="#editCardModal"
                                                                   data-bs-toggle="modal"
                                                                   href="#">
                                                                    <i class="ti ti-edit text-success"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item deletbtn" href="#">
                                                                    <i class="ti ti-trash text-danger"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>

                                                    </div>

                                                </div>
                                                <div class="draggable-card-content pt-4">
                                                    <h5 class="mb-2 f-w-500">Color and Texture</h5>
                                                    <p class="f-s-16  text-secondary">https://axelit bookmark com
                                                        // bookmark page.php</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xxl-4">
                                        <div class="card book-mark-card">
                                            <div class="card-body">
                                                <div class="draggable-card-img">
                                                    <img alt="" class="img-fluid"
                                                         src="../assets/images/draggable/04.jpg ">
                                                    <div class="video-transparent-box"></div>
                                                    <div class="draggable-card-icon">
                                <span class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 heartBtn">
                                  <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                </span>
                                                        <span class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                    <a aria-expanded="false" class="" data-bs-toggle="dropdown" href="#"
                                       role="button">
                                    <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end ms-3"
                                        data-popper-placement="bottom-end">
                                    <li class="d-flex justify-content-around">
                                        <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                        <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                        <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                        <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                    </li>
                                </ul>
                                </span>
                                                        <span class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 importantBtn">
                                  <i class="ph-bold  ph-star f-s-18 text-warning staricon"></i>
                                </span>
                                                    </div>
                                                    <div class="dropdown action-icon">
                                                        <a aria-expanded="false" class="" data-bs-toggle="dropdown"
                                                           href="#"
                                                           role="button">
                                                            <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            data-popper-placement="bottom-end">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   data-bs-target="#editCardModal"
                                                                   data-bs-toggle="modal"
                                                                   href="#">
                                                                    <i class="ti ti-edit text-success"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item deletbtn" href="#">
                                                                    <i class="ti ti-trash text-danger"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>

                                                    </div>

                                                </div>
                                                <div class="draggable-card-content pt-4">
                                                    <h5 class="mb-2 f-w-500">Luxurious Living</h5>
                                                    <p class="f-s-16  text-secondary">https://axelit bookmark com
                                                        // bookmark page.php</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xxl-4">
                                        <div class="card book-mark-card">
                                            <div class="card-body">
                                                <div class="draggable-card-img">
                                                    <img alt="" class="img-fluid"
                                                         src="../assets/images/draggable/09.jpg ">
                                                    <div class="video-transparent-box"></div>
                                                    <div class="draggable-card-icon">
                                <span class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 heartBtn">
                                  <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                </span>
                                                        <span class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                    <a aria-expanded="false" class="" data-bs-toggle="dropdown" href="#"
                                       role="button">
                                    <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end ms-3"
                                        data-popper-placement="bottom-end">
                                    <li class="d-flex justify-content-around">
                                        <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                        <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                        <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                        <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                    </li>
                                </ul>
                                </span>
                                                        <span class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 importantBtn">
                                  <i class="ph-bold  ph-star f-s-18 text-warning staricon"></i>
                                </span>
                                                    </div>
                                                    <div class="dropdown action-icon">
                                                        <a aria-expanded="false" class="" data-bs-toggle="dropdown"
                                                           href="#"
                                                           role="button">
                                                            <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            data-popper-placement="bottom-end">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   data-bs-target="#editCardModal"
                                                                   data-bs-toggle="modal"
                                                                   href="#">
                                                                    <i class="ti ti-edit text-success"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item deletbtn" href="#">
                                                                    <i class="ti ti-trash text-danger"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="draggable-card-content pt-4">
                                                    <h5 class="mb-2 f-w-500">Good lighting </h5>
                                                    <p class="f-s-16  text-secondary">https://axelit bookmark com
                                                        // bookmark page.php</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xxl-4">
                                        <div class="card book-mark-card">
                                            <div class="card-body">
                                                <div class="draggable-card-img">
                                                    <img alt="" class="img-fluid"
                                                         src="../assets/images/draggable/10.jpg ">
                                                    <div class="video-transparent-box"></div>
                                                    <div class="draggable-card-icon">
                                <span class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 heartBtn">
                                  <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                </span>
                                                        <span class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                    <a aria-expanded="false" class="" data-bs-toggle="dropdown" href="#"
                                       role="button">
                                    <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end ms-3"
                                        data-popper-placement="bottom-end">
                                    <li class="d-flex justify-content-around">
                                        <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                        <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                        <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                        <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                    </li>
                                </ul>
                                </span>
                                                        <span class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 importantBtn">
                                  <i class="ph-bold  ph-star f-s-18 text-warning staricon"></i>
                                </span>
                                                    </div>
                                                    <div class="dropdown action-icon">
                                                        <a aria-expanded="false" class="" data-bs-toggle="dropdown"
                                                           href="#"
                                                           role="button">
                                                            <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            data-popper-placement="bottom-end">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   data-bs-target="#editCardModal"
                                                                   data-bs-toggle="modal"
                                                                   href="#">
                                                                    <i class="ti ti-edit text-success"></i> Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item deletbtn" href="#">
                                                                    <i class="ti ti-trash text-danger"></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="draggable-card-content pt-4">
                                                    <h5 class="mb-2 f-w-500">Eco-Friendly</h5>
                                                    <p class="f-s-16  text-secondary">https://axelit bookmark com
                                                        // bookmark page.php</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div aria-labelledby="favourite-tab" class="tab-pane" id="favourite-tab-pane"
                                 role="tabpanel"
                                 tabindex="0">

                                <div class="row">

                                </div>
                            </div>
                            <div aria-labelledby="share-tab" class="tab-pane" id="share-tab-pane" role="tabpanel"
                                 tabindex="0">

                                <div class="row">

                                </div>


                            </div>
                            <div aria-labelledby="important-tab" class="tab-pane" id="important-tab-pane"
                                 role="tabpanel"
                                 tabindex="0">
                                <div class="row"></div>
                            </div>
                            <div aria-labelledby="delet-tab" class="tab-pane" id="delet-tab-pane" role="tabpanel"
                                 tabindex="0">
                                <div class="row"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bookmark end -->
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

<!-- edit card modal start  -->
<div class="modal fade" id="editCardModal" tabindex="-1" aria-labelledby="editCardModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5 text-white" id="editCardModalLabel">Edit Bookmark</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label f-s-16">Title</label>
                    <input type="text" class="form-control" value="bookmark edit title">
                </div>
                <div class="mb-3">
                    <label class="form-label f-s-16">Url</label>
                    <input type="text" class="form-control"
                           value="http://admin.axelit.com//ltr/bookmark-page.php">
                </div>
                <div class="mb-3">
                    <label class="form-label f-s-16">Image</label>
                    <input type="file" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">Save changes</button>
            </div>

        </div>
    </div>
</div>

<!--customizer-->
<div id="customizer"></div>

</body>

<!-- Javascript -->
<?php
include('../layout/script.php');
?>

<!-- js  -->
<script src="../assets/js/bookmark.js"></script>

</html>
