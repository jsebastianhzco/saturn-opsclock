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
                        <h4 class="main-title">Accordions</h4>
                        <ul class="app-line-breadcrumbs mb-3">
                            <li class="">
                                <a class="f-s-14 f-w-500" href="#">
                      <span>
                        <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                      </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="f-s-14 f-w-500" href="#">Accordions</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Breadcrumb end -->

                <!-- Accordions start -->
                <div class="row accordions-rtl">
                    <!-- Accordions 1 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5> Simple According </h5>
                                <a aria-controls="accordionsItem1" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#accordionsItem1">
                                    <i class="ti ti-code source" data-source="accordions1"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="accordion app-accordion accordion-secondary">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="collapseOne" aria-expanded="true"
                                                    class="accordion-button"
                                                    data-bs-target="#collapseOne" data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show"
                                             data-bs-parent="#accordionExample"
                                             id="collapseOne">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is
                                                shown by default, until the
                                                collapse plugin adds the appropriate classes that we use to style
                                                each element. These
                                                classes control the overall appearance, as well as the showing and
                                                hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables.
                                                It's also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="collapseTwo" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#collapseTwo" data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" data-bs-parent="#accordionExample"
                                             id="collapseTwo">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is
                                                hidden by default, until
                                                the collapse plugin adds the appropriate classes that we use to
                                                style each element. These
                                                classes control the overall appearance, as well as the showing and
                                                hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables.
                                                It's also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="collapseThree" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#collapseThree" data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" data-bs-parent="#accordionExample"
                                             id="collapseThree">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is
                                                hidden by default, until the
                                                collapse plugin adds the appropriate classes that we use to style
                                                each element. These
                                                classes control the overall appearance, as well as the showing and
                                                hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables.
                                                It's also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <pre class="accordions1 collapse mt-3" id="accordionsItem1">
  <code class="language-html">
&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt; Simple According &lt;/h5&gt;
      &lt;/div&gt;
       &lt;div class="card-body"&gt;
        &lt;div class="accordion app-accordion accordion-secondary"&gt;
         &lt;div class="accordion-item"&gt;
          &lt;h2 class="accordion-header"&gt;
           &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"&gt;
            Accordion Item #1
           &lt;/button&gt;
          &lt;/h2&gt;
          &lt;div id="collapseOne" class="accordion-collapse collapse show"
           data-bs-parent="#accordionExample"&gt;
           &lt;div class="accordion-body"&gt;
            &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by default, until the
            collapse plugin adds the appropriate classes that we use to style each element. These
            classes control the overall appearance, as well as the showing and hiding via CSS
            transitions. You can modify any of this with custom CSS or overriding our default variables.
            It's also worth noting that just about any HTML can go within the
            &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="accordion-item"&gt;
          &lt;h2 class="accordion-header"&gt;
           &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"&gt;
            Accordion Item #2
           &lt;/button&gt;
          &lt;/h2&gt;
          &lt;div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample"&gt;
           &lt;div class="accordion-body"&gt;
            &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden by default, until
            the collapse plugin adds the appropriate classes that we use to style each element. These
            classes control the overall appearance, as well as the showing and hiding via CSS
            transitions. You can modify any of this with custom CSS or overriding our default variables.
            It's also worth noting that just about any HTML can go within the
            &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="accordion-item"&gt;
          &lt;h2 class="accordion-header"&gt;
           &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"&gt;
            Accordion Item #3
           &lt;/button&gt;
          &lt;/h2&gt;
          &lt;div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample"&gt;
           &lt;div class="accordion-body"&gt;
            &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden by default, until the
            collapse plugin adds the appropriate classes that we use to style each element. These
            classes control the overall appearance, as well as the showing and hiding via CSS
            transitions. You can modify any of this with custom CSS or overriding our default variables.
            It's also worth noting that just about any HTML can go within the
            &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
         &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                        </div>
                    </div>

                    <!-- Accordions 2 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5> Outline According </h5>
                                <a aria-controls="accordionsItem2" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#accordionsItem2">
                                    <i class="ti ti-code source" data-source="accordions2"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="accordion app-accordion accordion-outline-danger">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="collapseOneOutline" aria-expanded="true"
                                                    class="accordion-button"
                                                    data-bs-target="#collapseOneOutline" data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show"
                                             data-bs-parent="#accordionExampleoutlineoutline"
                                             id="collapseOneOutline">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is
                                                shown by default, until the
                                                collapse plugin adds the appropriate classes that we use to style
                                                each element. These
                                                classes control the overall appearance, as well as the showing and
                                                hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables.
                                                It's also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="collapseTwooutline" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#collapseTwooutline" data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse"
                                             data-bs-parent="#accordionExampleoutlineoutline"
                                             id="collapseTwooutline">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is
                                                hidden by default, until
                                                the collapse plugin adds the appropriate classes that we use to
                                                style each element. These
                                                classes control the overall appearance, as well as the showing and
                                                hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables.
                                                It's also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="collapseThreeoutline" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#collapseThreeoutline" data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse"
                                             data-bs-parent="#accordionExampleoutlineoutline"
                                             id="collapseThreeoutline">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is
                                                hidden by default, until the
                                                collapse plugin adds the appropriate classes that we use to style
                                                each element. These
                                                classes control the overall appearance, as well as the showing and
                                                hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables.
                                                It's also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <pre class="accordions2 collapse mt-3" id="accordionsItem2">
  <code class="language-html">
