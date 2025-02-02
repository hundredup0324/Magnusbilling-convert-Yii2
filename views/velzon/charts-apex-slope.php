<?php echo $this->render('../partials/main'); ?>

<head>

    <?php echo $this->render('../partials/title-meta', array('title' => 'Apex Slope Charts')); ?>

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

                    <?php echo $this->render('../partials/page-title', array('pagetitle' => 'Apexcharts', 'title' => 'Slope Charts')); ?>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Basic Chart</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="basic_charts" data-colors='["--vz-primary", "--vz-success", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Multi Group</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div>
                                        <div id="multi_charts" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

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

    <!-- apexcharts -->
    <script src="<?= Yii::$app->request->baseUrl ?>//libs/apexcharts/apexcharts.min.js"></script>

    <!-- timeline charts init -->
    <script src="<?= Yii::$app->request->baseUrl ?>//js/pages/apexcharts-slope.init.js"></script>

    <!-- App js -->
    <script src="<?= Yii::$app->request->baseUrl ?>//js/app.js"></script>
</body>

</html>