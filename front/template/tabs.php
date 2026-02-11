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
                        <h4 class="main-title">Tabs</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                      </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Tabs</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->
                <!-- Tabs start -->
                <div class="row app-tabs-section">
                    <!-- Tab 1 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="d-flex justify-content-between  code-header card-header">
                                <h5>Basic Tabs</h5>
                                <a aria-controls="tab1" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#tab1">
                                    <i class="ti ti-code source" data-source="t1"></i>
                                </a>
                            </div>

                            <div class="card-body">
                                <ul class="nav nav-tabs app-tabs-primary" id="Basic" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="html-tab-pane" aria-selected="true"
                                                class="nav-link active"
                                                data-bs-target="#html-tab-pane" data-bs-toggle="tab" id="html-tab"
                                                role="tab"
                                                type="button">HTML
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="css-tab-pane" aria-selected="false" class="nav-link"
                                                data-bs-target="#css-tab-pane"
                                                data-bs-toggle="tab" id="css-tab" role="tab"
                                                type="button">CSS
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="php-tab-pane" aria-selected="false" class="nav-link"
                                                data-bs-target="#php-tab-pane"
                                                data-bs-toggle="tab" id="php-tab" role="tab"
                                                type="button">PHP
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="BasicContent">
                                    <div aria-labelledby="html-tab" class="tab-pane fade show active"
                                         id="html-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>Hypertext Markup Language is the standard markup language for documents
                                            designed to be
                                            displayed in a web browser.</p>
                                        <p>It can be assisted by technologies such as Cascading Style Sheets (CSS)
                                            and scripting
                                            languages such as JavaScript.</p>
                                    </div>
                                    <div aria-labelledby="css-tab" class="tab-pane fade" id="css-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <p>Cascading Style Sheets (CSS) is a style sheet language used for
                                            describing the presentation
                                            of a document written in a markup language like HTML.</p>
                                        <p>CSS is a cornerstone technology of the World Wide Web, alongside HTML and
                                            JavaScript.</p>
                                    </div>
                                    <div aria-labelledby="php-tab" class="tab-pane fade" id="php-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <p>PHP is a popular general-purpose scripting language that is especially
                                            suited to web
                                            development.</p>
                                        <p>It was originally created by Rasmus Lerdorf in 1994; the PHP reference
                                            implementation is now
                                            produced by The PHP Group.</p>
                                    </div>
                                </div>
                            </div>

                            <pre class="t1 collapse mt-3" id="tab1">
  <code class="language-html">