&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt; Outline According &lt;/h5&gt;
      &lt;/div&gt;
      &lt;div class="card-body"&gt;
       &lt;div class="accordion app-accordion accordion-outline-secondary"&gt;
        &lt;div class="accordion-item"&gt;
         &lt;h2 class="accordion-header"&gt;
          &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
           data-bs-target="#collapseOneOutline" aria-expanded="true"
           aria-controls="collapseOneOutline"&gt;
           Accordion Item #1
          &lt;/button&gt;
         &lt;/h2&gt;
         &lt;div id="collapseOneOutline" class="accordion-collapse collapse show"
          data-bs-parent="#accordionExampleoutlineoutline"&gt;
          &lt;div class="accordion-body"&gt;
           &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by default, until the
           collapse plugin adds the appropriate classes that we use to style each element. These
           classes control the overall appearance, as well as the showing and hiding via CSS
           transitions. You can modify any of this with custom CSS or overriding our default variables.
           It's also worth noting that just about any HTML can go within the
           &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
         &lt;h2 class="accordion-header"&gt;
          &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
           data-bs-target="#collapseTwooutline" aria-expanded="false"
           aria-controls="collapseTwooutline"&gt;
           Accordion Item #2
          &lt;/button&gt;
         &lt;/h2&gt;
         &lt;div id="collapseTwooutline" class="accordion-collapse collapse"
          data-bs-parent="#accordionExampleoutlineoutline"&gt;
          &lt;div class="accordion-body"&gt;
           &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden by default, until
           the collapse plugin adds the appropriate classes that we use to style each element. These
           classes control the overall appearance, as well as the showing and hiding via CSS
           transitions. You can modify any of this with custom CSS or overriding our default variables.
           It's also worth noting that just about any HTML can go within the
           &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
         &lt;h2 class="accordion-header"&gt;
          &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
           data-bs-target="#collapseThreeoutline" aria-expanded="false"
           aria-controls="collapseThreeoutline"&gt;
           Accordion Item #3
          &lt;/button&gt;
         &lt;/h2&gt;
         &lt;div id="collapseThreeoutline" class="accordion-collapse collapse"
          data-bs-parent="#accordionExampleoutlineoutline"&gt;
          &lt;div class="accordion-body"&gt;
           &lt;strong&gt;This is the third item's accordion body.&lt;/strong&gt; It is hidden by default, until the
           collapse plugin adds the appropriate classes that we use to style each element. These
           classes control the overall appearance, as well as the showing and hiding via CSS
           transitions. You can modify any of this with custom CSS or overriding our default variables.
           It's also worth noting that just about any HTML can go within the
           &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
         &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                        </div>
                    </div>

                    <!-- Accordions 3 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5> Light </h5>
                                <a aria-controls="accordionsItem3" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#accordionsItem3">
                                    <i class="ti ti-code source" data-source="accordions3"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="accordion app-accordion accordion-light-secondary"
                                     id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="flush-collapseOne" aria-expanded="true"
                                                    class="accordion-button"
                                                    data-bs-target="#flush-collapseOne" data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse show" data-bs-parent="#accordionFlushExample"
                                             id="flush-collapseOne">
                                            <div class="accordion-body">Placeholder content for this accordion,
                                                which is intended to
                                                demonstrate the <code>.accordion-flush</code> class. This is the
                                                first item's accordion
                                                body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="flush-collapseTwo" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#flush-collapseTwo" data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse"
                                             data-bs-parent="#accordionFlushExample"
                                             id="flush-collapseTwo">
                                            <div class="accordion-body">Placeholder content for this accordion,
                                                which is intended to
                                                demonstrate the <code>.accordion-flush</code> class. This is the
                                                second item's accordion
                                                body. Let's imagine this being filled with some actual content.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="flush-collapseThree" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#flush-collapseThree" data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse"
                                             data-bs-parent="#accordionFlushExample"
                                             id="flush-collapseThree">
                                            <div class="accordion-body">Placeholder content for this accordion,
                                                which is intended to
                                                demonstrate the <code>.accordion-flush</code> class. This is the
                                                third item's accordion
                                                body. Nothing more exciting happening here in terms of content, but
                                                just filling up the
                                                space to make it look, at least at first glance, a bit more
                                                representative of how this would
                                                look in a real-world application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <pre class="accordions3 collapse mt-3" id="accordionsItem3">
  <code class="language-html">
