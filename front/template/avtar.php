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
                        <h4 class="main-title">Avtar</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                      </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Avtar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- Avtar start -->
                <div class="row">
                    <!-- avtar 1 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-between align-items-center code-header card-header">
                                <div>
                                    <h5>Colors</h5>
                                    <p class="text-muted">Use color <code>bg-*</code> to change the background theme
                                        color of avatar. </p>
                                </div>
                                <div>
                                    <a aria-controls="avtar1" aria-expanded="false" data-bs-toggle="collapse"
                                       href="#avtar1">
                                        <i class="ti ti-code source" data-source="av1"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex gap-3 flex-wrap">
                      <span class="bg-primary h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="bg-secondary h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="bg-success h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="bg-info h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="bg-warning h-45 w-45 d-flex-center b-r-50">
                        P
                      </span>
                                    <span class="bg-danger h-45 w-45 d-flex-center b-r-50">
                        AD
                      </span>
                                </div>
                            </div>
                        </div>

                        <pre class="av1 collapse mt-3" id="avtar1">
                  <code class="language-html">

                       &lt;div class="card"&gt;
                        &lt;div class="card-header"&gt;
                         &lt;h5&gt;Colors&lt;/h5&gt;
                         &lt;p class="text-muted"&gt;Use color &lt;code&gt;bg-*&lt;/code&gt; to change the background theme color of avatar.
                         &lt;/p&gt;
                        &lt;/div&gt;
                        &lt;div class="card-body"&gt;
                         &lt;div class="d-flex gap-3 flex-wrap"&gt;
                          &lt;span class="bg-primary h-45 w-45 d-flex-center b-r-50"&gt;
                           &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                          &lt;/span&gt;
                          &lt;span class="bg-secondary h-45 w-45 d-flex-center b-r-50"&gt;
                           &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                          &lt;/span&gt;
                          &lt;span class="bg-success h-45 w-45 d-flex-center b-r-50"&gt;
                           &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                          &lt;/span&gt;
                          &lt;span class="bg-info h-45 w-45 d-flex-center b-r-50"&gt;
                           &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                          &lt;/span&gt;
                          &lt;span class="bg-warning h-45 w-45 d-flex-center b-r-50"&gt;
                           P
                          &lt;/span&gt;
                          &lt;span class="bg-danger h-45 w-45 d-flex-center b-r-50"&gt;
                           AD
                          &lt;/span&gt;
                         &lt;/div&gt;
                        &lt;/div&gt;
                       &lt;/div&gt;

                  </code>
              </pre>
                    </div>

                    <!-- avtar 2 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-between align-items-center code-header card-header">
                                <div>
                                    <h5>Light background</h5>
                                    <p class="text-muted">For light style use <code>text-light-*</code> class.</p>
                                </div>
                                <div>
                                    <a aria-controls="avtar5" aria-expanded="false"
                                       data-bs-toggle="collapse" href="#avtar5">
                                        <i class="ti ti-code source" data-source="av5"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex gap-3 flex-wrap">
                      <span class="text-light-primary h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-light-secondary h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-light-success h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-light-info h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-light-warning h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-light-danger h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                </div>
                            </div>
                        </div>

                        <pre class="av5 collapse mt-3" id="avtar5">
                  <code class="language-html">
