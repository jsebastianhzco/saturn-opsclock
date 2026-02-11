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
                        <h4 class="main-title">Checkout</h4>
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
                                <a class="f-s-14 f-w-500" href="#">Checkout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="checkout-tabs-step">
                                    <div class="tab checkout-current-step d-flex" data-tab="tab-1">

                                        <div class="tabs-steps">
                                            <i class="ti ti-user-circle"></i>
                                        </div>

                                        <div class="px-2">
                                            <h6 class="mb-0">Billing Info</h6>
                                            <span class="text-secondary">Step 1 </span>
                                        </div>

                                    </div>
                                    <div class="tab d-flex" data-tab="tab-2">
                                        <div class="tabs-steps">
                                            <i class="ti ti-disc"></i>
                                        </div>

                                        <div class="px-2">
                                            <h6 class="mb-0"> Address </h6>
                                            <span class="text-secondary">Step 2</span>
                                        </div>

                                    </div>

                                    <div class="tab d-flex" data-tab="tab-3">

                                        <div class="tabs-steps">
                                            <i class="ti ti-user-plus"></i>
                                        </div>

                                        <div class="px-2">
                                            <h6 class="mb-0"> Payment </h6>
                                            <span class="text-secondary">Step 3</span>
                                        </div>

                                    </div>

                                    <div class="tab d-flex" data-tab="tab-4">

                                        <div class="tabs-steps">
                                            <i class="ti ti-currency-dollar"></i>
                                        </div>
                                        <div class="px-2">
                                            <h6 class="mb-0"> Review </h6>
                                            <span class="text-secondary">Step 4</span>
                                        </div>

                                    </div>

                                    <div class="tab d-flex" data-tab="tab-5">

                                        <div class="tabs-steps">
                                            <i class="ti ti-disc"></i>
                                        </div>
                                        <div class="px-2">
                                            <h6 class="mb-0"> Finish </h6>
                                            <span class="text-secondary">Step 5</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <div class="checkout-content-list">
                                    <div class="tabs-contents checkout-current-step" id="tab-1">
                                        <form class="app-form rounded-control">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">First Name</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Last Name</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Email address</label>
                                                        <input class="form-control" type="email">
                                                        <div class="form-text">We'll never share your email with
                                                            anyone else.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Contact</label>
                                                        <div class="input-group">
                                                            <input aria-label="Recipient's username"
                                                                   class="form-control" placeholder=""
                                                                   type="text"><span
                                                                    class="input-group-text"><i
                                                                        class="fa-solid fa-phone"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Telephone</label>
                                                        <input class="form-control"
                                                               pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                                               type="tel"
                                                               value="+91 (999)-999-999">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <label class="form-label">City</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3 floating-select">
                                                        <label class="form-label">State</label>
                                                        <select class="form-select">
                                                            <option>Choose...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3 form-check d-flex p-0">
                                                        <input class="m-1 form-check-input" id="formCheck2"
                                                               type="checkbox">
                                                        <label class="form-check-label" for="formCheck2">remember
                                                            me</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end">
                                                        <button class="btn btn-primary" type="submit">Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                    <div class="tabs-contents" id="tab-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5 class="tab-heading mb-3">Your Address</h5>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card shadow-none">
                                                    <div class="card-body address-content">
                                                        <div class="">
                                                            <label class="check-box">
                                                                <input name="radio-group1" type="radio">
                                                                <span class="radiomark outline-secondary"></span>
                                                                <span class="fs-6 tab-heading">Home Address</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <p class="text-muted">260 Zulma Stravenue, Wisozkton, KY
                                                                44193-0738
                                                                collins@stroman.net</p>
                                                            <p>+1 828-726-3669</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card shadow-none">
                                                    <div class="card-body address-content">
                                                        <div class="">
                                                            <label class="check-box">
                                                                <input name="radio-group1" type="radio">
                                                                <span class="radiomark outline-secondary"></span>
                                                                <span class="fs-6 tab-heading">Office Address</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <p class="text-muted">90897 Franecki Haven, West Maximo,
                                                                KY 40770-5993
                                                                bjast@hotmail.com</p>
                                                            <p>+1 863-422-2979</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card equal-card shadow-none">
                                                    <div class="card-body added-content">
                                                        <a class="link-primary" data-bs-target="#staticBackdrop"
                                                           data-bs-toggle="modal"
                                                           role="button">
                                                            <i class="ti ti-plus"></i> Add A New Address
                                                        </a>
                                                        <!-- Modal -->
                                                        <div aria-hidden="true"
                                                             aria-labelledby="staticBackdropLabel"
                                                             class="modal fade"
                                                             data-bs-backdrop="static" data-bs-keyboard="false"
                                                             id="staticBackdrop"
                                                             tabindex="-1">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5"
                                                                            id="staticBackdropLabel">Modal
                                                                            title</h1>
                                                                        <button aria-label="Close" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                type="button"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form class="app-form rounded-control">
                                                                            <div class="row g-3">
                                                                                <div class="col-12">
                                                                                    <label class="form-label">Address</label>
                                                                                    <input class="form-control"
                                                                                           type="text">
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <label class="form-label">Address
                                                                                        2</label>
                                                                                    <input class="form-control"
                                                                                           type="text">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label">City</label>
                                                                                    <input class="form-control"
                                                                                           type="text">
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <label class="form-label">State</label>
                                                                                    <select class="form-select"
                                                                                            id="inputState">
                                                                                        <option selected="">
                                                                                            Choose...
                                                                                        </option>
                                                                                        <option>...</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <label class="form-label">Zip</label>
                                                                                    <input class="form-control"
                                                                                           type="text">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-secondary"
                                                                                data-bs-dismiss="modal"
                                                                                type="button">Close
                                                                        </button>
                                                                        <button class="btn btn-primary"
                                                                                type="button">Add
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <h5 class="fs-6 tab-heading mb-3">Delivery Method</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="position-relative">
                                                            <label class="check-box">
                                                                <input name="radio-group1" type="radio">
                                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                                <span class="d-flex align-items-center mg-s-25">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Economy Shipping - FREE</span>
                                        <span class="d-block text-secondary">5 to 10 business days</span>
                                      </span>
                                    </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="position-relative">
                                                            <label class="check-box">
                                                                <input name="radio-group1" type="radio">
                                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                                <span class="d-flex align-items-center mg-s-25">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Priority overnight -$18.50</span>
                                        <span class="d-block text-secondary">Basd on chosen delivery date</span>
                                      </span>
                                    </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="alert alert-border-info" role="alert">
                                                    <p>
                                                        <i class="ti ti-info-circle f-s-18 text-info"></i>
                                                        Expected delivery data is not guaranteed, if you are
                                                        ordering for an event we
                                                        suggest aollwing 1 extra days.
                                                    </p>
                                                    <div class="text-end">
                                                        <a class="link-primary text-d-underline"
                                                           data-bs-dismiss="alert"
                                                           href="">Don't
                                                            allow</a>
                                                        <a class="link-primary text-d-underline ms-2"
                                                           href="">Allow</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tabs-contents" id="tab-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="mb-3">
                                                            <label class="check-box">
                                                                <input name="radio-group1" type="radio">
                                                                <span class="radiomark outline-secondary"></span>
                                                                <span class="fs-6 tab-heading">Credit / Debit Card</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <form class="app-form rounded-control">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Cradholder
                                                                                Name</label>
                                                                            <input class="form-control"
                                                                                   placeholder="Olaf"
                                                                                   type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Crad
                                                                                Number</label>
                                                                            <input class="form-control"
                                                                                   placeholder="xxxx-xxxx-xxxx-xxx"
                                                                                   required=""
                                                                                   type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Expiration
                                                                                Date</label>
                                                                            <input class="form-control"
                                                                                   placeholder="pin"
                                                                                   type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">CVC
                                                                                code</label>
                                                                            <input class="form-control"
                                                                                   placeholder="xxx"
                                                                                   type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="text-end">
                                                                            <button class="btn btn-primary"
                                                                                    type="button">Submit
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="position-relative">
                                                            <label class="check-box">
                                                                <input name="radio-group1" type="radio">
                                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                                <span class="d-flex align-items-center mg-s-25">
                                      <img alt="" class="w-35 h-35" src="../assets/images/checkbox-radio/logo1.png">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Visa Card</span>
                                        <span class="d-block text-secondary">Select Visa card</span>
                                      </span>
                                    </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="position-relative">
                                                            <label class="check-box">
                                                                <input name="radio-group1" type="radio">
                                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                                <span class="d-flex align-items-center mg-s-25">
                                      <img alt="" class="w-35 h-35" src="../assets/images/checkbox-radio/logo3.png">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Paypal</span>
                                        <span class="d-block text-secondary">Select PayPal</span>
                                      </span>
                                    </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="position-relative">
                                                            <label class="check-box">
                                                                <input name="radio-group1" type="radio">
                                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                                <span class="d-flex align-items-center mg-s-25">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Other UPI Apps</span>
                                        <span class="d-block text-secondary">Select Other UPI Apps for payment</span>
                                      </span>
                                    </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="position-relative">
                                                            <label class="check-box">
                                                                <input name="radio-group1" type="radio">
                                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                                <span class="d-flex align-items-center mg-s-25">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Cash on Delivery/Pay on Delivery</span>
                                        <span class="d-block text-secondary">Cash,UPI and Cards accepted.</span>
                                      </span>
                                    </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tabs-contents" id="tab-4">
                                        <div class="row">
                                            <div class="col-md-3 col-xl-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img alt="image" class="img-fluid b-r-20 mb-2"
                                                             src="../assets/images/ecommerce/23.jpg">
                                                    </div>
                                                    <div class="col-6">
                                                        <img alt="image" class="img-fluid b-r-20 mb-2"
                                                             src="../assets/images/ecommerce/25.jpg">
                                                    </div>
                                                    <div class="col-6">
                                                        <img alt="image" class="img-fluid b-r-20 mb-2"
                                                             src="../assets/images/ecommerce/13.jpg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-xl-8">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <h6 class="tab-heading mb-0">Estimated Delivery Date :
                                                                27 Dec 2024 </h6>
                                                            <p class="text-secondary">Items dispatched by MQ
                                                                Stor</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div
                                                                class="alert alert-light-border-success d-flex align-items-center justify-content-between"
                                                                role="alert">
                                                            <p class="mb-0">
                                                                <i class="ti ti-gift f-s-18 me-2"></i>Gift wrap and
                                                                personalized message on card,
                                                                Only for $10.50 USD
                                                            </p>
                                                            <i class="ti ti-x" data-bs-dismiss="alert"></i>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">

                                                        <div>
                                                            <h6 class="tab-heading">Product details</h6>
                                                            <div
                                                                    class="accordion app-accordion  accordion-flush accordion-secondary app-accordion-plus"
                                                                    id="nestingExample">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header">
                                                                        <button aria-expanded="true"
                                                                                class="accordion-button"
                                                                                data-bs-target="#nestingcollapseOne"
                                                                                data-bs-toggle="collapse"
                                                                                type="button">
                                                                            Sky modern jacket for kid
                                                                        </button>
                                                                    </h2>
                                                                    <div class="accordion-collapse collapse show"
                                                                         data-bs-parent="#nestingExample"
                                                                         id="nestingcollapseOne">
                                                                        <div class="accordion-body">
                                                                            <p><span class="text-secondary f-w-500">size</span>
                                                                                : medium</p>
                                                                            <p><span class="text-secondary f-w-500">color</span>
                                                                                : Sky</p>
                                                                            <p><span class="text-secondary f-w-500">Items</span>
                                                                                : 2</p>
                                                                            <p><span class="text-secondary f-w-500">Rating</span>
                                                                                : 3+ </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header">
                                                                        <button aria-expanded="false"
                                                                                class="accordion-button collapsed"
                                                                                data-bs-target="#nestingcollapseTwo"
                                                                                data-bs-toggle="collapse"
                                                                                type="button">
                                                                            Trendy & stylist shoes
                                                                        </button>
                                                                    </h2>
                                                                    <div class="accordion-collapse collapse"
                                                                         data-bs-parent="#nestingExample"
                                                                         id="nestingcollapseTwo">
                                                                        <div class="accordion-body">
                                                                            <p><span class="text-secondary f-w-500">color</span>
                                                                                : White</p>
                                                                            <p><span class="text-secondary f-w-500">Items</span>
                                                                                : 2 </p>
                                                                            <p><span class="text-secondary f-w-500">Rating</span>
                                                                                : 4+ </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header">
                                                                        <button aria-expanded="false"
                                                                                class="accordion-button collapsed"
                                                                                data-bs-target="#nestingcollapseThree"
                                                                                data-bs-toggle="collapse"
                                                                                type="button">
                                                                            Designer watch
                                                                        </button>
                                                                    </h2>
                                                                    <div class="accordion-collapse collapse"
                                                                         data-bs-parent="#nestingExample"
                                                                         id="nestingcollapseThree">
                                                                        <div class="accordion-body">
                                                                            <p><span class="text-secondary f-w-500">size</span>
                                                                                : Medium</p>
                                                                            <p><span class="text-secondary f-w-500">color</span>
                                                                                : Golden</p>
                                                                            <p><span class="text-secondary f-w-500">Items</span>
                                                                                : 1 </p>
                                                                            <p><span class="text-secondary f-w-500">Rating</span>
                                                                                : 5+ </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tabs-contents" id="tab-5">
                                        <div class="text-center">
                                            <div class="mb-3">
                                                <img alt="" src="../assets/images/form/done.gif">
                                            </div>
                                            <h5 class="text-success"> Your Order #7AD6728 Placed, Thank you!</h5>
                                            <p>Confirmation will be sent to Your Email</p>
                                        </div>
                                        <div class="app-divider-v dashed"></div>
                                        <div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="tab-heading">In the unlikely case of items being
                                                        unavailable, what would you
                                                        prefer ?</h6>
                                                </div>
                                                <div class="col-md-6 col-xl-4 mt-3">
                                                    <div class="card shadow-none">
                                                        <div class="card-body address-content">
                                                            <div class="">
                                                                <label class="check-box">
                                                                    <input name="radio-group1" type="radio">
                                                                    <span class="radiomark outline-secondary"></span>
                                                                    <span class="fs-6 tab-heading">Select 1</span>
                                                                </label>
                                                            </div>
                                                            <p>Call Help Center for any substitues</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4 mt-3">
                                                    <div class="card equal-card shadow-none">
                                                        <div class="card-body address-content">
                                                            <div class="">
                                                                <label class="check-box">
                                                                    <input name="radio-group1" type="radio">
                                                                    <span class="radiomark outline-secondary"></span>
                                                                    <span class="fs-6 tab-heading">Select 2</span>
                                                                </label>
                                                            </div>
                                                            <p>Let us pick Your substitues</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4 mt-3">
                                                    <div class="card shadow-none">
                                                        <div class="card-body address-content">
                                                            <div class="">
                                                                <label class="check-box">
                                                                    <input name="radio-group1" type="radio">
                                                                    <span class="radiomark outline-secondary"></span>
                                                                    <span class="fs-6 tab-heading">Select 3</span>
                                                                </label>
                                                            </div>
                                                            <p>I do not need any substitues</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="checkout-cart-box">
                                    <div class="cart-images d-flex-center flex-shrink-0">
                                        <a href="#"><img alt="product" class="w-80"
                                                         src="../assets/images/ecommerce/23.jpg"></a>
                                    </div>
                                    <div class="ms-2 flex-grow-1">
                                        <h6>jacket -<span>(sky &amp; stylist )</span></h6>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-14"></i>
                                            <i class="ti ti-star-filled text-warning f-s-14"></i>
                                            <i class="ti ti-star-filled text-warning f-s-14"></i>
                                            <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                            <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                        </div>
                                        <p><span>size</span> : medium</p>
                                        <p><span>Items</span> : 2 </p>
                                    </div>
                                    <div class="cart-price-box">
                                        <a href="#">
                                            <i class="ti ti-x text-secondary"></i>
                                        </a>
                                        <h5>$500</h5>
                                    </div>
                                </div>

                                <div class="checkout-cart-box">
                                    <div class="cart-images d-flex-center flex-shrink-0">
                                        <a href="#"><img alt="product" class="w-80"
                                                         src="../assets/images/ecommerce/25.jpg"></a>
                                    </div>
                                    <div class="ms-2 flex-grow-1">
                                        <h6>Shoes-<span>( Trendy &amp; stylist shoes)</span></h6>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-14"></i>
                                            <i class="ti ti-star-filled text-warning f-s-14"></i>
                                            <i class="ti ti-star-filled  f-s-14 star-filled"></i>
                                            <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                            <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                        </div>
                                        <p><span>size</span> : 33</p>
                                        <p><span>Items</span> : 1 </p>
                                    </div>
                                    <div class="cart-price-box">
                                        <a href="#">
                                            <i class="ti ti-x text-secondary"></i>
                                        </a>
                                        <h5>$350</h5>
                                    </div>
                                </div>

                                <div class="checkout-cart-box">
                                    <div class="cart-images d-flex-center flex-shrink-0">
                                        <a href="#"><img alt="product" class="w-80"
                                                         src="../assets/images/ecommerce/13.jpg"></a>
                                    </div>
                                    <div class="ms-2 flex-grow-1">
                                        <h6>Watch-<span>(Designer golden watch)</span></h6>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-14"></i>
                                            <i class="ti ti-star-filled text-warning f-s-14"></i>
                                            <i class="ti ti-star-filled text-warning f-s-14"></i>
                                            <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                            <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                        </div>
                                        <p><span>Color</span> : Golden</p>
                                        <p><span>Items</span> : 2 </p>
                                    </div>
                                    <div class="cart-price-box">
                                        <a href="#">
                                            <i class="ti ti-x text-secondary"></i>
                                        </a>
                                        <h5>$890</h5>
                                    </div>
                                </div>

                                <div class="pricing-details">
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <input class="form-control"
                                                   placeholder="Enter promo code / Gift Certificate"
                                                   type="text">
                                            <span class="input-group-text text-bg-dark"><i
                                                        class="ti ti-gift"></i></span>
                                        </div>
                                    </div>
                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">Subtotal</th>
                                            <th class="text-end" scope="col">$2,550</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Estimated Tax</td>
                                            <td class="text-end">$5.00</td>
                                        </tr>
                                        <tr>
                                            <td>Estimated Shipping &amp; Handling</td>
                                            <td class="text-end">$10.00</td>
                                        </tr>
                                        <tr>
                                            <td>Delivery Charges</td>
                                            <td class="text-end">-</td>
                                        </tr>
                                        <tr>
                                            <td>Coupon Discount</td>
                                            <td class="text-end">
                                                <span class="badge text-light-success">Apply</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <thead>
                                        <tr>
                                            <th>Total</th>
                                            <th class="text-end">$2000</th>
                                        </tr>
                                        </thead>
                                    </table>
                                    <button class="btn btn-primary w-100 rounded" id="next">Buy Order</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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

<!-- checkout js -->
<script src="../assets/js/checkout.js"></script>

</html>