&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt; Light &lt;/h5&gt;
       &lt;/div&gt;
        &lt;div class="card-body"&gt;
         &lt;div class="accordion app-accordion accordion-light-secondary" id="accordionFlushExample"&gt;
          &lt;div class="accordion-item"&gt;
           &lt;h2 class="accordion-header"&gt;
            &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
             data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne"&gt;
             Accordion Item #1
            &lt;/button&gt;
           &lt;/h2&gt;
           &lt;div id="flush-collapseOne" class="accordion-collapse show"
            data-bs-parent="#accordionFlushExample"&gt;
            &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
             demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class. This is the first item's accordion
             body.&lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="accordion-item"&gt;
           &lt;h2 class="accordion-header"&gt;
            &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
             data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"&gt;
             Accordion Item #2
            &lt;/button&gt;
           &lt;/h2&gt;
           &lt;div id="flush-collapseTwo" class="accordion-collapse collapse"
            data-bs-parent="#accordionFlushExample"&gt;
            &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
             demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class. This is the second item's accordion
             body. Let's imagine this being filled with some actual content.&lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="accordion-item"&gt;
           &lt;h2 class="accordion-header"&gt;
            &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
             data-bs-target="#flush-collapseThree" aria-expanded="false"
             aria-controls="flush-collapseThree"&gt;
             Accordion Item #3
            &lt;/button&gt;
           &lt;/h2&gt;
           &lt;div id="flush-collapseThree" class="accordion-collapse collapse"
            data-bs-parent="#accordionFlushExample"&gt;
            &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
             demonstrate the &lt;code&gt;.accordion-flush&lt;/code&gt; class. This is the third item's accordion
             body. Nothing more exciting happening here in terms of content, but just filling up the
             space to make it look, at least at first glance, a bit more representative of how this would
             look in a real-world application.&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
  </code>
</pre>
                        </div>
                    </div>

                    <!-- Accordions 4 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header code-header card-header">
                                <h5> Flush(No border)</h5>
                                <a aria-controls="accordionsItem4" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#accordionsItem4">
                                    <i class="ti ti-code source" data-source="accordions4"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="accordion app-accordion accordion-flush accordion-secondary"
                                     id="accordionappflushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="appflush-collapseOne" aria-expanded="true"
                                                    class="accordion-button"
                                                    data-bs-target="#appflush-collapseOne" data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse show"
                                             data-bs-parent="#accordionappflushExample"
                                             id="appflush-collapseOne">
                                            <div class="accordion-body">Placeholder content for this accordion,
                                                which is intended to
                                                demonstrate the <code>.accordion-appflush</code> class. This is the
                                                first item's accordion
                                                body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="appflush-collapseTwo" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#appflush-collapseTwo" data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse"
                                             data-bs-parent="#accordionappflushExample"
                                             id="appflush-collapseTwo">
                                            <div class="accordion-body">Placeholder content for this accordion,
                                                which is intended to
                                                demonstrate the <code>.accordion-appflush</code> class. This is the
                                                second item's accordion
                                                body. Let's imagine this being filled with some actual content.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="appflush-collapseThree" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#appflush-collapseThree"
                                                    data-bs-toggle="collapse"
                                                    type="button">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse"
                                             data-bs-parent="#accordionrealExample"
                                             id="appflush-collapseThree">
                                            <div class="accordion-body">Placeholder content for this accordion,
                                                which is intended to
                                                demonstrate the <code>.accordion-appflush</code> class. This is the
                                                third item's accordion
                                                body. Nothing more exciting happening here in terms of content, but
                                                just filling up the
                                                space to make it look, at least at first glance, a bit more
                                                representative of how this would
                                                look in a real-world application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <pre class="accordions4 collapse mt-3" id="accordionsItem4">
   <code class="language-html">