&lt;div class="card"&gt;
 &lt;div class="card-header"&gt;
  &lt;h5&gt;Light background&lt;/h5&gt;
  &lt;p class="text-muted"&gt;For light style use &lt;code&gt;text-light-*&lt;/code&gt; class.&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="card-body"&gt;
  &lt;div class="d-flex gap-3 flex-wrap"&gt;
   &lt;span class="text-light-primary h-45 w-45 d-flex-center b-r-50"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
   &lt;span class="text-light-secondary h-45 w-45 d-flex-center b-r-50"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
   &lt;span class="text-light-success h-45 w-45 d-flex-center b-r-50"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
   &lt;span class="text-light-info h-45 w-45 d-flex-center b-r-50"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
   &lt;span class="text-light-warning h-45 w-45 d-flex-center b-r-50"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
   &lt;span class="text-light-danger h-45 w-45 d-flex-center b-r-50"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
  &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
                  </code>
              </pre>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-between align-items-center code-header card-header">
                                <div>
                                    <h5>Radious</h5>
                                    <p class="text-muted">Radious avatar text in soft color example</p>
                                </div>
                                <div>
                                    <a aria-controls="avtar8" aria-expanded="false" data-bs-toggle="collapse"
                                       href="#avtar8">
                                        <i class="ti ti-code source" data-source="av8"></i>
                                    </a>
                                </div>

                            </div>

                            <div class="card-body">
                                <div class="d-flex gap-3 flex-wrap">
                      <span class="text-light-primary h-45 w-45 d-flex-center b-r-0">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-light-secondary h-45 w-45 d-flex-center b-r-6">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-light-success h-45 w-45 d-flex-center b-r-10">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-light-info h-45 w-45 d-flex-center b-r-14">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-light-warning h-45 w-45 d-flex-center b-r-20">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-light-danger h-45 w-45 d-flex-center b-r-30">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                </div>
                            </div>
                        </div>

                        <pre class="av8 collapse mt-3" id="avtar8">
  <code class="language-html">

&lt;div class="card"&gt;
 &lt;div class="card-header"&gt;
  &lt;h5&gt;Light background&lt;/h5&gt;
  &lt;p class="text-muted"&gt;For light style use &lt;code&gt;text-light-*&lt;/code&gt; class.&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="card-body"&gt;
  &lt;div class="d-flex gap-3 flex-wrap"&gt;
   &lt;span class="text-light-primary h-45 w-45 d-flex-center b-r-0"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
   &lt;span class="text-light-secondary h-45 w-45 d-flex-center b-r-6"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
   &lt;span class="text-light-success h-45 w-45 d-flex-center b-r-10"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
   &lt;span class="text-light-info h-45 w-45 d-flex-center b-r-14"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
   &lt;span class="text-light-warning h-45 w-45 d-flex-center b-r-20"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
   &lt;span class="text-light-danger h-45 w-45 d-flex-center b-r-30"&gt;
    &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
   &lt;/span&gt;
  &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
  </code>
</pre>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-between align-items-center code-header card-header">
                                <div>
                                    <h5>Outline</h5>
                                    <p class="text-muted">For outline style use <code>text-outline-*</code> class.
                                    </p>
                                </div>
                                <div>
                                    <a aria-controls="avtar2" aria-expanded="false" data-bs-toggle="collapse"
                                       href="#avtar2">
                                        <i class="ti ti-code source" data-source="av2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex gap-3 flex-wrap">
                      <span class="text-outline-primary h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-outline-secondary h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-outline-success h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-outline-info h-45 w-45 d-flex-center b-r-50">
                        <i class="fa-solid fa-user"></i>
                      </span>
                                    <span class="text-outline-warning h-45 w-45 d-flex-center b-r-50">
                        AR
                      </span>
                                    <span class="text-outline-danger h-45 w-45 d-flex-center b-r-50">
                        TE
                      </span>
                                </div>
                            </div>

                            <pre class="av2 collapse mt-3" id="avtar2">
                  <code class="language-html">

                       &lt;div class="card equal-card"&gt;
                        &lt;div class="card-header"&gt;
                         &lt;h5&gt;Outline&lt;/h5&gt;
                         &lt;p class="text-muted"&gt;For outline style use &lt;code&gt;text-outline-*&lt;/code&gt; class.&lt;/p&gt;
                        &lt;/div&gt;
                        &lt;div class="card-body"&gt;
                         &lt;div class="d-flex gap-3 flex-wrap"&gt;
                          &lt;span class="text-outline-primary h-45 w-45 d-flex-center b-r-50"&gt;
                           &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                          &lt;/span&gt;
                          &lt;span class="text-outline-secondary h-45 w-45 d-flex-center b-r-50"&gt;
                           &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                          &lt;/span&gt;
                          &lt;span class="text-outline-success h-45 w-45 d-flex-center b-r-50"&gt;
                           &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                          &lt;/span&gt;
                          &lt;span class="text-outline-info h-45 w-45 d-flex-center b-r-50"&gt;
                           &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                          &lt;/span&gt;
                          &lt;span class="text-outline-warning h-45 w-45 d-flex-center b-r-50"&gt;
                           AR
                          &lt;/span&gt;
                          &lt;span class="text-outline-danger h-45 w-45 d-flex-center b-r-50"&gt;
                           TE
                          &lt;/span&gt;
                         &lt;/div&gt;
                        &lt;/div&gt;
                       &lt;/div&gt;

                  </code>
              </pre>
                        </div>
                    </div>

                    <!-- avtar 3 -->

                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5>Images</h5>
                                <a aria-controls="avtar3" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#avtar3">
                                    <i class="ti ti-code source" data-source="av3"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="d-flex gap-3 flex-wrap">
                                    <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                        <img alt="avtar" class="img-fluid" src="../assets/images/avtar/1.png">
                                    </div>
                                    <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                        <img alt="avtar" class="img-fluid" src="../assets/images/avtar/2.png">
                                    </div>
                                    <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-success">
                                        <img alt="avtar" class="img-fluid" src="../assets/images/avtar/3.png">
                                    </div>
                                    <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                        <img alt="avtar" class="img-fluid" src="../assets/images/avtar/4.png">
                                    </div>
                                    <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-success">
                                        <img alt="avtar" class="img-fluid" src="../assets/images/avtar/5.png">
                                    </div>
                                    <div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-danger">
                                        <img alt="avtar" class="img-fluid" src="../assets/images/avtar/6.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <pre class="av3 collapse mt-3" id="avtar3">
  <code class="language-html">