&lt;div class="card equal-card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt;Basic Tabs&lt;/h5&gt;
     &lt;/div&gt;
         &lt;div class="card-body"&gt;
   &lt;ul class="nav nav-tabs app-tabs-primary" id="Basic" role="tablist"&gt;
    &lt;li class="nav-item" role="presentation"&gt;
     &lt;button class="nav-link active" id="html-tab" data-bs-toggle="tab"
      data-bs-target="#html-tab-pane" type="button" role="tab" aria-controls="html-tab-pane"
      aria-selected="true"&gt;HTML&lt;/button&gt;
    &lt;/li&gt;
    &lt;li class="nav-item" role="presentation"&gt;
     &lt;button class="nav-link" id="css-tab" data-bs-toggle="tab" data-bs-target="#css-tab-pane"
      type="button" role="tab" aria-controls="css-tab-pane" aria-selected="false"&gt;CSS&lt;/button&gt;
    &lt;/li&gt;
    &lt;li class="nav-item" role="presentation"&gt;
     &lt;button class="nav-link" id="php-tab" data-bs-toggle="tab" data-bs-target="#php-tab-pane"
      type="button" role="tab" aria-controls="php-tab-pane" aria-selected="false"&gt;PHP&lt;/button&gt;
    &lt;/li&gt;
   &lt;/ul&gt;
   &lt;div class="tab-content" id="BasicContent"&gt;
    &lt;div class="tab-pane fade show active" id="html-tab-pane" role="tabpanel"
     aria-labelledby="html-tab" tabindex="0"&gt;
     &lt;p&gt;Hypertext Markup Language is the standard markup language for documents designed to be
      displayed in a web browser.&lt;/p&gt;
     &lt;p&gt;It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting
      languages such as JavaScript.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="css-tab-pane" role="tabpanel" aria-labelledby="css-tab"
     tabindex="0"&gt;
     &lt;p&gt;Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation
      of a document written in a markup language like HTML.&lt;/p&gt;
     &lt;p&gt;CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="php-tab-pane" role="tabpanel" aria-labelledby="php-tab"
     tabindex="0"&gt;
     &lt;p&gt;PHP is a popular general-purpose scripting language that is especially suited to web
      development.&lt;/p&gt;
     &lt;p&gt;It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now
      produced by The PHP Group.&lt;/p&gt;
      &lt;/div&gt;
     &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                        </div>
                    </div>

                    <!-- Tab 2 -->
                    <div class="col-lg-6">
                        <div class="card equal-card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5>Light Tabs</h5>
                                <a aria-controls="tab3" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#tab3">
                                    <i class="ti ti-code source" data-source="t3"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-light-primary" id="Light" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="description-tab-pane" aria-selected="true"
                                                class="nav-link active"
                                                data-bs-target="#description-tab-pane" data-bs-toggle="tab"
                                                id="description-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-lifebuoy pe-1 ps-1"></i>
                                            Description
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="howowrk-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#howowrk-tab-pane" data-bs-toggle="tab"
                                                id="howowrk-tab"
                                                role="tab"
                                                type="button"><i class="ti ti-keyboard-show pe-1 ps-1"></i>
                                            How It Works
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="drawbacks-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#drawbacks-tab-pane" data-bs-toggle="tab"
                                                id="drawbacks-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-file-dislike pe-1 ps-1"></i>Drawbacks
                                        </button>
                                    </li>

                                </ul>
                                <div class="tab-content" id="LightContent">
                                    <div aria-labelledby="description-tab" class="tab-pane fade show active"
                                         id="description-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                    <div aria-labelledby="howowrk-tab" class="tab-pane fade" id="howowrk-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <ol>
                                            <li>Show only the last tab.</li>
                                            <li>If <code>:target</code> matches a tab, show it and hide all
                                                following siblings.
                                            </li>
                                            <li>Matches a tab, show it and hide all following siblings.</li>
                                        </ol>
                                    </div>

                                    <div aria-labelledby="drawbacks-tab" class="tab-pane fade"
                                         id="drawbacks-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                </div>
                            </div>

                            <pre class="t3 collapse mt-3" id="tab3">
  <code class="language-html">
&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt;Outline Tabs&lt;/h5&gt;
       &lt;/div&gt;
        &lt;div class="card-body"&gt;
         &lt;ul class="nav nav-tabs tab-outline-primary" id="Outline" role="tablist"&gt;
          &lt;li class="nav-item" role="presentation"&gt;
           &lt;button class="nav-link active" id="connect-tab" data-bs-toggle="tab"
            data-bs-target="#connect-tab-pane" type="button" role="tab" aria-controls="connect-tab-pane"
            aria-selected="true"&gt;Connect&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
           &lt;button class="nav-link" id="discover-tab" data-bs-toggle="tab"
            data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
            aria-selected="false"&gt;Discover&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
           &lt;button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
            type="button" role="tab" aria-controls="order-tab-pane" aria-selected="false"&gt;Orders&lt;/button&gt;
          &lt;/li&gt;
         &lt;/ul&gt;
         &lt;div class="tab-content" id="OutlineContent"&gt;
          &lt;div class="tab-pane fade show active" id="connect-tab-pane" role="tabpanel"
           aria-labelledby="connect-tab" tabindex="0"&gt;
           &lt;h6 class="mb-1"&gt;This is the content of tab one.&lt;/h6&gt;
           &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
            accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
            Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
           tabindex="0"&gt;
           &lt;h6 class="mb-1"&gt;This is the content of tab two.&lt;/h6&gt;
           &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
            accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
            Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
           tabindex="0"&gt;
           &lt;h6 class="mb-1"&gt;This is the content of tab three.&lt;/h6&gt;
           &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
            accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
            Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                        </div>
                    </div>


                    <!-- Tab 3 -->
                    <div class="col-lg-6">
                        <div class="card card-equal ">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5>Outline Tabs</h5>
                                <a aria-controls="tab2" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#tab2">
                                    <i class="ti ti-code source" data-source="t2"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-outline-primary" id="Outline" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="connect-tab-pane" aria-selected="true"
                                                class="nav-link active"
                                                data-bs-target="#connect-tab-pane" data-bs-toggle="tab"
                                                id="connect-tab"
                                                role="tab"
                                                type="button">Connect
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="discover-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#discover-tab-pane" data-bs-toggle="tab"
                                                id="discover-tab"
                                                role="tab"
                                                type="button">Discover
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="order-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#order-tab-pane"
                                                data-bs-toggle="tab" id="order-tab" role="tab"
                                                type="button">Orders
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="OutlineContent">
                                    <div aria-labelledby="connect-tab" class="tab-pane fade show active"
                                         id="connect-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <h6 class="mb-1">This is the content of tab one.</h6>
                                        <p>This field is a rich HTML field with a content editor like others used in
                                            Sitefinity. It
                                            accepts images, video, tables, text, etc. Street art polaroid
                                            microdosing la croix taxidermy.
                                            Jean shorts kinfolk distillery lumbersexual pinterest XOXO
                                            semiotics.</p>
                                    </div>
                                    <div aria-labelledby="discover-tab" class="tab-pane fade" id="discover-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <h6 class="mb-1">This is the content of tab two.</h6>
                                        <p>This field is a rich HTML field with a content editor like others used in
                                            Sitefinity. It
                                            accepts images, video, tables, text, etc. Street art polaroid
                                            microdosing la croix taxidermy.
                                            Jean shorts kinfolk distillery lumbersexual pinterest XOXO
                                            semiotics.</p>
                                    </div>
                                    <div aria-labelledby="order-tab" class="tab-pane fade" id="order-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <h6 class="mb-1">This is the content of tab three.</h6>
                                        <p>This field is a rich HTML field with a content editor like others used in
                                            Sitefinity. It
                                            accepts images, video, tables, text, etc. Street art polaroid
                                            microdosing la croix taxidermy.
                                            Jean shorts kinfolk distillery lumbersexual pinterest XOXO
                                            semiotics.</p>
                                    </div>
                                </div>
                            </div>

                            <pre class="t2 collapse mt-3" id="tab2">
  <code class="language-html">