&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt; Flush(No border)&lt;/h5&gt;
      &lt;/div&gt;
      &lt;div class="card-body"&gt;
       &lt;div class="accordion app-accordion accordion-flush accordion-secondary"
        id="accordionappflushExample"&gt;
        &lt;div class="accordion-item"&gt;
      &lt;h2 class="accordion-header"&gt;
       &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
        data-bs-target="#appflush-collapseOne" aria-expanded="true"
        aria-controls="appflush-collapseOne"&gt;
        Accordion Item #1
       &lt;/button&gt;
      &lt;/h2&gt;
      &lt;div id="appflush-collapseOne" class="accordion-collapse show"
       data-bs-parent="#accordionappflushExample"&gt;
       &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
        demonstrate the &lt;code&gt;.accordion-appflush&lt;/code&gt; class. This is the first item's accordion
        body.&lt;/div&gt;
      &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
      &lt;h2 class="accordion-header"&gt;
       &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#appflush-collapseTwo" aria-expanded="false"
        aria-controls="appflush-collapseTwo"&gt;
        Accordion Item #2
       &lt;/button&gt;
      &lt;/h2&gt;
      &lt;div id="appflush-collapseTwo" class="accordion-collapse collapse"
       data-bs-parent="#accordionappflushExample"&gt;
       &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
        demonstrate the &lt;code&gt;.accordion-appflush&lt;/code&gt; class. This is the second item's accordion
        body. Let's imagine this being filled with some actual content.&lt;/div&gt;
      &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="accordion-item"&gt;
      &lt;h2 class="accordion-header"&gt;
       &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#appflush-collapseThree" aria-expanded="false"
        aria-controls="appflush-collapseThree"&gt;
        Accordion Item #3
       &lt;/button&gt;
      &lt;/h2&gt;
      &lt;div id="appflush-collapseThree" class="accordion-collapse collapse"
       data-bs-parent="#accordionrealExample"&gt;
       &lt;div class="accordion-body"&gt;Placeholder content for this accordion, which is intended to
        demonstrate the &lt;code&gt;.accordion-appflush&lt;/code&gt; class. This is the third item's accordion
        body. Nothing more exciting happening here in terms of content, but just filling up the
        space to make it look, at least at first glance, a bit more representative of how this would
        look in a real-world application.&lt;/div&gt;
        &lt;/div&gt;
       &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
 &lt;/div&gt;

                    </code>
                  </pre>
                        </div>
                    </div>
                    <!-- Accordions 5 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5 class="txt-ellipsis"> Frequently Asked Questions(Real Example) </h5>
                                <a aria-controls="accordionsItem5" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#accordionsItem5">
                                    <i class="ti ti-code source" data-source="accordions5"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="accordion app-accordion accordion-light-secondary"
                                     id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="panelsStayOpen-collapseOne" aria-expanded="true"
                                                    class="accordion-button"
                                                    data-bs-target="#panelsStayOpen-collapseOne"
                                                    data-bs-toggle="collapse"
                                                    type="button">
                                                <i class="ti ti-message-report me-1 f-s-20"></i> What happens if I
                                                just pay my ticket?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show"
                                             id="panelsStayOpen-collapseOne">
                                            <div class="accordion-body">
                                                Paying your ticket without contesting it can result in a conviction
                                                on your driving record.
                                                This can have long-lasting consequences such as increased insurance
                                                rates, driver's license
                                                suspension, employment restrictions, and additional fines imposed by
                                                your state's DMV.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="panelsStayOpen-collapseTwo" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#panelsStayOpen-collapseTwo"
                                                    data-bs-toggle="collapse"
                                                    type="button">
                                                <i class="ti ti-ticket me-1 f-s-20"></i> Can this ticket affect my
                                                job?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="panelsStayOpen-collapseTwo">
                                            <div class="accordion-body">
                                                Absolutely, tickets recorded on your driving history can result in
                                                disqualification from
                                                driving commercially or obtaining a commercial driver's license
                                                (CDL). They can also
                                                disqualify you from driving for ride-sharing services such as Uber
                                                or Lyft, which require a
                                                clean driving record.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="panelsStayOpen-collapseThree"
                                                    aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#panelsStayOpen-collapseThree"
                                                    data-bs-toggle="collapse"
                                                    type="button">
                                                <i class="ti ti-transition-bottom me-1 f-s-20"></i> How long does it
                                                take to resolve my
                                                case?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="panelsStayOpen-collapseThree">
                                            <div class="accordion-body">
                                                It really depends on the court your ticket landed in. Some courts
                                                move faster than others,
                                                but on average, it could take about 1-3 months. This is perfectly
                                                normal in the legal
                                                process.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <pre class="accordions5 collapse mt-3" id="accordionsItem5">
                    <code class="language-html">

                         &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                         &lt;h5&gt; Frequently Asked Questions(Real Example) &lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body"&gt;
                         &lt;div class="accordion app-accordion accordion-light-secondary" id="accordionPanelsStayOpenExample"&gt;
                          &lt;div class="accordion-item"&gt;
                          &lt;h2 class="accordion-header"&gt;
                          &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                           data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                           aria-controls="panelsStayOpen-collapseOne"&gt;
                           &lt;i class="ti ti-message-report me-1 f-s-20"&gt;&lt;/i&gt; What happens if I just pay my ticket?
                          &lt;/button&gt;
                          &lt;/h2&gt;
                          &lt;div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"&gt;
                          &lt;div class="accordion-body"&gt;
                           Paying your ticket without contesting it can result in a conviction on your driving record.
                           This can have long-lasting consequences such as increased insurance rates, driver's license
                           suspension, employment restrictions, and additional fines imposed by your state's DMV.
                          &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="accordion-item"&gt;
                          &lt;h2 class="accordion-header"&gt;
                          &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                           aria-controls="panelsStayOpen-collapseTwo"&gt;
                           &lt;i class="ti ti-ticket me-1 f-s-20"&gt;&lt;/i&gt; Can this ticket affect my job?
                          &lt;/button&gt;
                          &lt;/h2&gt;
                          &lt;div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"&gt;
                          &lt;div class="accordion-body"&gt;
                           Absolutely, tickets recorded on your driving history can result in disqualification from
                           driving commercially or obtaining a commercial driver's license (CDL). They can also
                           disqualify you from driving for ride-sharing services such as Uber or Lyft, which require a
                           clean driving record.
                          &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="accordion-item"&gt;
                          &lt;h2 class="accordion-header"&gt;
                          &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                           data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                           aria-controls="panelsStayOpen-collapseThree"&gt;
                           &lt;i class="ti ti-transition-bottom me-1 f-s-20"&gt;&lt;/i&gt; How long does it take to resolve my
                           case?
                          &lt;/button&gt;
                          &lt;/h2&gt;
                          &lt;div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"&gt;
                          &lt;div class="accordion-body"&gt;
                           It really depends on the court your ticket landed in. Some courts move faster than others,
                           but on average, it could take about 1-3 months. This is perfectly normal in the legal
                           process.
                          &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;
                         &lt;/div&gt;
                         &lt;/div&gt;

                    </code>
                  </pre>
                        </div>
                    </div>
                    <!-- Accordions 6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5 class="txt-ellipsis"> Left Side Plus Minus Icon </h5>
                                <a aria-controls="accordionsItem6" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#accordionsItem6">
                                    <i class="ti ti-code source" data-source="accordions6"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div
                                        class="accordion app-accordion accordion-light-primary app-accordion-icon-left app-accordion-plus"
                                        id="accordionlefticonExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="lefticon-collapseOne" aria-expanded="true"
                                                    class="accordion-button"
                                                    data-bs-target="#lefticon-collapseOne" data-bs-toggle="collapse"
                                                    type="button">
                                                What happens if I just pay my ticket?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show" id="lefticon-collapseOne">
                                            <div class="accordion-body">
                                                Paying your ticket without contesting it can result in a conviction
                                                on your driving record.
                                                This can have long-lasting consequences such as increased insurance
                                                rates, driver's license
                                                suspension, employment restrictions, and additional fines imposed by
                                                your state's DMV.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="lefticon-collapseTwo" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#lefticon-collapseTwo" data-bs-toggle="collapse"
                                                    type="button">
                                                Can this ticket affect my job?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="lefticon-collapseTwo">
                                            <div class="accordion-body">
                                                Absolutely, tickets recorded on your driving history can result in
                                                disqualification from
                                                driving commercially or obtaining a commercial driver's license
                                                (CDL). They can also
                                                disqualify you from driving for ride-sharing services such as Uber
                                                or Lyft, which require a
                                                clean driving record.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="lefticon-collapseThree" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#lefticon-collapseThree"
                                                    data-bs-toggle="collapse"
                                                    type="button">
                                                How long does it take to resolve my case?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="lefticon-collapseThree">
                                            <div class="accordion-body">
                                                It really depends on the court your ticket landed in. Some courts
                                                move faster than others,
                                                but on average, it could take about 1-3 months. This is perfectly
                                                normal in the legal
                                                process.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <pre class="accordions6 collapse mt-3" id="accordionsItem6">
                    <code class="language-html">

                          &lt;div class="card equal-card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt; Left side plus minus icon &lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body"&gt;
                          &lt;div
                           class="accordion app-accordion accordion-light-primary app-accordion-icon-left app-accordion-plus"
                           id="accordionlefticonExample"&gt;
                           &lt;div class="accordion-item"&gt;
                            &lt;h2 class="accordion-header"&gt;
                             &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#lefticon-collapseOne" aria-expanded="true"
                              aria-controls="lefticon-collapseOne"&gt;
                              What happens if I just pay my ticket?
                             &lt;/button&gt;
                            &lt;/h2&gt;
                            &lt;div id="lefticon-collapseOne" class="accordion-collapse collapse show"&gt;
                             &lt;div class="accordion-body"&gt;
                              Paying your ticket without contesting it can result in a conviction on your driving record.
                              This can have long-lasting consequences such as increased insurance rates, driver's license
                              suspension, employment restrictions, and additional fines imposed by your state's DMV.
                             &lt;/div&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="accordion-item"&gt;
                            &lt;h2 class="accordion-header"&gt;
                             &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#lefticon-collapseTwo" aria-expanded="false"
                              aria-controls="lefticon-collapseTwo"&gt;
                              Can this ticket affect my job?
                             &lt;/button&gt;
                            &lt;/h2&gt;
                            &lt;div id="lefticon-collapseTwo" class="accordion-collapse collapse"&gt;
                             &lt;div class="accordion-body"&gt;
                              Absolutely, tickets recorded on your driving history can result in disqualification from
                              driving commercially or obtaining a commercial driver's license (CDL). They can also
                              disqualify you from driving for ride-sharing services such as Uber or Lyft, which require a
                              clean driving record.
                             &lt;/div&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="accordion-item"&gt;
                            &lt;h2 class="accordion-header"&gt;
                             &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#lefticon-collapseThree" aria-expanded="false"
                              aria-controls="lefticon-collapseThree"&gt;
                              How long does it take to resolve my case?
                             &lt;/button&gt;
                            &lt;/h2&gt;
                            &lt;div id="lefticon-collapseThree" class="accordion-collapse collapse"&gt;
                             &lt;div class="accordion-body"&gt;
                              It really depends on the court your ticket landed in. Some courts move faster than others,
                              but on average, it could take about 1-3 months. This is perfectly normal in the legal
                              process.
                             &lt;/div&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;
                        &lt;/div&gt;

                    </code>
                  </pre>
                        </div>
                    </div>

                    <!-- Accordions 7 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5> No Icon Indicators </h5>
                                <a aria-controls="accordionsItem7" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#accordionsItem7">
                                    <i class="ti ti-code source" data-source="accordions7"></i>
                                </a>
                            </div>

                            <div class="card-body">
                                <div class="accordion app-accordion accordion-light-danger app-accordion-no-icon"
                                     id="accordionnoiconExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="noicon-collapseOne" aria-expanded="true"
                                                    class="accordion-button"
                                                    data-bs-target="#noicon-collapseOne" data-bs-toggle="collapse"
                                                    type="button">
                                                <i class="ti ti-message-report me-1 f-s-20"></i> What happens if I
                                                just pay my ticket?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show" id="noicon-collapseOne">
                                            <div class="accordion-body">
                                                Paying your ticket without contesting it can result in a conviction
                                                on your driving record.
                                                This can have long-lasting consequences such as increased insurance
                                                rates, driver's license
                                                suspension, employment restrictions, and additional fines imposed by
                                                your state's DMV.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="noicon-collapseTwo" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#noicon-collapseTwo" data-bs-toggle="collapse"
                                                    type="button">
                                                <i class="ti ti-ticket me-1 f-s-20"></i> Can this ticket affect my
                                                job?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="noicon-collapseTwo">
                                            <div class="accordion-body">
                                                Absolutely, tickets recorded on your driving history can result in
                                                disqualification from
                                                driving commercially or obtaining a commercial driver's license
                                                (CDL). They can also
                                                disqualify you from driving for ride-sharing services such as Uber
                                                or Lyft, which require a
                                                clean driving record.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="noicon-collapseThree" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#noicon-collapseThree" data-bs-toggle="collapse"
                                                    type="button">
                                                <i class="ti ti-transition-bottom me-1 f-s-20"></i> How long does it
                                                take to resolve my
                                                case?
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" id="noicon-collapseThree">
                                            <div class="accordion-body">
                                                It really depends on the court your ticket landed in. Some courts
                                                move faster than others,
                                                but on average, it could take about 1-3 months. This is perfectly
                                                normal in the legal
                                                process.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <pre class="accordions7 collapse mt-3" id="accordionsItem7">
