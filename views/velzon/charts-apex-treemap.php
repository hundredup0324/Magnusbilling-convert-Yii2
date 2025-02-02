<?php echo $this->render('../partials/main'); ?>

<head>

    <?php echo $this->render('../partials/title-meta', array('title' => 'Apex Treemap Charts')); ?>

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

                    <?php echo $this->render('../partials/page-title', array('pagetitle' => 'Apexcharts', 'title' => 'Treemap Charts')); ?>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Basic Treemap Charts</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="basic_treemap" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Multi-Dimensional Treemap Chart</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="multi_treemap" data-colors='["--vz-primary","--vz-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Distributed Treemap Chart (Different Color for each Cell)</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="distributed_treemap" data-colors='["--vz-primary", "--vz-secondary", "--vz-success", "--vz-info","--vz-warning", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Treemap Chart with Color Ranges</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="color_range_treemap" data-colors='["--vz-info","--vz-danger"]' class="apex-charts" dir="ltr"></div>
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

    <!-- treecharts init -->
    <script src="<?= Yii::$app->request->baseUrl ?>//js/pages/apexcharts-treemap.init.js"></script>

    <!-- App js -->
    <script src="<?= Yii::$app->request->baseUrl ?>//js/app.js"></script>
</body>

</html>