&lt;div class="card"&gt;
  &lt;div class="card-header code-header"&gt;
    &lt;h5&gt;Outline Tabs&lt;/h5&gt;
      &lt;a data-bs-toggle="collapse" href="#tab2" aria-expanded="false" aria-controls="tab2"&gt;
        &lt;i class="ti ti-code source" data-source="t2"&gt;&lt;/i&gt;
        &lt;/a&gt;
        &lt;/div&gt;
        &lt;div class="card-body"&gt;
         &lt;ul class="nav nav-tabs tab-outline-primary" id="Outline" role="tablist"&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link active" id="connect-tab" data-bs-toggle="tab"
         data-bs-target="#connect-tab-pane" type="button" role="tab" aria-controls="connect-tab-pane"
         aria-selected="true"&gt;Connect&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="discover-tab" data-bs-toggle="tab"
         data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
         aria-selected="false"&gt;Discover&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
         type="button" role="tab" aria-controls="order-tab-pane" aria-selected="false"&gt;Orders&lt;/button&gt;
          &lt;/li&gt;
         &lt;/ul&gt;
         &lt;div class="tab-content" id="OutlineContent"&gt;
          &lt;div class="tab-pane fade show active" id="connect-tab-pane" role="tabpanel"
        aria-labelledby="connect-tab" tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab one.&lt;/h6&gt;
        &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
         accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
         Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab two.&lt;/h6&gt;
        &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
         accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
         Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab three.&lt;/h6&gt;
        &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
         accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
         Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                        </div>
                    </div>

                    <!-- tab 4 -->

                    <div class="col-lg-6">
                        <div class="card equal-card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5>Background Tabs</h5>
                                <a aria-controls="tab4" aria-expanded="false"
                                   data-bs-toggle="collapse" href="#tab4">
                                    <i class="ti ti-code source" data-source="t4"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-primary bg-primary p-1" id="bg" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="features-tab-pane" aria-selected="true"
                                                class="nav-link active"
                                                data-bs-target="#features-tab-pane" data-bs-toggle="tab"
                                                id="features-tab"
                                                role="tab"
                                                type="button"><i class="ti ti-disc pe-1 ps-1"></i> features
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="history-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#history-tab-pane" data-bs-toggle="tab"
                                                id="history-tab"
                                                role="tab"
                                                type="button"><i class="ti ti-history pe-1 ps-1"></i>History
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="reviews-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#reviews-tab-pane" data-bs-toggle="tab"
                                                id="reviews-tab"
                                                role="tab"
                                                type="button"><i class="ti ti-star pe-1 ps-1"></i>reviews
                                        </button>
                                    </li>

                                </ul>
                                <div class="tab-content" id="bgContent">
                                    <div aria-labelledby="features-tab" class="tab-pane fade show active"
                                         id="features-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                    <div aria-labelledby="history-tab" class="tab-pane fade" id="history-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <ol>
                                            <li>Show only the last tab.</li>
                                            <li>If <code>:target</code> matches a tab, show it and hide all
                                                following siblings.
                                            </li>
                                            <li>Matches a tab, show it and hide all following siblings.</li>
                                        </ol>
                                    </div>

                                    <div aria-labelledby="reviews-tab" class="tab-pane fade" id="reviews-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                </div>
                            </div>

                            <pre class="t4 collapse mt-3" id="tab4">
  <code class="language-html">
