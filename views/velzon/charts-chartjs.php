<?php echo $this->render('../partials/main'); ?>

<head>

    <?php echo $this->render('../partials/title-meta', array('title' => 'Chartjs')); ?>

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

                    <?php echo $this->render('../partials/page-title', array('pagetitle' => 'Charts', 'title' => 'Chartjs')); ?>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Line Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="lineChart" class="chartjs-chart" data-colors='["--vz-primary-rgb, 0.2", "--vz-primary", "--vz-success-rgb, 0.2", "--vz-success"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Bar Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="bar" class="chartjs-chart" data-colors='["--vz-primary-rgb, 0.8", "--vz-primary-rgb, 0.9"]'></canvas>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Pie Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="pieChart" class="chartjs-chart" data-colors='["--vz-success", "--vz-light"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Donut Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="doughnut" class="chartjs-chart" data-colors='["--vz-primary", "--vz-light"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Polar Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="polarArea" class="chartjs-chart" data-colors='["--vz-danger", "--vz-success", "--vz-warning", "--vz-primary"]'> </canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Radar Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="radar" class="chartjs-chart" data-colors='["--vz-success-rgb, 0.2", "--vz-success", "--vz-primary-rgb, 0.2", "--vz-primary"]'></canvas>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

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

    <!-- Chart JS -->
    <script src="<?= Yii::$app->request->baseUrl ?>//libs/chart.js/chart.umd.js"></script>

    <!-- chartjs init -->
    <script src="<?= Yii::$app->request->baseUrl ?>//js/pages/chartjs.init.js"></script>

    <!-- App js -->
    <script src="<?= Yii::$app->request->baseUrl ?>//js/app.js"></script>
</body>

</html>