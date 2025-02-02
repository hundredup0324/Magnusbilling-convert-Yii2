<?php echo $this->render('../partials/main'); ?>

<head>

    <?php echo $this->render('../partials/title-meta', array('title' => 'Editors')); ?>

    <!-- quill css -->
    <link href="<?= Yii::$app->request->baseUrl ?>//libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="<?= Yii::$app->request->baseUrl ?>//libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
    <link href="<?= Yii::$app->request->baseUrl ?>//libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

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

                    <?php echo $this->render('../partials/page-title', array('pagetitle' => 'Forms', 'title' => 'Editors')); ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0">Ckeditor Classic Editor</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>ckeditor-classic</code> class to set ckeditor classic editor.</p>
                                    <div class="ckeditor-classic"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row mt-2">
                        <div class="col-lg-12">

                            <div class="justify-content-between d-flex align-items-center mb-3">
                                <h5 class="mb-0 pb-1 text-decoration-underline">Quilljs Editor</h5>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Snow Editor</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>snow-editor</code> class to set snow editor.</p>
                                    <div class="snow-editor" style="height: 300px;">
                                        <h3><span class="ql-size-large">Hello World!</span></h3>
                                        <p><br></p>
                                        <h3>This is an simple editable area.</h3>
                                        <p><br></p>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p><br></p>
                                        <p>
                                            End of simple area
                                        </p>

                                    </div> <!-- end Snow-editor-->
                                </div><!-- end card-body -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Bubble Editor</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted">Use <code>bubble-editor</code> class to set bubble editor.</p>
                                    <div class="bubble-editor" style="height: 300px;">
                                        <h3><span class="ql-size-large">Hello World!</span></h3>
                                        <p><br></p>
                                        <h3>This is an simple editable area.</h3>
                                        <p><br></p>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p><br></p>
                                        <p>
                                            End of simple area
                                        </p>

                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?php echo $this->render('../partials/footer'); ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- @@include("partials/right-sidebar") -->



    <?php echo $this->render('../partials/customizer'); ?>

    <?php echo $this->render('../partials/vendor-scripts'); ?>

    <!-- ckeditor -->
    <script src="<?= Yii::$app->request->baseUrl ?>//libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!-- quill js -->
    <script src="<?= Yii::$app->request->baseUrl ?>//libs/quill/quill.min.js"></script>

    <!-- init js -->
    <script src="<?= Yii::$app->request->baseUrl ?>//js/pages/form-editor.init.js"></script>

    <script src="<?= Yii::$app->request->baseUrl ?>//js/app.js"></script>

</body>

</html>