<code class="language-html">&lt;div class="card"&gt;
   &lt;div class="card-header"&gt;
   &lt;h5&gt; No icon indicators &lt;/h5&gt;
   &lt;/div&gt;
   &lt;div class="card-body"&gt;
   &lt;div class="accordion app-accordion accordion-light-danger app-accordion-no-icon"
   id="accordionnoiconExample"&gt;
   &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header"&gt;
   &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
   data-bs-target="#noicon-collapseOne" aria-expanded="true"
   aria-controls="noicon-collapseOne"&gt;
   &lt;i class="ti ti-message-report me-1 f-s-20"&gt;&lt;/i&gt; What happens if I just pay my ticket?
   &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div id="noicon-collapseOne" class="accordion-collapse collapse show"&gt;
   &lt;div class="accordion-body"&gt;
   Paying your ticket without contesting it can result in a conviction on your driving record.
   This can have long-lasting consequences such as increased insurance rates, driver's license
   suspension, employment restrictions, and additional fines imposed by your state's DMV.
   &lt;/div&gt;
   &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header"&gt;
   &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
   data-bs-target="#noicon-collapseTwo" aria-expanded="false"
   aria-controls="noicon-collapseTwo"&gt;
   &lt;i class="ti ti-ticket me-1 f-s-20"&gt;&lt;/i&gt; Can this ticket affect my job?
   &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div id="noicon-collapseTwo" class="accordion-collapse collapse"&gt;
   &lt;div class="accordion-body"&gt;
   Absolutely, tickets recorded on your driving history can result in disqualification from
   driving commercially or obtaining a commercial driver's license (CDL). They can also
   disqualify you from driving for ride-sharing services such as Uber or Lyft, which require a
   clean driving record.
   &lt;/div&gt;
   &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="accordion-item"&gt;
   &lt;h2 class="accordion-header"&gt;
   &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
   data-bs-target="#noicon-collapseThree" aria-expanded="false"
   aria-controls="noicon-collapseThree"&gt;
   &lt;i class="ti ti-transition-bottom me-1 f-s-20"&gt;&lt;/i&gt; How long does it take to resolve my
   case?
   &lt;/button&gt;
   &lt;/h2&gt;
   &lt;div id="noicon-collapseThree" class="accordion-collapse collapse"&gt;
   &lt;div class="accordion-body"&gt;
   It really depends on the court your ticket landed in. Some courts move faster than others,
   but on average, it could take about 1-3 months. This is perfectly normal in the legal
   process.
   &lt;/div&gt;
   &lt;/div&gt;
   &lt;/div&gt;
   &lt;/div&gt;
   &lt;/div&gt;
  &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                    <!-- Accordions 8 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="d-flex justify-content-between code-header card-header">
                                <h5>Multi Level Indicators </h5>
                                <a aria-controls="accordionsItem8" aria-expanded="false" data-bs-toggle="collapse"
                                   href="#accordionsItem8">
                                    <i class="ti ti-code source" data-source="accordions8"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="accordion app-accordion accordion-light-success app-accordion-plus"
                                     id="nestingExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="collapseOne" aria-expanded="true"
                                                    class="accordion-button"
                                                    data-bs-target="#nestingcollapseOne" data-bs-toggle="collapse"
                                                    type="button">
                                                This is level one accordion #1
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse show"
                                             data-bs-parent="#nestingExample"
                                             id="nestingcollapseOne">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is
                                                shown by default.

                                                <div class="accordion mt-2 app-accordion app-accordion-icon-left app-accordion-plus"
                                                     id="nestingtwoExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button aria-controls="collapseOne"
                                                                    aria-expanded="false"
                                                                    class="accordion-button collapsed"
                                                                    data-bs-target="#nestingtwocollapseOne"
                                                                    data-bs-toggle="collapse"
                                                                    type="button">
                                                                This is level two accordion #1
                                                            </button>
                                                        </h2>
                                                        <div class="accordion-collapse collapse"
                                                             data-bs-parent="#nestingtwoExample"
                                                             id="nestingtwocollapseOne">
                                                            <div class="accordion-body">
                                                                This is the first item's accordion body It is shown
                                                                by default.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button aria-controls="collapseTwo"
                                                                    aria-expanded="false"
                                                                    class="accordion-button collapsed"
                                                                    data-bs-target="#nestingtwocollapseTwo"
                                                                    data-bs-toggle="collapse"
                                                                    type="button">
                                                                This is level two accordion #2
                                                            </button>
                                                        </h2>
                                                        <div class="accordion-collapse collapse"
                                                             data-bs-parent="#nestingtwoExample"
                                                             id="nestingtwocollapseTwo">
                                                            <div class="accordion-body">
                                                                <strong>This is the second item's accordion
                                                                    body.</strong> It is hidden by default,
                                                                until the collapse plugin adds the appropriate
                                                                classes that we use to style each
                                                                element. These classes control the overall
                                                                appearance, as well as the showing and
                                                                hiding via CSS transitions. You can modify any of
                                                                this with custom CSS or overriding
                                                                our default variables. It's also worth noting that
                                                                just about any HTML can go within
                                                                the <code>.accordion-body</code>, though the
                                                                transition does limit overflow.
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button aria-controls="collapseTwo" aria-expanded="false"
                                                    class="accordion-button collapsed"
                                                    data-bs-target="#nestingcollapseTwo" data-bs-toggle="collapse"
                                                    type="button">
                                                This is level one accordion #2
                                            </button>
                                        </h2>
                                        <div class="accordion-collapse collapse" data-bs-parent="#nestingExample"
                                             id="nestingcollapseTwo">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is
                                                hidden by default, until
                                                the collapse plugin adds the appropriate classes that we use to
                                                style each element. These
                                                classes control the overall appearance, as well as the showing and
                                                hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables.
                                                It's also worth noting that just about any HTML can go within the
                                                <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <pre class="accordions8 collapse mt-3" id="accordionsItem8">