&lt;div class="card"&gt;
&lt;div class="card-header"&gt;
   &lt;h5&gt;Images&lt;/h5&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
  &lt;div class="d-flex gap-3 flex-wrap"&gt;
  &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-primary"&gt;
   &lt;img src="../assets/images/avtar/1.png" alt="avtar" class="img-fluid"&gt;
  &lt;/div&gt;
  &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-secondary"&gt;
   &lt;img src="../assets/images/avtar/2.png" alt="avtar" class="img-fluid"&gt;
  &lt;/div&gt;
  &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-success"&gt;
   &lt;img src="../assets/images/avtar/3.png" alt="avtar" class="img-fluid"&gt;
  &lt;/div&gt;
  &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-info"&gt;
   &lt;img src="../assets/images/avtar/4.png" alt="avtar" class="img-fluid"&gt;
  &lt;/div&gt;
  &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-success"&gt;
   &lt;img src="../assets/images/avtar/5.png" alt="avtar" class="img-fluid"&gt;
  &lt;/div&gt;
  &lt;div class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-danger"&gt;
   &lt;img src="../assets/images/avtar/6.png" alt="avtar" class="img-fluid"&gt;
  &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                    </div>

                    <!-- avtar 4 -->

                    <div class="col-md-6">
                        <div class="card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5>Size</h5>
                                <a aria-controls="avtar4" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#avtar4">
                                    <i class="ti ti-code source" data-source="av4"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex gap-3 flex-wrap">
                        <span class="bg-secondary h-30 w-30 d-flex-center b-r-50">
                          <i class="fa-solid fa-user"></i>
                        </span>
                                        <span class="bg-success h-35 w-35 d-flex-center b-r-50">
                          <i class="fa-solid fa-user"></i>
                        </span>
                                        <span class="bg-info h-40 w-40 d-flex-center b-r-50">
                          <i class="fa-solid fa-user"></i>
                        </span>
                                        <span class="bg-warning h-45 w-45 d-flex-center b-r-50">
                          <i class="fa-solid fa-user"></i>
                        </span>
                                        <span class="bg-danger h-50 w-50 d-flex-center b-r-50">
                          <i class="fa-solid fa-user"></i>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <pre class="av4 collapse mt-3" id="avtar4">
                    <code class="language-html">
                 &lt;div class="card equal-card"&gt;
                  &lt;div class="card-header"&gt;
                   &lt;h5&gt;Size&lt;/h5&gt;
                  &lt;/div&gt;
                  &lt;div class="card-body"&gt;
                   &lt;div class="d-flex align-items-center"&gt;
                    &lt;div class="d-flex gap-3 flex-wrap"&gt;
                     &lt;span class="bg-secondary h-30 w-30 d-flex-center b-r-50"&gt;
                      &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                     &lt;/span&gt;
                     &lt;span class="bg-success h-35 w-35 d-flex-center b-r-50"&gt;
                      &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                     &lt;/span&gt;
                     &lt;span class="bg-info h-40 w-40 d-flex-center b-r-50"&gt;
                      &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                     &lt;/span&gt;
                     &lt;span class="bg-warning h-45 w-45 d-flex-center b-r-50"&gt;
                      &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                     &lt;/span&gt;
                     &lt;span class="bg-danger h-50 w-50 d-flex-center b-r-50"&gt;
                      &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                     &lt;/span&gt;
                    &lt;/div&gt;
                   &lt;/div&gt;
                  &lt;/div&gt;
                 &lt;/div&gt;

                </code>
                </pre>
                        </div>
                    </div>

                    <!-- avtar 6 -->

                    <div class="col-md-5">
                        <div class="card">
                            <div class="d-flex justify-content-between align-items-center code-header card-header">
                                <div>
                                    <h5 class="txt-ellipsis">Indicator position and icon</h5>
                                    <p class="text-muted">Radious avatar text in soft color example</p>
                                </div>
                                <div>
                                    <a aria-controls="avtar6" aria-expanded="false" data-bs-toggle="collapse"
                                       href="#avtar6">
                                        <i class="ti ti-code source" data-source="av6"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex gap-3 flex-wrap">
                      <span class="bg-danger h-45 w-45 d-flex-center b-r-50 position-relative">
                        <i class="fa-solid fa-user"></i>
                        <span
                                class="position-absolute top-5 start-1 top-0 p-1 bg-danger border border-light rounded-circle"></span>
                      </span>

                                    <span class="bg-success h-45 w-45 d-flex-center b-r-50 position-relative">
                        <i class="fa-solid fa-user"></i>
                        <span
                                class="position-absolute bottom-0 start-1 p-1 bg-success border border-light rounded-circle"></span>
                      </span>

                                    <span class="bg-warning h-45 w-45 d-flex-center b-r-50 position-relative">
                        <i class="fa-solid fa-user"></i>
                        <span
                                class="position-absolute bottom-0 end-0 p-1 bg-warning border border-light rounded-circle"></span>
                      </span>

                                    <span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative">
                        <img alt="avtar" class="img-fluid b-r-50" src="../assets/images/avtar/1.png">
                        <span
                                class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                      </span>

                                    <span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative">
                        <img alt="avtar" class="img-fluid b-r-50" src="../assets/images/avtar/4.png">
                        <span
                                class="position-absolute top-0 end-0 d-flex-center bg-warning border-light rounded-circle text-center h-20 w-20 f-s-10 start-30">3</span>
                      </span>
                                    <span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative">
                        <img alt="avtar" class="img-fluid b-r-50" src="../assets/images/avtar/6.png">
                        <span
                                class="position-absolute top-0 d-flex-center bg-danger border border-light rounded-circle text-center h-20 w-20 f-s-10 start-30"><i
                                    class="ti ti-mail"></i></span>
                      </span>
                                </div>
                            </div>

                            <pre class="av6 collapse mt-3" id="avtar6">
  <code class="language-html">
  &lt;div class="card equal-card"&gt;
  &lt;div class="card-header"&gt;
       &lt;h5&gt;Indicator position and icon&lt;/h5&gt;
     &lt;p class="text-muted"&gt;Radious avatar text in soft color example&lt;/p&gt;
    &lt;/div&gt;
       &lt;div class="card-body"&gt;
         &lt;div class="d-flex gap-3 flex-wrap"&gt;
          &lt;span class="bg-danger h-45 w-45 d-flex-center b-r-50 position-relative"&gt;
           &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
           &lt;span
            class="position-absolute top-5 start-1 top-0 p-1 bg-danger border border-light rounded-circle"&gt;&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="bg-success h-45 w-45 d-flex-center b-r-50 position-relative"&gt;
           &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
           &lt;span
            class="position-absolute bottom-0 start-1 p-1 bg-success border border-light rounded-circle"&gt;&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="bg-warning h-45 w-45 d-flex-center b-r-50 position-relative"&gt;
           &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
           &lt;span
            class="position-absolute bottom-0 end-0 p-1 bg-warning border border-light rounded-circle"&gt;&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative"&gt;
           &lt;img src="../assets/images/avtar/1.png" alt="avtar" class="img-fluid b-r-50"&gt;
           &lt;span
            class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"&gt;&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative"&gt;
           &lt;img src="../assets/images/avtar/4.png" alt="avtar" class="img-fluid b-r-50"&gt;
           &lt;span
            class="position-absolute top-0 end-0 d-flex-center bg-warning border-light rounded-circle text-center h-20 w-20 f-s-10 start-30"&gt;3&lt;/span&gt;
          &lt;/span&gt;
          &lt;span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative"&gt;
           &lt;img src="../assets/images/avtar/6.png" alt="avtar" class="img-fluid b-r-50"&gt;
           &lt;span
            class="position-absolute top-0 d-flex-center bg-danger border border-light rounded-circle text-center h-20 w-20 f-s-10 start-30"&gt;&lt;i
             class="ti ti-mail"&gt;&lt;/i&gt;&lt;/span&gt;
     &lt;/span&gt;
    &lt;/div&gt;
   &lt;/div&gt;
   &lt;/div&gt;
  </code>