&lt;div class="card equal-card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt;Background Tabs&lt;/h5&gt;
      &lt;/div&gt;
         &lt;div class="card-body"&gt;
          &lt;ul class="nav nav-tabs tab-primary bg-primary p-1" id="bg" role="tablist"&gt;
           &lt;li class="nav-item" role="presentation"&gt;
            &lt;button class="nav-link active" id="features-tab" data-bs-toggle="tab"
             data-bs-target="#features-tab-pane" type="button" role="tab" aria-controls="features-tab-pane"
             aria-selected="true"&gt; &lt;i class="ti ti-disc pe-1 ps-1"&gt;&lt;/i&gt; features&lt;/button&gt;
           &lt;/li&gt;
           &lt;li class="nav-item" role="presentation"&gt;
            &lt;button class="nav-link" id="history-tab" data-bs-toggle="tab"
             data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane"
             aria-selected="false"&gt;&lt;i class="ti ti-history pe-1 ps-1"&gt;&lt;/i&gt;History&lt;/button&gt;
           &lt;/li&gt;
           &lt;li class="nav-item" role="presentation"&gt;
            &lt;button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
             data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane"
             aria-selected="false"&gt;&lt;i class="ti ti-star pe-1 ps-1"&gt;&lt;/i&gt;reviews&lt;/button&gt;
           &lt;/li&gt;
      <br>
          &lt;/ul&gt;
          &lt;div class="tab-content" id="bgContent"&gt;
           &lt;div class="tab-pane fade show active" id="features-tab-pane" role="tabpanel"
            aria-labelledby="features-tab" tabindex="0"&gt;
            &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
             identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
             with fragment identifiers to switch between them.&lt;/p&gt;
           &lt;/div&gt;
      <br>
           &lt;div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab"
            tabindex="0"&gt;
            &lt;ol&gt;
             &lt;li&gt;Show only the last tab.&lt;/li&gt;
             &lt;li&gt;If &lt;code&gt;:target&lt;/code&gt; matches a tab, show it and hide all following siblings.&lt;/li&gt;
             &lt;li&gt;Matches a tab, show it and hide all following siblings.&lt;/li&gt;
            &lt;/ol&gt;
           &lt;/div&gt;
      <br>
           &lt;div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab"
            tabindex="0"&gt;
            &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
             identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
             with fragment identifiers to switch between them.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                        </div>
                    </div>

                    <!-- tab 5 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5>Vertical Tabs Left Side</h5>
                                <a aria-controls="tab5" aria-expanded="false"
                                   data-bs-toggle="collapse" href="#tab5">
                                    <i class="ti ti-code source" data-source="t5"></i>
                                </a>
                            </div>
                            <div class="card-body vertical-tab">
                                <ul class="nav nav-tabs app-tabs-secondary " id="v-bg" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="v-features-tab-pane" aria-selected="true"
                                                class="nav-link active"
                                                data-bs-target="#v-features-tab-pane" data-bs-toggle="tab"
                                                id="v-features-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-disc pe-1 ps-1"></i>
                                            features
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="v-history-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#v-history-tab-pane" data-bs-toggle="tab"
                                                id="v-history-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-history pe-1 ps-1"></i>History
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="v-reviews-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#v-reviews-tab-pane" data-bs-toggle="tab"
                                                id="v-reviews-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-star pe-1 ps-1"></i>reviews
                                        </button>
                                    </li>

                                </ul>
                                <div class="tab-content" id="v-bgContent">
                                    <div aria-labelledby="v-features-tab" class="tab-pane fade show active"
                                         id="v-features-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                    <div aria-labelledby="v-history-tab" class="tab-pane fade"
                                         id="v-history-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <ol>
                                            <li>Show only the last tab.</li>
                                            <li>If <code>:target</code> matches a tab, show it and hide all
                                                following siblings.
                                            </li>
                                            <li>Matches a tab, show it and hide all following siblings.</li>
                                        </ol>
                                    </div>

                                    <div aria-labelledby="v-reviews-tab" class="tab-pane fade"
                                         id="v-reviews-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                </div>
                            </div>

                            <pre class="t5 collapse mt-3" id="tab5">
  <code class="language-html">