<code class="language-html">&lt;div class="card equal-card"&gt;
      &lt;div class="card-header"&gt;
       &lt;h5&gt;Multi level indicators &lt;/h5&gt;
      &lt;/div&gt;
      &lt;div class="card-body"&gt;
       &lt;div class="accordion app-accordion accordion-light-success app-accordion-plus" id="nestingExample"&gt;
       &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header"&gt;
        &lt;button class="accordion-button" type="button" data-bs-toggle="collapse"
      data-bs-target="#nestingcollapseOne" aria-expanded="true" aria-controls="collapseOne"&gt;
      This is level one accordion #1
        &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="nestingcollapseOne" class="accordion-collapse collapse show"
        data-bs-parent="#nestingExample"&gt;
        &lt;div class="accordion-body"&gt;
      &lt;strong&gt;This is the first item's accordion body.&lt;/strong&gt; It is shown by default.
    <br>
      &lt;div class="accordion mt-2 app-accordion app-accordion-icon-left app-accordion-plus"
       id="nestingtwoExample"&gt;
       &lt;div class="accordion-item"&gt;
       &lt;h2 class="accordion-header"&gt;
        &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#nestingtwocollapseOne" aria-expanded="false"
        aria-controls="collapseOne"&gt;
        This is level two accordion #1
        &lt;/button&gt;
       &lt;/h2&gt;
       &lt;div id="nestingtwocollapseOne" class="accordion-collapse collapse"
        data-bs-parent="#nestingtwoExample"&gt;
        &lt;div class="accordion-body"&gt;
        This is the first item's accordion body It is shown by default.
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="accordion-item"&gt;
       &lt;h2 class="accordion-header"&gt;
        &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#nestingtwocollapseTwo" aria-expanded="false"
        aria-controls="collapseTwo"&gt;
        This is level two accordion #2
        &lt;/button&gt;
       &lt;/h2&gt;
       &lt;div id="nestingtwocollapseTwo" class="accordion-collapse collapse"
        data-bs-parent="#nestingtwoExample"&gt;
        &lt;div class="accordion-body"&gt;
        &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden by default,
        until the collapse plugin adds the appropriate classes that we use to style each
        element. These classes control the overall appearance, as well as the showing and
        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
        our default variables. It's also worth noting that just about any HTML can go within
        the &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;/div&gt;
    <br>
      &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
       &lt;/div&gt;
    <br>
       &lt;div class="accordion-item"&gt;
        &lt;h2 class="accordion-header"&gt;
        &lt;button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#nestingcollapseTwo" aria-expanded="false" aria-controls="collapseTwo"&gt;
      This is level one accordion #2
        &lt;/button&gt;
        &lt;/h2&gt;
        &lt;div id="nestingcollapseTwo" class="accordion-collapse collapse"
        data-bs-parent="#nestingExample"&gt;
        &lt;div class="accordion-body"&gt;
      &lt;strong&gt;This is the second item's accordion body.&lt;/strong&gt; It is hidden by default, until
      the collapse plugin adds the appropriate classes that we use to style each element. These
      classes control the overall appearance, as well as the showing and hiding via CSS
      transitions. You can modify any of this with custom CSS or overriding our default variables.
      It's also worth noting that just about any HTML can go within the
      &lt;code&gt;.accordion-body&lt;/code&gt;, though the transition does limit overflow.
        &lt;/div&gt;
        &lt;/div&gt;
       &lt;/div&gt;
       &lt;/div&gt;
      &lt;/div&gt;
      &lt;/div&gt; </code>
                  </pre>
                        </div>
                    </div>

                </div>
                <!-- Accordions end -->
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
