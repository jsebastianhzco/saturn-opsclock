<!DOCTYPE html>
<html lang="en">

<head>
    <!-- glight css -->
    <link rel="stylesheet" href="../assets/vendor/glightbox/glightbox.min.css">

    <!-- slick css -->
    <link rel="stylesheet" href="../assets/vendor/slick/slick.css">
    <link rel="stylesheet" href="../assets/vendor/slick/slick-theme.css">

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
                        <h4 class="main-title">Blog Details</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                                </a>
                            </li>
                            <li>
                                <a class="f-s-14 f-w-500" href="#">Blog Page</a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Blog Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- Blog Details start -->
                <div class="row">
                    <div class="col-lg-8 col-xxl-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="post-div mb-3">
                                    <div class="row g-2">
                                        <div class="col-12">
                                            <video class="w-100 h-400 rounded" controls>
                                                <source src="../assets/images/blog-app/video1.mp4" type="video/mp4">
                                                <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <a class="glightbox img-fluid rounded" data-glightbox="type: image;"
                                               href="../assets/images/blog-app/09.jpg">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/blog-app/09.jpg">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <a class="glightbox img-fluid rounded" data-glightbox="type: image;"
                                               href="../assets/images/blog-app/05.jpg">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/blog-app/05.jpg">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <a class="glightbox img-fluid rounded" data-glightbox="type: image;"
                                               href="../assets/images/blog-app/08.jpg">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/blog-app/08.jpg">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <a class="glightbox img-fluid rounded" data-glightbox="type: image;"
                                               href="../assets/images/blog-app/04.jpg">
                                                <img alt="image" class="img-fluid rounded"
                                                     src="../assets/images/blog-app/04.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="mb-3 text-dark f-w-600">Adjust your focus when life gets blurry.</h5>

                                <div class="mb-3">
                                    <p class="text-secondary">
                                        Photography is the art, application, and practice of creating images by
                                        recording light, either
                                        electronically by means of an image sensor, or chemically by means of a
                                        light-sensitive material
                                        such as photographic film.
                                    </p>
                                    <p class="text-secondary">
                                        The word Photography literally means 'drawing with light', which derives
                                        from the Greek photo,
                                        meaning light and graph, meaning to draw. Photography is the process of
                                        recording an image - a
                                        photograph - on lightsensitive film or, in the case of digital photography,
                                        via a digital
                                        electronic or magnetic memory.
                                    </p>

                                    <div class="card card-light-secondary shadow-none my-3">
                                        <div class="card-body">
                                            <i class="ti ti-quote icon-bg"></i>
                                            <p class="mb-2 text-dark f-w-700">
                                                “I never stay in one country more than three months. Why? Because I
                                                was interested in
                                                seeing, and if I stay longer I become blind.”
                                            </p>
                                            <h6 class="text-secondary text-end"><cite>- Josef Koudelka.</cite></h6>
                                        </div>
                                    </div>

                                    <p class="text-secondary mb-4">
                                        In 1826, Phosphoric Niece first managed to fix an image that was captured
                                        with a camera, but at
                                        least eight hours or even several days of exposure in the camera were
                                        required and the earliest
                                        results were very crude. Niépce's associate Louis Daguerre went on to
                                        develop the daguerreotype
                                        process, the first publicly announced and commercially viable photographic
                                        process. The
                                        daguerreotype required only minutes of exposure in the camera, and produced
                                        clear, finely
                                        detailed results. The details were introduced to the world in 1839, a date
                                        generally accepted as
                                        the birth year of practical photography.The metal-based daguerreotype
                                        process soon had some
                                        competition from the paper-based calotype negative and salt print processes
                                        invented by William
                                        Henry Fox Talbot and demonstrated in 1839 soon after news about the
                                        daguerreotype reached
                                        Talbot. Subsequent innovations made photography easier and more versatile.
                                    </p>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <h5 class="mb-3 text-dark f-w-600">List of photographers</h5>
                                            <ul class="blog-list">
                                                <li><span
                                                            class="text-dark f-w-500">Charlotte Abram (born 1993)</span>
                                                    - photographer and filmmaker
                                                </li>
                                                <li><span class="text-dark f-w-500">Jennifer Des (born 1975)</span>
                                                    - photographer
                                                </li>
                                                <li><span
                                                            class="text-dark f-w-500">Nathalie Gasses (born 1964)</span>
                                                    - writer, photographer
                                                </li>
                                                <li><span
                                                            class="text-dark f-w-500">Germaine Van Paras (1893 - 1983)</span>
                                                    - film director,
                                                    photographer, educator
                                                </li>
                                                <li><span
                                                            class="text-dark f-w-500">Katrin Vermeer (born 1979)</span>
                                                    -photographer, filmmaker
                                                </li>
                                                <li><span class="text-dark f-w-500">Stephanie Windings-rate (1939 - 2019)</span>
                                                    - artistic portrait
                                                    and animal photographer
                                                </li>
                                                <li><span
                                                            class="text-dark f-w-500">Claudia Andujar (born 1931)</span>
                                                    - Swiss-born Brazilian
                                                    photographer and photojournalist
                                                </li>
                                                <li><span
                                                            class="text-dark f-w-500">Brigida Baltar (born 1959)</span>
                                                    - visual artist and photographer
                                                </li>
                                                <li><span class="text-dark f-w-500">Alice Della (born 1987)</span> -
                                                    model, photographer
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <img alt="" class="img-fluid rounded"
                                                 src="../assets/images/blog-app/03.jpg">
                                        </div>
                                    </div>

                                    <p class="text-secondary">
                                        The commercial introduction of computer-based electronic digital cameras in
                                        the 1990s soon
                                        revolutionized photography. During the first decade of the 21st century,
                                        traditional film-based
                                        photochemical methods were increasingly marginalized as the practical
                                        advantages of the new
                                        technology became widely appreciated and the image quality of moderately
                                        priced digital cameras
                                        was continually improved. Especially since cameras became a standard feature
                                        on smartphones,
                                        taking pictures (and instantly publishing them online) has become a
                                        ubiquitous everyday practice
                                        around the world.
                                    </p>

                                </div>
                                <div class="app-divider-v mb-2"></div>
                                <div class="d-flex align-items-center flex-wrap ">
                                    <div class="h-50 w-50 d-flex-center b-r-10 overflow-hidden">
                                        <img alt="" class="bg-danger img-fluid" src="../assets/images/avtar/9.png">
                                    </div>
                                    <div class="flex-grow-1 ps-2 me-2">
                                        <h6 class="mb-0 f-w-500 text-dark"> Bette Hagenes</h6>
                                        <div class="text-muted f-s-12">26 Nov,2022</div>
                                    </div>
                                    <div>
                                        <a class="btn btn-sm icon-btn b-r-5" href="#" role="button"> <i
                                                    class="ti ti-thumb-up f-s-20"></i></a>
                                        <a class="btn btn-sm icon-btn b-r-5" href="#id1" role="button"> <i
                                                    class="ti ti-brand-hipchat f-s-20"></i></a>
                                        <a class="btn btn-sm icon-btn b-r-5" href="#" role="button"> <i
                                                    class="ti ti-share f-s-20"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5>Comments</h5>
                            </div>
                            <div class="card-body">
                                <div class="blogcomment-box mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden comment-img">
                                            <img alt="avtar" class="bg-warning img-fluid"
                                                 src="../assets/images/avtar/4.png">
                                        </div>
                                        <div class="commentdiv">
                                            <h6 class="mb-0 text-dark f-w-600">Bette Hagenes <span
                                                        class="text-muted f-s-12"> 1 min</span></h6>
                                            <p class="text-muted mb-0">
                                                “Photography is the only language that can be understood anywhere in
                                                the world.”
                                                <span class="fs-6 d-inline-block text-secondary"><cite>- Bruno Barbey</cite></span>
                                            </p>
                                            <span class="badge text-light-secondary">lenora@gmail.com</span>
                                            <span class="badge text-light-dark"> #beautiful</span>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <a aria-expanded="false" class="icon-btn dropdown-toggle p-2"
                                                   data-bs-auto-close="true" data-bs-toggle="dropdown"
                                                   role="button">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                    class="ti ti-share"></i> Share </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-edit"></i>
                                                            Edit </a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                    class="ti ti-trash"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blogcomment-box mb-3">
                                    <div class="d-flex justify-content-between ">
                                        <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden comment-img">
                                            <img alt="avtar" class="bg-warning img-fluid"
                                                 src="../assets/images/avtar/4.png">
                                        </div>
                                        <div class="commentdiv">
                                            <h6 class="mb-0 text-dark f-w-600">Bette Hagenes <span
                                                        class="text-muted f-s-12"> 1 min</span></h6>
                                            <p class="text-muted mb-0">You're such a talented person with the
                                                camera. I appreciate your work
                                                ,It's always good to work with a photographer who knows how to get
                                                the job done. </p>
                                        </div>
                                        <div>
                                            <div class="btn-group dropdown-icon-none">
                                                <a aria-expanded="false" class="icon-btn dropdown-toggle p-2"
                                                   data-bs-auto-close="true" data-bs-toggle="dropdown"
                                                   role="button">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                    class="ti ti-share"></i> Share </a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ti ti-edit"></i>
                                                            Edit </a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                    class="ti ti-trash"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="mb-3">Leave A Comment</h5>
                                <form class="app-form" id="id1">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                    <textarea class="form-control" placeholder="Enter Your Comment"
                                                              rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input class="form-control" placeholder="Enter Your Name"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <input class="form-control" placeholder="Enter Your Email"
                                                       type="email">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-end">
                                                <button class="btn btn-primary b-r-22" type="button">
                                                    <i class="ti ti-send"></i> Comment
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <h5 class="mb-3">Related Posts</h5>
                        <div class="row">
                            <div class="col-md-6 col-xxl-4">
                                <div class="card blog-card overflow-hidden">
                                    <a class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;"
                                       href="../assets/images/blog-app/01.jpg">
                                        <img alt="..." class="card-img-top" src="../assets/images/blog-app/01.jpg">
                                    </a>
                                    <div class="tag-container">
                                        <span class="badge">Lifestyle</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 25.03.2022
                                        </p>
                                        <a class="bloglink" href="./blog_read_more.php">
                                            <h5 class="title-text mb-2">Photographs</h5>
                                        </a>
                                        <p class="card-text text-secondary">
                                            “Photography is a way of feeling, of touching, of loving. What you have
                                            caught on film…”
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card blog-card overflow-hidden">
                                    <a class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;"
                                       href="../assets/images/blog-app/05.jpg">
                                        <img alt="..." class="card-img-top" src="../assets/images/blog-app/05.jpg">
                                    </a>
                                    <div class="tag-container">
                                        <span class="badge text-light-secondary">Travel</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 08.04.2022
                                        </p>
                                        <a class="bloglink" href="./blog_read_more.php">
                                            <h5 class="title-text mb-2">Living in the Moment</h5>
                                        </a>
                                        <p class="card-text text-secondary">
                                            “I believe the happiness we feel in relation to animals is immensely...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xxl-4">
                                <div class="card blog-card overflow-hidden">
                                    <a class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;"
                                       href="../assets/images/blog-app/04.jpg">
                                        <img alt="..." class="card-img-top" src="../assets/images/blog-app/04.jpg">
                                    </a>
                                    <div class="tag-container">
                                        <span class="badge text-light-secondary">Travel</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-body-secondary"><i class="ti ti-calendar-due"></i> 25.03.2022
                                        </p>
                                        <a class="bloglink" href="./blog_read_more.php">
                                            <h5 class="title-text mb-2">Travel</h5>
                                        </a>
                                        <p class="card-text text-secondary">
                                            Travel is the movement of people between distant geographical
                                            locations.To travel ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xxl-3">
                        <div class="row">
                            <!-- About Me start -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>About Me</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-secondary mb-3">
                                            <p class="mb-3">
                                                Hi! I am Aaliyah.
                                            </p>
                                            <p>
                                                Over the last fifteen years of my career, I earned a sense of
                                                creativity. I want to show the
                                                beauty of life in a chaotic world.
                                            </p>
                                            <p>
                                                In my first year as a photographer, I thought the photos I took
                                                needed more spark. So I
                                                enrolled in a graphic design class. I combined my photographs with
                                                visual arts and finally
                                                saw
                                                what I was looking for. The spark!
                                            </p>
                                        </div>

                                        <div class="">
                                            <button class="btn btn-facebook icon-btn b-r-5" type="button">
                                                <i class="ti ti-brand-facebook text-white"></i>
                                            </button>
                                            <button class="btn btn-whatsapp icon-btn b-r-5" type="button">
                                                <i class="ti ti-brand-whatsapp text-white"></i>
                                            </button>
                                            <button class="btn btn-twitter icon-btn b-r-5" type="button">
                                                <i class="ti ti-brand-twitter text-white"></i>
                                            </button>
                                            <button class="btn btn-github  icon-btn b-r-5" type="button">
                                                <i class="ti ti-brand-github text-white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- About Me end -->
                            <!-- Categories start -->
                            <div class="col-md-6 col-lg-12">
                                <div class="card equal-card">
                                    <div class="card-header">
                                        <h5>Categories</h5>
                                    </div>
                                    <div class="card-body">
                                        <ol class="list-group categories-list">
                                            <li class="list-group-item d-flex justify-content-between align-items-start ">
                                                <div class="me-auto categories-content">
                                                    <p class="text-primary f-w-600"><i
                                                                class="ti ti-chevron-right"></i> Fashion</p>
                                                </div>
                                                <span class="">[7]</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto categories-content">
                                                    <p class="text-secondary f-w-600"><i
                                                                class="ti ti-chevron-right"></i> Lifestyle</p>
                                                </div>
                                                <span class="">[10]</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto categories-content">
                                                    <p class="text-success f-w-600"><i
                                                                class="ti ti-chevron-right"></i> Food</p>
                                                </div>
                                                <span class="">[15]</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto categories-content">
                                                    <p class="text-warning f-w-600"><i
                                                                class="ti ti-chevron-right"></i> Travel</p>
                                                </div>
                                                <span class="">[20]</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto categories-content">
                                                    <p class="text-danger f-w-600"><i
                                                                class="ti ti-chevron-right"></i> Sports</p>
                                                </div>
                                                <span class="">[8]</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto categories-content">
                                                    <p class="f-w-600"><i class="ti ti-chevron-right"></i>
                                                        Technology</p>
                                                </div>
                                                <span class="">[10]</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto categories-content">
                                                    <p class="text-info f-w-600"><i class="ti ti-chevron-right"></i>
                                                        Business</p>
                                                </div>
                                                <span class="">[25]</span>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- Categories end -->
                            <!-- Popular Blog Posts start -->
                            <div class="col-md-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Popular Blog Posts</h5>
                                    </div>
                                    <div class="card-body popular-blog-list">
                                        <div class="position-relative mb-3">
                                            <div>
                                                <div class="position-absolute">
                                                    <img alt="" class="w-40 h-40 bg-warning rounded"
                                                         src="../assets/images/avtar/5.png">
                                                </div>
                                            </div>
                                            <div class="ms-5">
                                                <p class="text-dark mb-0 f-w-500 f-s-14">There is a collage of large
                                                    headlines and pictures..</p>
                                                <div class="text-secondary text-end text-end f-s-12">2 day ago</div>
                                            </div>
                                        </div>
                                        <div class="position-relative mb-3">
                                            <div>
                                                <div class="position-absolute">
                                                    <img alt="" class="w-40 h-40 bg-danger rounded"
                                                         src="../assets/images/avtar/14.png">
                                                </div>
                                            </div>
                                            <div class="ms-5">
                                                <p class="text-dark mb-0 f-w-500 f-s-14">In addition, some
                                                    additional blog content is displayed..</p>
                                                <div class="text-secondary text-end f-s-12">10 day ago</div>
                                            </div>
                                        </div>
                                        <div class="position-relative mb-3">
                                            <div>
                                                <div class="position-absolute">
                                                    <img alt="" class="w-40 h-40 bg-primary rounded"
                                                         src="../assets/images/avtar/4.png">
                                                </div>
                                            </div>
                                            <div class="ms-5">
                                                <p class="text-dark mb-0 f-w-500 f-s-14">It also showcases the best
                                                    tech deals, helping people make. .</p>
                                                <div class="text-secondary text-end f-s-12">1 day ago</div>
                                            </div>
                                        </div>
                                        <div class="position-relative mb-3">
                                            <div>
                                                <div class="position-absolute">
                                                    <img alt="" class="w-40 h-40 bg-success rounded"
                                                         src="../assets/images/avtar/7.png">
                                                </div>
                                            </div>
                                            <div class="ms-5">
                                                <p class="text-dark mb-0 f-w-500 f-s-14">Further down the page, more
                                                    article headlines are sorted by the most..</p>
                                                <div class="text-secondary text-end f-s-12">5min ago</div>
                                            </div>
                                        </div>
                                        <div class="position-relative mb-3">
                                            <div>
                                                <div class="position-absolute">
                                                    <img alt="" class="w-40 h-40 bg-dark rounded"
                                                         src="../assets/images/avtar/9.png">
                                                </div>
                                            </div>
                                            <div class="ms-5">
                                                <p class="text-dark mb-0 f-w-500 f-s-14">The blog also does a great
                                                    job of emphasizing text readability..</p>
                                                <div class="text-secondary text-end f-s-12">5min ago</div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a class="btn btn-md btn-primary w-100 b-r-22" href="./blog.php"
                                               role="button">
                                                <i class="ti ti-plus"></i> View All
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Popular Blog Posts end -->
                            <!-- Popular Blog Tags start -->
                            <div class="col-md-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Popular Blog Tags</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="blog-tags d-flex gap-2 f-s-16 flex-wrap">
                                            <span class="badge text-light-dark">#Lifestyle</span>
                                            <span class="badge text-light-secondary">#Blogging</span>
                                            <span class="badge text-light-dark"> #beautiful</span>
                                            <span class="badge text-light-secondary">#DesignBlogger</span>
                                            <span class="badge text-light-dark"> #likeforlikes</span>
                                            <span class="badge text-light-dark"> #vlog</span>
                                            <span class="badge text-light-secondary"> #instafashion</span>
                                            <span class="badge text-light-dark"> #lifestyleblogger</span>
                                            <span class="badge text-light-secondary">#fashionista</span>
                                            <span class="badge text-light-dark"> #blogueira</span>
                                            <span class="badge text-light-dark">#bloggersofinstagram</span>
                                            <span class="badge text-light-dark"> #news</span>
                                            <span class="badge text-light-secondary"> #foodblogger</span>
                                            <span class="badge text-light-dark"> #vlog</span>
                                            <span class="badge text-light-secondary"> #instafashion</span>
                                            <span class="badge text-light-dark">#beauty</span>
                                            <span class="badge text-light-secondary"> #bloggerstyle</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Popular Blog Tags end -->
                            <div class="col-md-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Subscribe</h5>
                                    </div>
                                    <div class="card-body">
                                        <form class="app-form">
                                            <div class="mb-3">
                                                <label class="form-label f-w-500">Email</label>
                                                <div class="input-group">
                                                    <input class="form-control form-control-sm"
                                                           placeholder="@gmail.com"
                                                           type="text">
                                                    <button class="btn btn-primary" type="button"><i
                                                                class="ti ti-mail-fast fs-5"></i></button>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <p class="text-success">Subscribe to our newsletter and stay
                                                    Updated</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Details end -->
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

<!-- Glightbox js -->
<script src="../assets/vendor/glightbox/glightbox.min.js"></script>

<!-- slick-file -->
<script src="../assets/vendor/slick/slick.min.js"></script>

<!-- blog js -->
<script src="../assets/js/blog.js"></script>

</html>