</pre>
                        </div>
                    </div>

                    <!-- avtar 7 -->

                    <div class="col-md-7">
                        <div class="card">
                            <div class="d-flex justify-content-between align-items-center code-header card-header">
                                <div>
                                    <h5>Group with tooltip</h5>
                                    <p class="text-muted">User group with tooltip</p>
                                </div>
                                <div>
                                    <a aria-controls="avtar7" aria-expanded="false" data-bs-toggle="collapse"
                                       href="#avtar7">
                                        <i class="ti ti-code source" data-source="av7"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex gap-3 flex-wrap">
                                    <ul class="avatar-group">
                                        <li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                            <img alt="avtar" class="img-fluid" src="../assets/images/avtar/4.png">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-success"
                                            data-bs-title="Lennon Briggs" data-bs-toggle="tooltip">
                                            <img alt="avtar" class="img-fluid" src="../assets/images/avtar/5.png">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-danger"
                                            data-bs-title="Maya Horton" data-bs-toggle="tooltip">
                                            <img alt="avtar" class="img-fluid" src="../assets/images/avtar/6.png">
                                        </li>
                                    </ul>

                                    <ul class="avatar-group">
                                        <li class="text-bg-primary h-45 w-45 d-flex-center b-r-50"
                                            data-bs-title="Athena Stewart"
                                            data-bs-toggle="tooltip">
                                            <i class="fa-solid fa-user"></i>
                                        </li>
                                        <li class="text-bg-secondary h-45 w-45 d-flex-center b-r-50"
                                            data-bs-title="Connor Collins"
                                            data-bs-toggle="tooltip">
                                            <i class="fa-solid fa-user"></i>
                                        </li>
                                        <li class="text-bg-success h-45 w-45 d-flex-center b-r-50"
                                            data-bs-title="Raiden Simpson"
                                            data-bs-toggle="tooltip">
                                            <i class="fa-solid fa-user"></i>
                                        </li>
                                    </ul>

                                    <ul class="avatar-group">
                                        <li class="text-bg-danger h-45 w-45 d-flex-center b-r-50"
                                            data-bs-title="Everlee Lambert"
                                            data-bs-toggle="tooltip">
                                            A
                                        </li>
                                        <li class="text-bg-dark h-45 w-45 d-flex-center b-r-50"
                                            data-bs-title="Hunter Scott"
                                            data-bs-toggle="tooltip">
                                            CD
                                        </li>
                                        <li class="text-bg-warning h-45 w-45 d-flex-center b-r-50"
                                            data-bs-title="Hunter Scott"
                                            data-bs-toggle="tooltip">
                                            XYZ
                                        </li>
                                        <li class="text-bg-secondary h-30 w-30 d-flex-center b-r-50"
                                            data-bs-title="2 More"
                                            data-bs-toggle="tooltip">
                                            2+
                                        </li>
                                    </ul>

                                    <ul class="avatar-group">
                                        <li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light"
                                            data-bs-title="Sabrina Torres" data-bs-toggle="tooltip">
                                            <img alt="avtar" class="img-fluid" src="../assets/images/avtar/4.png">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-success b-2-light"
                                            data-bs-title="Eva Bailey" data-bs-toggle="tooltip">
                                            <img alt="avtar" class="img-fluid" src="../assets/images/avtar/5.png">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-danger b-2-light"
                                            data-bs-title="Michael Hughes" data-bs-toggle="tooltip">
                                            <img alt="avtar" class="img-fluid" src="../assets/images/avtar/6.png">
                                        </li>
                                        <li class="text-bg-secondary h-35 w-35 d-flex-center b-r-50"
                                            data-bs-title="10 More"
                                            data-bs-toggle="tooltip">
                                            10+
                                        </li>
                                    </ul>


                                    <ul class="avatar-group">
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                            data-bs-title="Sabrina Torres" data-bs-toggle="tooltip">
                          <span
                                  class="position-absolute top-0 start-2 p-1 bg-danger border border-light rounded-circle"></span>
                                            <img alt="avtar" class="img-fluid b-r-50 overflow-hidden"
                                                 src="../assets/images/avtar/4.png">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                            data-bs-title="Sabrina Torres" data-bs-toggle="tooltip">
                          <span
                                  class="position-absolute top-0 start-2 p-1 bg-success border border-light rounded-circle"></span>
                                            <img alt="avtar" class="img-fluid b-r-50 overflow-hidden"
                                                 src="../assets/images/avtar/1.png">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-warning b-2-light position-relative"
                                            data-bs-title="Sabrina Torres" data-bs-toggle="tooltip">
                          <span
                                  class="position-absolute top-0 start-2 p-1 bg-warning border border-light rounded-circle"></span>
                                            <img alt="avtar" class="img-fluid b-r-50 overflow-hidden"
                                                 src="../assets/images/avtar/2.png">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-info b-2-light position-relative"
                                            data-bs-title="Sabrina Torres" data-bs-toggle="tooltip">
                          <span
                                  class="position-absolute top-0 start-2 p-1 bg-info border border-light rounded-circle"></span>
                                            <img alt="avtar" class="img-fluid b-r-50 overflow-hidden"
                                                 src="../assets/images/avtar/3.png">
                                        </li>
                                        <li class="text-bg-primary h-35 w-35 d-flex-center b-r-50"
                                            data-bs-title="5 More"
                                            data-bs-toggle="tooltip">
                                            5+
                                        </li>
                                    </ul>


                                </div>
                            </div>
                            <pre class="av7 collapse mt-3" id="avtar7">
                    <code class="language-html">

                         &lt;div class="card"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;h5&gt;Group with tooltip&lt;/h5&gt;
                            &lt;p class="text-muted"&gt;User group with tooltip&lt;/p&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            &lt;div class="d-flex gap-3 flex-wrap"&gt;
                             &lt;ul class="avatar-group"&gt;
                           &lt;li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-primary"&gt;
                            &lt;img src="../assets/images/avtar/4.png" alt="avtar" class="img-fluid"&gt;
                           &lt;/li&gt;
                           &lt;li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-success"
                            data-bs-toggle="tooltip" data-bs-title="Lennon Briggs"&gt;
                            &lt;img src="../assets/images/avtar/5.png" alt="avtar" class="img-fluid"&gt;
                           &lt;/li&gt;
                           &lt;li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-danger"
                            data-bs-toggle="tooltip" data-bs-title="Maya Horton"&gt;
                            &lt;img src="../assets/images/avtar/6.png" alt="avtar" class="img-fluid"&gt;
                           &lt;/li&gt;
                             &lt;/ul&gt;

                             &lt;ul class="avatar-group"&gt;
                           &lt;li class="text-bg-primary h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            data-bs-title="Athena Stewart"&gt;
                            &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                           &lt;/li&gt;
                           &lt;li class="text-bg-secondary h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            data-bs-title="Connor Collins"&gt;
                            &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                           &lt;/li&gt;
                           &lt;li class="text-bg-success h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            data-bs-title="Raiden Simpson"&gt;
                            &lt;i class="fa-solid fa-user"&gt;&lt;/i&gt;
                           &lt;/li&gt;
                             &lt;/ul&gt;

                             &lt;ul class="avatar-group"&gt;
                           &lt;li class="text-bg-danger h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            data-bs-title="Everlee Lambert"&gt;
                            A
                           &lt;/li&gt;
                           &lt;li class="text-bg-dark h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            data-bs-title="Hunter Scott"&gt;
                            CD
                           &lt;/li&gt;
                           &lt;li class="text-bg-warning h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            data-bs-title="Hunter Scott"&gt;
                            XYZ
                           &lt;/li&gt;
                           &lt;li class="text-bg-secondary h-30 w-30 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            data-bs-title="2 More"&gt;
                            2+
                           &lt;/li&gt;
                             &lt;/ul&gt;

                             &lt;ul class="avatar-group"&gt;
                           &lt;li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light"
                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
                            &lt;img src="../assets/images/avtar/4.png" alt="avtar" class="img-fluid"&gt;
                           &lt;/li&gt;
                           &lt;li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-success b-2-light"
                            data-bs-toggle="tooltip" data-bs-title="Eva Bailey"&gt;
                            &lt;img src="../assets/images/avtar/5.png" alt="avtar" class="img-fluid"&gt;
                           &lt;/li&gt;
                           &lt;li class="h-45 w-45 d-flex-center b-r-50 overflow-hidden text-bg-danger b-2-light"
                            data-bs-toggle="tooltip" data-bs-title="Michael Hughes"&gt;
                            &lt;img src="../assets/images/avtar/6.png" alt="avtar" class="img-fluid"&gt;
                           &lt;/li&gt;
                           &lt;li class="text-bg-secondary h-35 w-35 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            data-bs-title="10 More"&gt;
                            10+
                           &lt;/li&gt;
                             &lt;/ul&gt;
                             &lt;ul class="avatar-group"&gt;
                           &lt;li class="h-45 w-45 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
                            &lt;span
                             class="position-absolute top-0 start-2 p-1 bg-danger border border-light rounded-circle"&gt;&lt;/span&gt;
                            &lt;img src="../assets/images/avtar/4.png" alt="avtar" class="img-fluid b-r-50 overflow-hidden"&gt;
                           &lt;/li&gt;
                           &lt;li class="h-45 w-45 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
                            &lt;span
                             class="position-absolute top-0 start-2 p-1 bg-success border border-light rounded-circle"&gt;&lt;/span&gt;
                            &lt;img src="../assets/images/avtar/1.png" alt="avtar" class="img-fluid b-r-50 overflow-hidden"&gt;
                           &lt;/li&gt;
                           &lt;li class="h-45 w-45 d-flex-center b-r-50 text-bg-warning b-2-light position-relative"
                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
                            &lt;span
                             class="position-absolute top-0 start-2 p-1 bg-warning border border-light rounded-circle"&gt;&lt;/span&gt;
                            &lt;img src="../assets/images/avtar/2.png" alt="avtar" class="img-fluid b-r-50 overflow-hidden"&gt;
                           &lt;/li&gt;
                           &lt;li class="h-45 w-45 d-flex-center b-r-50 text-bg-info b-2-light position-relative"
                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres"&gt;
                            &lt;span
                             class="position-absolute top-0 start-2 p-1 bg-info border border-light rounded-circle"&gt;&lt;/span&gt;
                            &lt;img src="../assets/images/avtar/3.png" alt="avtar" class="img-fluid b-r-50 overflow-hidden"&gt;
                           &lt;/li&gt;
                           &lt;li class="text-bg-primary h-35 w-35 d-flex-center b-r-50" data-bs-toggle="tooltip"
                            data-bs-title="5 More"&gt;
                            5+
                           &lt;/li&gt;
                             &lt;/ul&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;

                    </code>
                </pre>
                        </div>
                    </div>

                </div>
                <!-- Avtar end -->
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

<!-- avter js -->
<script src="../assets/js/avtar.js"></script>

</html>
