<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
?>
<?php echo $this->render('../partials/main'); ?>

<head>

    <?php echo $this->render('../partials/title-meta', array('title' => 'Dashboard')); ?>

    <!-- jsvectormap css -->
    <link href="<?= Yii::$app->request->baseUrl ?>//libs/jsvectormap/jsvectormap.min.css" rel="stylesheet"
        type="text/css" />

    <!--Swiper slider css-->
    <link href="<?= Yii::$app->request->baseUrl ?>//libs/swiper/swiper-bundle.min.css" rel="stylesheet"
        type="text/css" />

    <?php echo $this->render('../partials/head-css'); ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php echo $this->render('../partials/menu'); ?>




        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col">

                            <div class="h-100">

                                <div class="row">
                                    <div class="col-xl-7">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Server Hardware</h4>
                                                <div>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        ALL
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        1M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        6M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                                        1Y
                                                    </button>
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-header p-0 border-0 bg-light-subtle">
                                                <div class="row g-0 text-center">
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1"><span class="counter-value"
                                                                    data-target="7585">0</span></h5>
                                                            <p class="text-muted mb-0">Orders</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1">$<span class="counter-value"
                                                                    data-target="22.89">0</span>k</h5>
                                                            <p class="text-muted mb-0">Earnings</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-6 col-sm-3">
                                                        <div class="p-3 border border-dashed border-start-0">
                                                            <h5 class="mb-1"><span class="counter-value"
                                                                    data-target="367">0</span></h5>
                                                            <p class="text-muted mb-0">Refunds</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-6 col-sm-3">
                                                        <div
                                                            class="p-3 border border-dashed border-start-0 border-end-0">
                                                            <h5 class="mb-1 text-success"><span class="counter-value"
                                                                    data-target="18.92">0</span>%</h5>
                                                            <p class="text-muted mb-0">Conversation Ratio</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-body p-0 pb-2">
                                                <div class="w-100">
                                                    <div id="customer_impression_charts"
                                                        data-colors='["--vz-warning", "--vz-primary", "--vz-success"]'
                                                        class="apex-charts" dir="ltr"></div>
                                                </div>
                                            </div><!-- end card body -->
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="px-2 py-2 mt-1">
                                                        <p class="mb-1"> CPU actual usage: 6.03% Load Average: 0.04%
                                                            <span class="float-end">6%</span>
                                                        </p>
                                                        <div class="progress mt-2" style="height: 6px;">
                                                            <div class="progress-bar progress-bar-striped bg-primary"
                                                                role="progressbar" style="width:6%" aria-valuenow="6"
                                                                aria-valuemin="0" aria-valuemax="6">
                                                            </div>
                                                        </div>

                                                        <p class="mt-3 mb-1"> CPU actual usage: 6.03% <span
                                                                class="float-end">41%</span>
                                                        </p>
                                                        <div class="progress mt-2" style="height: 6px;">
                                                            <div class="progress-bar progress-bar-striped bg-primary"
                                                                role="progressbar" style="width: 41%" aria-valuenow="41"
                                                                aria-valuemin="0" aria-valuemax="41">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="px-2 py-2 mt-1">
                                                        <div class="hardwarebt">
                                                            <div>Mern total</div>
                                                            <div>8 GB</div>

                                                        </div>
                                                        <div class="hardwarebt">
                                                            <div>Mern used</div>
                                                            <div>3.54 GB</div>
                                                        </div>
                                                        <div class="hardwarebt">
                                                            <div>Uptime</div>
                                                            <div>33days 21:19:26</div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-5">
                                        <!-- card -->
                                        <div class="card card-height-100">


                                            <!-- card body -->
                                            <div class="card-body">
                                                <div style="margin-bottom: 0.5rem;" class="card">
                                                    <div class="row g-0">
                                                        <div style="display: flex; justify-content: center;"
                                                            class="col-md-4">
                                                            <div style="
                                                                 height: 100%;
                                                                 width: 80%;
                                                                 align-content: center;
                                                                 text-align: center;
                                                                 background-color: yellow;
                                                            ">
                                                                <img style="height: 70%;"
                                                                    class="rounded-start img-fluid  object-fit-cover"
                                                                    src="<?= Yii::$app->request->baseUrl ?>/images/home-card/users-icon.png"
                                                                    alt="Card image">
                                                            </div>

                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-header">
                                                                <h1 style="font-size:40px" class="card-title mb-0">6
                                                                </h1>
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="card-text mb-2">Active Users</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="margin-bottom: 0.5rem;" class="card">
                                                    <div class="row g-0">
                                                        <div style="display: flex; justify-content: center;"
                                                            class="col-md-4">
                                                            <div style="
                                                                 height: 100%;
                                                                 width: 80%;
                                                                 align-content: center;
                                                                 text-align: center;
                                                                 background-color: yellow;
                                                            ">
                                                                <img style="height: 70%;"
                                                                    class="rounded-start img-fluid  object-fit-cover"
                                                                    src="<?= Yii::$app->request->baseUrl ?>/images/home-card/calls-icon.png"
                                                                    alt="Card image">
                                                            </div>

                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-header">
                                                                <h1 style="font-size:40px" class="card-title mb-0">CC 0
                                                                    | CPS 0
                                                                </h1>
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="card-text mb-2">Today Peak</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="margin-bottom: 0.5rem;" class="card">
                                                    <div class="row g-0">
                                                        <div style="display: flex; justify-content: center;"
                                                            class="col-md-4">
                                                            <div style="
                                                                 height: 100%;
                                                                 width: 80%;
                                                                 align-content: center;
                                                                 text-align: center;
                                                                 background-color: yellow;
                                                            ">
                                                                <img style="height: 70%;"
                                                                    class="rounded-start img-fluid  object-fit-cover"
                                                                    src="<?= Yii::$app->request->baseUrl ?>/images/home-card/profit-icon.png"
                                                                    alt="Card image">
                                                            </div>

                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-header">
                                                                <h1 style="font-size:40px" class="card-title mb-0">$ 0
                                                                </h1>
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="card-text mb-2">Month Profit</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="margin-bottom: 0.5rem;" class="card">
                                                    <div class="row g-0">
                                                        <div style="display: flex; justify-content: center;"
                                                            class="col-md-4">
                                                            <div style="
                                                                 height: 100%;
                                                                 width: 80%;
                                                                 align-content: center;
                                                                 text-align: center;
                                                                 background-color: yellow;
                                                            ">
                                                                <img style="height: 70%;"
                                                                    class="rounded-start img-fluid  object-fit-cover"
                                                                    src="<?= Yii::$app->request->baseUrl ?>/images/home-card/profit-icon.png"
                                                                    alt="Card image">
                                                            </div>

                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-header">
                                                                <h1 style="font-size:40px" class="card-title mb-0">$ 0
                                                                </h1>
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="card-text mb-2">Month refill</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">Simultaneous calls</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div>
                                                    <div
                                                        class="toolbar d-flex align-items-start justify-content-center flex-wrap gap-2">
                                                        <button type="button"
                                                            class="btn btn-soft-primary timeline-btn btn-sm"
                                                            id="one_month">
                                                            1M
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-soft-primary timeline-btn btn-sm"
                                                            id="six_months">
                                                            6M
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-soft-primary timeline-btn btn-sm active"
                                                            id="one_year">
                                                            1Y
                                                        </button>
                                                        <button type="button"
                                                            class="btn btn-soft-primary timeline-btn btn-sm" id="all">
                                                            ALL
                                                        </button>
                                                    </div>
                                                    <div id="area_chart_datetime" data-colors='["--vz-info"]'
                                                        class="apex-charts" dir="ltr"></div>
                                                </div>
                                            </div><!-- end card-body -->
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                    <div class="card card-height-100">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Trunks</h4>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown card-header-dropdown">
                                                        <a class="text-reset dropdown-btn" href="#"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="text-muted">Report<i
                                                                    class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Download Report</a>
                                                            <a class="dropdown-item" href="#">Export</a>
                                                            <a class="dropdown-item" href="#">Import</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div id="store-visits-source"
                                                    data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]'
                                                    class="apex-charts" dir="ltr"></div>
                                            </div>
                                        </div>  <!-- .card-->
                                    </div> <!-- .col-->
                                </div> <!-- end row-->

                               <!-- end row-->

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->

                        <div class="col-auto layout-rightside-col">
                            <div class="overlay"></div>
                            <div class="layout-rightside">
                                <div class="card h-100 rounded-0">
                                    <div class="card-body p-0">
                                        <div class="p-3">
                                            <h6 class="text-muted mb-0 text-uppercase fw-semibold fs-13">Recent Activity
                                            </h6>
                                        </div>
                                        <div data-simplebar style="max-height: 410px;" class="p-3 pt-0">
                                            <div class="acitivity-timeline acitivity-main">
                                                <div class="acitivity-item d-flex">
                                                    <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                        <div
                                                            class="avatar-title bg-success-subtle text-success rounded-circle">
                                                            <i class="ri-shopping-cart-2-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Purchase by James Price</h6>
                                                        <p class="text-muted mb-1">Product noise evolve smartwatch </p>
                                                        <small class="mb-0 text-muted">02:14 PM Today</small>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item py-3 d-flex">
                                                    <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                        <div
                                                            class="avatar-title bg-danger-subtle text-danger rounded-circle">
                                                            <i class="ri-stack-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Added new <span
                                                                class="fw-semibold">style collection</span></h6>
                                                        <p class="text-muted mb-1">By Nesta Technologies</p>
                                                        <div class="d-inline-flex gap-2 border border-dashed p-2 mb-2">
                                                            <a href="apps-ecommerce-product-details"
                                                                class="bg-light rounded p-1">
                                                                <img src="<?= Yii::$app->request->baseUrl ?>//images/products/img-8.png"
                                                                    alt="" class="img-fluid d-block" />
                                                            </a>
                                                            <a href="apps-ecommerce-product-details"
                                                                class="bg-light rounded p-1">
                                                                <img src="<?= Yii::$app->request->baseUrl ?>//images/products/img-2.png"
                                                                    alt="" class="img-fluid d-block" />
                                                            </a>
                                                            <a href="apps-ecommerce-product-details"
                                                                class="bg-light rounded p-1">
                                                                <img src="<?= Yii::$app->request->baseUrl ?>//images/products/img-10.png"
                                                                    alt="" class="img-fluid d-block" />
                                                            </a>
                                                        </div>
                                                        <p class="mb-0 text-muted"><small>9:47 PM Yesterday</small></p>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item py-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= Yii::$app->request->baseUrl ?>//images/users/avatar-2.jpg"
                                                            alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Natasha Carey have liked the products
                                                        </h6>
                                                        <p class="text-muted mb-1">Allow users to like products in your
                                                            WooCommerce store.</p>
                                                        <small class="mb-0 text-muted">25 Dec, 2021</small>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item py-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs acitivity-avatar">
                                                            <div class="avatar-title rounded-circle bg-secondary">
                                                                <i class="mdi mdi-sale fs-14"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Today offers by <a
                                                                href="apps-ecommerce-seller-details"
                                                                class="link-secondary">Digitech Galaxy</a></h6>
                                                        <p class="text-muted mb-2">Offer is valid on orders of Rs.500 Or
                                                            above for selected products only.</p>
                                                        <small class="mb-0 text-muted">12 Dec, 2021</small>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item py-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs acitivity-avatar">
                                                            <div
                                                                class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                                                <i class="ri-bookmark-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Favorite Product</h6>
                                                        <p class="text-muted mb-2">Esther James have favorited product.
                                                        </p>
                                                        <small class="mb-0 text-muted">25 Nov, 2021</small>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item py-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs acitivity-avatar">
                                                            <div class="avatar-title rounded-circle bg-secondary">
                                                                <i class="mdi mdi-sale fs-14"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Flash sale starting <span
                                                                class="text-primary">Tomorrow.</span></h6>
                                                        <p class="text-muted mb-0">Flash sale by <a
                                                                href="javascript:void(0);"
                                                                class="link-secondary fw-medium">Zoetic Fashion</a></p>
                                                        <small class="mb-0 text-muted">22 Oct, 2021</small>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item py-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs acitivity-avatar">
                                                            <div
                                                                class="avatar-title rounded-circle bg-info-subtle text-info">
                                                                <i class="ri-line-chart-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Monthly sales report</h6>
                                                        <p class="text-muted mb-2"><span class="text-danger">2 days
                                                                left</span> notification to submit the monthly sales
                                                            report. <a href="javascript:void(0);"
                                                                class="link-warning text-decoration-underline">Reports
                                                                Builder</a></p>
                                                        <small class="mb-0 text-muted">15 Oct</small>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="<?= Yii::$app->request->baseUrl ?>//images/users/avatar-3.jpg"
                                                            alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Frank Hook Commented</h6>
                                                        <p class="text-muted mb-2 fst-italic">" A product that has
                                                            reviews is more likable to be sold than a product. "</p>
                                                        <small class="mb-0 text-muted">26 Aug, 2021</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-3 mt-2">
                                            <h6 class="text-muted mb-3 text-uppercase fw-semibold fs-13">Top 10
                                                Categories</h6>

                                            <ol class="ps-3 text-muted">
                                                <li class="py-1">
                                                    <a href="#" class="text-muted">Mobile & Accessories <span
                                                            class="float-end">(10,294)</span></a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="text-muted">Desktop <span
                                                            class="float-end">(6,256)</span></a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="text-muted">Electronics <span
                                                            class="float-end">(3,479)</span></a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="text-muted">Home & Furniture <span
                                                            class="float-end">(2,275)</span></a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="text-muted">Grocery <span
                                                            class="float-end">(1,950)</span></a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="text-muted">Fashion <span
                                                            class="float-end">(1,582)</span></a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="text-muted">Appliances <span
                                                            class="float-end">(1,037)</span></a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="text-muted">Beauty, Toys & More <span
                                                            class="float-end">(924)</span></a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="text-muted">Food & Drinks <span
                                                            class="float-end">(701)</span></a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="text-muted">Toys & Games <span
                                                            class="float-end">(239)</span></a>
                                                </li>
                                            </ol>
                                            <div class="mt-3 text-center">
                                                <a href="javascript:void(0);"
                                                    class="text-muted text-decoration-underline">View all Categories</a>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <h6 class="text-muted mb-3 text-uppercase fw-semibold fs-13">Products
                                                Reviews</h6>
                                            <!-- Swiper -->
                                            <div class="swiper vertical-swiper" style="height: 250px;">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="card border border-dashed shadow-none">
                                                            <div class="card-body">
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 avatar-sm">
                                                                        <div class="avatar-title bg-light rounded">
                                                                            <img src="<?= Yii::$app->request->baseUrl ?>//images/companies/img-1.png"
                                                                                alt="" height="30">
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <div>
                                                                            <p
                                                                                class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                                                " Great product and looks great, lots of
                                                                                features. "</p>
                                                                            <div
                                                                                class="fs-11 align-middle text-warning">
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end mb-0 text-muted">
                                                                            - by <cite title="Source Title">Force
                                                                                Medicines</cite>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card border border-dashed shadow-none">
                                                            <div class="card-body">
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="<?= Yii::$app->request->baseUrl ?>//images/users/avatar-3.jpg"
                                                                            alt="" class="avatar-sm rounded">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <div>
                                                                            <p
                                                                                class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                                                " Amazing template, very easy to
                                                                                understand and manipulate. "</p>
                                                                            <div
                                                                                class="fs-11 align-middle text-warning">
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-half-fill"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end mb-0 text-muted">
                                                                            - by <cite title="Source Title">Henry
                                                                                Baird</cite>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card border border-dashed shadow-none">
                                                            <div class="card-body">
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 avatar-sm">
                                                                        <div class="avatar-title bg-light rounded">
                                                                            <img src="<?= Yii::$app->request->baseUrl ?>//images/companies/img-8.png"
                                                                                alt="" height="30">
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <div>
                                                                            <p
                                                                                class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                                                "Very beautiful product and Very helpful
                                                                                customer service."</p>
                                                                            <div
                                                                                class="fs-11 align-middle text-warning">
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-line"></i>
                                                                                <i class="ri-star-line"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end mb-0 text-muted">
                                                                            - by <cite title="Source Title">Zoetic
                                                                                Fashion</cite>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card border border-dashed shadow-none">
                                                            <div class="card-body">
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="<?= Yii::$app->request->baseUrl ?>//images/users/avatar-2.jpg"
                                                                            alt="" class="avatar-sm rounded">
                                                                    </div>
                                                                    <div class="flex-grow-1 ms-3">
                                                                        <div>
                                                                            <p
                                                                                class="text-muted mb-1 fst-italic text-truncate-two-lines">
                                                                                " The product is very beautiful. I like
                                                                                it. "</p>
                                                                            <div
                                                                                class="fs-11 align-middle text-warning">
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-fill"></i>
                                                                                <i class="ri-star-half-fill"></i>
                                                                                <i class="ri-star-line"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-end mb-0 text-muted">
                                                                            - by <cite title="Source Title">Nancy
                                                                                Martino</cite>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-3">
                                            <h6 class="text-muted mb-3 text-uppercase fw-semibold fs-13">Customer
                                                Reviews</h6>
                                            <div class="bg-light px-3 py-2 rounded-2 mb-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <div class="fs-16 align-middle text-warning">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <h6 class="mb-0">4.5 out of 5</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <div class="text-muted">Total <span class="fw-medium">5.50k</span>
                                                    reviews</div>
                                            </div>

                                            <div class="mt-3">
                                                <div class="row align-items-center g-2">
                                                    <div class="col-auto">
                                                        <div class="p-1">
                                                            <h6 class="mb-0">5 star</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="p-1">
                                                            <div class="progress animated-progress progress-sm">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 50.16%" aria-valuenow="50.16"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="p-1">
                                                            <h6 class="mb-0 text-muted">2758</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->

                                                <div class="row align-items-center g-2">
                                                    <div class="col-auto">
                                                        <div class="p-1">
                                                            <h6 class="mb-0">4 star</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="p-1">
                                                            <div class="progress animated-progress progress-sm">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 29.32%" aria-valuenow="29.32"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="p-1">
                                                            <h6 class="mb-0 text-muted">1063</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->

                                                <div class="row align-items-center g-2">
                                                    <div class="col-auto">
                                                        <div class="p-1">
                                                            <h6 class="mb-0">3 star</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="p-1">
                                                            <div class="progress animated-progress progress-sm">
                                                                <div class="progress-bar bg-warning" role="progressbar"
                                                                    style="width: 18.12%" aria-valuenow="18.12"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="p-1">
                                                            <h6 class="mb-0 text-muted">997</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->

                                                <div class="row align-items-center g-2">
                                                    <div class="col-auto">
                                                        <div class="p-1">
                                                            <h6 class="mb-0">2 star</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="p-1">
                                                            <div class="progress animated-progress progress-sm">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 4.98%" aria-valuenow="4.98"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="p-1">
                                                            <h6 class="mb-0 text-muted">227</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->

                                                <div class="row align-items-center g-2">
                                                    <div class="col-auto">
                                                        <div class="p-1">
                                                            <h6 class="mb-0">1 star</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="p-1">
                                                            <div class="progress animated-progress progress-sm">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 7.42%" aria-valuenow="7.42"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="p-1">
                                                            <h6 class="mb-0 text-muted">408</h6>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                            </div>
                                        </div>

                                        <div class="card sidebar-alert bg-light border-0 text-center mx-4 mb-0 mt-3">
                                            <div class="card-body">
                                                <img src="<?= Yii::$app->request->baseUrl ?>//images/giftbox.png"
                                                    alt="">
                                                <div class="mt-4">
                                                    <h5>Invite New Seller</h5>
                                                    <p class="text-muted lh-base">Refer a new seller to us and earn $100
                                                        per refer.</p>
                                                    <button type="button"
                                                        class="btn btn-primary btn-label rounded-pill"><i
                                                            class="ri-mail-fill label-icon align-middle rounded-pill fs-16 me-2"></i>
                                                        Invite Now</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end .rightbar-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php echo $this->render('../partials/footer'); ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?php echo $this->render('../partials/customizer'); ?>

    <?php echo $this->render('../partials/vendor-scripts'); ?>
    <<script>
        $(document).ready(function() {
        var successMessage = localStorage.getItem('loginSuccessMessage');
        console.log('Success message:', successMessage); // Debugging line
        if (successMessage) {
        toastr.success(successMessage);
        localStorage.removeItem('loginSuccessMessage'); // Clear after showing
        } else {
        console.log('No success message found in localStorage.'); // Debugging line
        }
        });
        </script>

        <!-- apexcharts -->
        <script src="<?= Yii::$app->request->baseUrl ?>//libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="<?= Yii::$app->request->baseUrl ?>//libs/jsvectormap/jsvectormap.min.js"></script>
        <script src="<?= Yii::$app->request->baseUrl ?>//libs/jsvectormap/maps"></script>

        <!--Swiper slider js-->
        <script src="<?= Yii::$app->request->baseUrl ?>//libs/swiper/swiper-bundle.min.js"></script>

        <!-- Dashboard init -->
        <script src="<?= Yii::$app->request->baseUrl ?>//js/pages/dashboard-ecommerce.init.js"></script>
        
        <script src="<?= Yii::$app->request->baseUrl ?>/libs/moment/moment.js"></script>

        <!-- areacharts init -->
        <script src="<?= Yii::$app->request->baseUrl ?>/js/pages/apexcharts-area.init.js"></script>

        <!-- App js -->
        <script src="<?= Yii::$app->request->baseUrl ?>//js/app.js"></script>
</body>

</html>