&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt;Vertical Tabs left side&lt;/h5&gt;
      &lt;/div&gt;
         &lt;div class="card-body vertical-tab"&gt;
         &lt;ul class="nav nav-tabs app-tabs-secondary " id="v-bg" role="tablist"&gt;
         &lt;li class="nav-item" role="presentation"&gt;
          &lt;button class="nav-link active" id="v-features-tab" data-bs-toggle="tab"
          data-bs-target="#v-features-tab-pane" type="button" role="tab"
          aria-controls="v-features-tab-pane" aria-selected="true"&gt; &lt;i class="ti ti-disc pe-1 ps-1"&gt;&lt;/i&gt;
          features&lt;/button&gt;
         &lt;/li&gt;
         &lt;li class="nav-item" role="presentation"&gt;
          &lt;button class="nav-link" id="v-history-tab" data-bs-toggle="tab"
          data-bs-target="#v-history-tab-pane" type="button" role="tab"
          aria-controls="v-history-tab-pane" aria-selected="false"&gt;&lt;i
          class="ti ti-history pe-1 ps-1"&gt;&lt;/i&gt;History&lt;/button&gt;
         &lt;/li&gt;
         &lt;li class="nav-item" role="presentation"&gt;
          &lt;button class="nav-link" id="v-reviews-tab" data-bs-toggle="tab"
          data-bs-target="#v-reviews-tab-pane" type="button" role="tab"
          aria-controls="v-reviews-tab-pane" aria-selected="false"&gt;&lt;i
          class="ti ti-star pe-1 ps-1"&gt;&lt;/i&gt;reviews&lt;/button&gt;
         &lt;/li&gt;
      <br>
         &lt;/ul&gt;
         &lt;div class="tab-content" id="v-bgContent"&gt;
         &lt;div class="tab-pane fade show active" id="v-features-tab-pane" role="tabpanel"
          aria-labelledby="v-features-tab" tabindex="0"&gt;
          &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
          identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
          with fragment identifiers to switch between them.&lt;/p&gt;
         &lt;/div&gt;
      <br>
         &lt;div class="tab-pane fade" id="v-history-tab-pane" role="tabpanel" aria-labelledby="v-history-tab"
          tabindex="0"&gt;
          &lt;ol&gt;
          &lt;li&gt;Show only the last tab.&lt;/li&gt;
          &lt;li&gt;If &lt;code&gt;:target&lt;/code&gt; matches a tab, show it and hide all following siblings.&lt;/li&gt;
          &lt;li&gt;Matches a tab, show it and hide all following siblings.&lt;/li&gt;
          &lt;/ol&gt;
         &lt;/div&gt;
      <br>
         &lt;div class="tab-pane fade" id="v-reviews-tab-pane" role="tabpanel" aria-labelledby="v-reviews-tab"
          tabindex="0"&gt;
          &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
          identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
          with fragment identifiers to switch between them.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                        </div>
                    </div>

                    <!-- tab 6  -->
                    <div class="col-lg-6">
                        <div class="card  equal-card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5>Vertical Tabs Right Side</h5>
                                <a aria-controls="tab6" aria-expanded="false"
                                   data-bs-toggle="collapse" href="#tab6">
                                    <i class="ti ti-code source" data-source="t6"></i>
                                </a>
                            </div>

                            <div class="card-body vertical-right-tab">
                                <ul class="nav nav-tabs app-tabs-secondary me-0 ms-3" id="vl-bg" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="vl-features-tab-pane" aria-selected="true"
                                                class="nav-link active"
                                                data-bs-target="#vl-features-tab-pane" data-bs-toggle="tab"
                                                id="vl-features-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-disc pe-1 ps-1"></i>
                                            features
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="vl-history-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#vl-history-tab-pane" data-bs-toggle="tab"
                                                id="vl-history-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-history pe-1 ps-1"></i>History
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="vl-reviews-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#vl-reviews-tab-pane" data-bs-toggle="tab"
                                                id="vl-reviews-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-star pe-1 ps-1"></i>reviews
                                        </button>
                                    </li>

                                </ul>
                                <div class="tab-content text-sm-end" id="vl-bgContent">
                                    <div aria-labelledby="vl-features-tab" class="tab-pane fade show active"
                                         id="vl-features-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                    <div aria-labelledby="vl-history-tab" class="tab-pane fade"
                                         id="vl-history-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                    <div aria-labelledby="vl-reviews-tab" class="tab-pane fade"
                                         id="vl-reviews-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>
                                </div>

                            </div>

                            <pre class="t6 collapse mt-3" id="tab6">
                    <code class="language-html">

                        &lt;div class="card equal-card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;Vertical Tabs right side&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body vertical-right-tab"&gt;
                        <br>
                          &lt;ul class="nav nav-tabs app-tabs-secondary me-0 ms-3" id="vl-bg" role="tablist"&gt;
                           &lt;li class="nav-item" role="presentation"&gt;
                            &lt;button class="nav-link active" id="vl-features-tab" data-bs-toggle="tab"
                             data-bs-target="#vl-features-tab-pane" type="button" role="tab"
                             aria-controls="vl-features-tab-pane" aria-selected="true"&gt; &lt;i
                              class="ti ti-disc pe-1 ps-1"&gt;&lt;/i&gt;
                             features&lt;/button&gt;
                           &lt;/li&gt;
                           &lt;li class="nav-item" role="presentation"&gt;
                            &lt;button class="nav-link" id="vl-history-tab" data-bs-toggle="tab"
                             data-bs-target="#vl-history-tab-pane" type="button" role="tab"
                             aria-controls="vl-history-tab-pane" aria-selected="false"&gt;&lt;i
                              class="ti ti-history pe-1 ps-1"&gt;&lt;/i&gt;History&lt;/button&gt;
                           &lt;/li&gt;
                           &lt;li class="nav-item" role="presentation"&gt;
                            &lt;button class="nav-link" id="vl-reviews-tab" data-bs-toggle="tab"
                             data-bs-target="#vl-reviews-tab-pane" type="button" role="tab"
                             aria-controls="vl-reviews-tab-pane" aria-selected="false"&gt;&lt;i
                              class="ti ti-star pe-1 ps-1"&gt;&lt;/i&gt;reviews&lt;/button&gt;
                           &lt;/li&gt;
                        <br>
                          &lt;/ul&gt;
                          &lt;div class="tab-content text-sm-end" id="vl-bgContent"&gt;
                           &lt;div class="tab-pane fade show active" id="vl-features-tab-pane" role="tabpanel"
                            aria-labelledby="vl-features-tab" tabindex="0"&gt;
                            &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
                             identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                             with fragment identifiers to switch between them.&lt;/p&gt;
                           &lt;/div&gt;
                        <br>
                           &lt;div class="tab-pane fade" id="vl-history-tab-pane" role="tabpanel"
                            aria-labelledby="vl-history-tab" tabindex="0"&gt;
                            &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
                             identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                             with fragment identifiers to switch between them.&lt;/p&gt;
                           &lt;/div&gt;
                        <br>
                           &lt;div class="tab-pane fade" id="vl-reviews-tab-pane" role="tabpanel"
                            aria-labelledby="vl-reviews-tab" tabindex="0"&gt;
                            &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
                             identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                             with fragment identifiers to switch between them.&lt;/p&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;
                        <br>
                         &lt;/div&gt;
                        &lt;/div&gt;

                    </code>
                  </pre>
                        </div>
                    </div>

                    <!-- tab 7 -->
                    <div class="col-lg-6">
                        <div class="card  ">
                            <div class="card-header">
                                <h5>Tabs Bottom Side</h5>
                            </div>

                            <div class="card-body bottom-tab">
                                <ul class="nav nav-tabs app-tabs-secondary" id="b-bg" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="b-features-tab-pane" aria-selected="true"
                                                class="nav-link active"
                                                data-bs-target="#b-features-tab-pane" data-bs-toggle="tab"
                                                id="b-features-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-disc pe-1 ps-1"></i>
                                            features
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="b-history-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#b-history-tab-pane" data-bs-toggle="tab"
                                                id="b-history-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-history pe-1 ps-1"></i>History
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="b-reviews-tab-pane" aria-selected="false"
                                                class="nav-link"
                                                data-bs-target="#b-reviews-tab-pane" data-bs-toggle="tab"
                                                id="b-reviews-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-star pe-1 ps-1"></i>reviews
                                        </button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="b-bgContent">
                                    <div aria-labelledby="b-features-tab" class="tab-pane fade show active"
                                         id="b-features-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                    <div aria-labelledby="b-history-tab" class="tab-pane fade"
                                         id="b-history-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <ol>
                                            <li>Show only the last tab.</li>
                                            <li>If <code>:target</code> matches a tab, show it and hide all
                                                following siblings.
                                            </li>
                                            <li>Matches a tab, show it and hide all following siblings.</li>
                                        </ol>
                                    </div>

                                    <div aria-labelledby="b-reviews-tab" class="tab-pane fade"
                                         id="b-reviews-tab-pane"
                                         role="tabpanel"
                                         tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 8 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Justify Light Tabs</h5>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-light-secondary justify-content-around"
                                    id="justify-Light"
                                    role="tablist">
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button aria-controls="justify-home-tab-pane" aria-selected="true"
                                                class="nav-link active w-100"
                                                data-bs-target="#justify-home-tab-pane" data-bs-toggle="tab"
                                                id="justify-home-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-lifebuoy pe-1 ps-1"></i> Home
                                        </button>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button aria-controls="justify-profile-tab-pane" aria-selected="false"
                                                class="nav-link w-100"
                                                data-bs-target="#justify-profile-tab-pane" data-bs-toggle="tab"
                                                id="justify-profile-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-keyboard-show pe-1 ps-1"></i> Profile
                                        </button>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button aria-controls="justify-contact-tab-pane" aria-selected="false"
                                                class="nav-link w-100"
                                                data-bs-target="#justify-contact-tab-pane" data-bs-toggle="tab"
                                                id="justify-contact-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-file-dislike pe-1 ps-1"></i>Contact
                                        </button>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation">
                                        <button aria-controls="justify-about-tab-pane" aria-selected="false"
                                                class="nav-link w-100"
                                                data-bs-target="#justify-about-tab-pane" data-bs-toggle="tab"
                                                id="justify-about-tab"
                                                role="tab" type="button"><i
                                                    class="ti ti-ball-basketball pe-1 ps-1"></i>About
                                        </button>
                                    </li>

                                </ul>
                                <div class="tab-content" id="justify-LightContent">
                                    <div aria-labelledby="justify-home-tab" class="tab-pane fade show active"
                                         id="justify-home-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                    <div aria-labelledby="justify-profile-tab" class="tab-pane fade"
                                         id="justify-profile-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <ol>
                                            <li>Show only the last tab.</li>
                                            <li>If <code>:target</code> matches a tab, show it and hide all
                                                following siblings.
                                            </li>
                                            <li>Matches a tab, show it and hide all following siblings.</li>
                                        </ol>
                                    </div>

                                    <div aria-labelledby="justify-contact-tab" class="tab-pane fade"
                                         id="justify-contact-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                    <div aria-labelledby="justify-about-tab" class="tab-pane fade"
                                         id="justify-about-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <ol>
                                            <li>Show only the last tab.</li>
                                            <li>If <code>:target</code> matches a tab, show it and hide all
                                                following siblings.
                                            </li>
                                            <li>Matches a tab, show it and hide all following siblings.</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 9 -->
                    <div class="col-lg-6">
                        <div class="card equal-card">
                            <div class="card-header">
                                <h5>Image As Nav Link</h5>
                            </div>
                            <div class="card-body ">
                                <ul class="nav nav-tabs tab-light-secondary" id="lang-Light" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="lang-home-tab-pane" aria-selected="true"
                                                class="nav-link gap-2 active"
                                                data-bs-target="#lang-home-tab-pane" data-bs-toggle="tab"
                                                id="lang-home-tab"
                                                role="tab" type="button">
                                            <i class="flag-icon flag-icon-usa"></i>
                                            USA
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="lang-profile-tab-pane" aria-selected="false"
                                                class="nav-link gap-2"
                                                data-bs-target="#lang-profile-tab-pane" data-bs-toggle="tab"
                                                id="lang-profile-tab"
                                                role="tab" type="button">
                                            <i class="flag-icon flag-icon-gbr"></i>
                                            GBR
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="lang-contact-tab-pane" aria-selected="false"
                                                class="nav-link gap-2"
                                                data-bs-target="#lang-contact-tab-pane" data-bs-toggle="tab"
                                                id="lang-contact-tab"
                                                role="tab" type="button">
                                            <i class="flag-icon flag-icon-deu"></i>
                                            DEU
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="lang-about-tab-pane" aria-selected="false"
                                                class="nav-link gap-2"
                                                data-bs-target="#lang-about-tab-pane" data-bs-toggle="tab"
                                                id="lang-about-tab"
                                                role="tab" type="button">
                                            <i class="flag-icon flag-icon-lbr"></i>
                                            LBR
                                        </button>
                                    </li>

                                </ul>
                                <div class="tab-content" id="lang-LightContent">
                                    <div aria-labelledby="lang-home-tab" class="tab-pane fade show active"
                                         id="lang-home-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                    <div aria-labelledby="lang-profile-tab" class="tab-pane fade"
                                         id="lang-profile-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <ol>
                                            <li>Show only the last tab.</li>
                                            <li>If <code>:target</code> matches a tab, show it and hide all
                                                following siblings.
                                            </li>
                                            <li>Matches a tab, show it and hide all following siblings.</li>
                                        </ol>
                                    </div>

                                    <div aria-labelledby="lang-contact-tab" class="tab-pane fade"
                                         id="lang-contact-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                    <div aria-labelledby="lang-about-tab" class="tab-pane fade"
                                         id="lang-about-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <ol>
                                            <li>Show only the last tab.</li>
                                            <li>If <code>:target</code> matches a tab, show it and hide all
                                                following siblings.
                                            </li>
                                            <li>Matches a tab, show it and hide all following siblings.</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab 10 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Some Implements</h5>
                            </div>
                            <div class="card-body iplements-tabs">
                                <ul class="nav nav-tabs tab-light-secondary" id="testi-Light" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="testi-home-tab-pane" aria-selected="true"
                                                class="nav-link gap-2 d-flex active"
                                                data-bs-target="#testi-home-tab-pane" data-bs-toggle="tab"
                                                id="testi-home-tab"
                                                role="tab" type="button">
                          <span class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                            <img alt="" class="img-fluid" src="../assets/images/avtar/5.png">
                          </span>
                                            <span>
                            <span class="text-body d-block text-start f-s-16 f-w-600 text-dark mb-0">Guthry </span>
                            <span class="text-start m-0">Sales Manager</span>
                          </span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="testi-profile-tab-pane" aria-selected="false"
                                                class="nav-link d-flex gap-2"
                                                data-bs-target="#testi-profile-tab-pane" data-bs-toggle="tab"
                                                id="testi-profile-tab"
                                                role="tab" type="button">
                          <span class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                            <img alt="" class="img-fluid" src="../assets/images/avtar/1.png">
                          </span>
                                            <span>
                            <span class="text-body d-block text-start mb-0 f-s-16 f-w-600 text-dark">Olive Yew </span>
                            <span class="text-start m-0">account Manager</span>
                          </span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button aria-controls="testi-contact-tab-pane" aria-selected="false"
                                                class="nav-link d-flex gap-2"
                                                data-bs-target="#testi-contact-tab-pane" data-bs-toggle="tab"
                                                id="testi-contact-tab"
                                                role="tab" type="button">
                          <span class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                            <img alt="" class="img-fluid" src="../assets/images/avtar/14.png">
                          </span>
                                            <span>
                            <span class="text-body d-block text-start f-s-16 f-w-600 text-dark mb-0">Lily </span>
                            <span class="text-start m-0">Manager</span>
                          </span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="testi-LightContent">
                                    <div aria-labelledby="testi-home-tab" class="tab-pane fade show active"
                                         id="testi-home-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                    <div aria-labelledby="testi-profile-tab" class="tab-pane fade"
                                         id="testi-profile-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <ol>
                                            <li>Show only the last tab.</li>
                                            <li>If <code>:target</code> matches a tab, show it and hide all
                                                following siblings.
                                            </li>
                                            <li>Matches a tab, show it and hide all following siblings.</li>
                                        </ol>
                                    </div>

                                    <div aria-labelledby="testi-contact-tab" class="tab-pane fade"
                                         id="testi-contact-tab-pane"
                                         role="tabpanel" tabindex="0">
                                        <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use
                                            anchors with fragment
                                            identifiers to switch between them. The idea is to use pseudoclass to
                                            show tabs, use anchors
                                            with fragment identifiers to switch between them.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Tabs end -->
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
