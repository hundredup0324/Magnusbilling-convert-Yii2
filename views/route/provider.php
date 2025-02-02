<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
?>

<?= $this->render('../partials/main'); ?>

<head>
    <?= $this->render('../partials/title-meta', ['title' => 'Dashboard']); ?>

    <!-- jsvectormap css -->
    <link href="<?= Yii::$app->request->baseUrl ?>/libs/jsvectormap/jsvectormap.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Swiper slider css -->
    <link href="<?= Yii::$app->request->baseUrl ?>/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    
    <?= $this->render('../partials/head-css'); ?>
    
    <!-- JQX Styles and Scripts -->
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl ?>/jqx/jqx.base.css" type="text/css" />
    <script src="<?= Yii::$app->request->baseUrl ?>/jqx/jquery-1.11.1.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxcore.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxbuttons.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxscrollbar.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxmenu.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxgrid.js"></script>
    <script  src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxgrid.sort.js"></script>
    <script  src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxgrid.filter.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxgrid.selection.js"></script>
    <script  src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxpanel.js"></script>
    <script  src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxcheckbox.js"></script>
    <script  src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxlistbox.js"></script>
    <script  src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxdropdownlist.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/jqx/jqxdata.js"></script>
    <script src="<?= Yii::$app->request->baseUrl ?>/jqx/demos.js"></script>
    
    <script>
        $(document).ready(function() {
            var source = {
                datatype: "json",
                datafields: [
                    { name: 'id',  map: 'id', type: 'int' },
                    { name: 'provider_name', map: 'provider_name', type: 'string' },
                    { name: 'description', map: 'description', type: 'string' },
                    { name: 'credit', map: 'credit', type: 'String' },
                    { name: 'creationdate', map: 'creationdate', type: 'String' }
                ],
                // root: "entry",
                // record: "content",
                id:"id",
                localdata: <?= json_encode($dataProvider) ?>
            };
            var dataAdapter = new $.jqx.dataAdapter(source);
            
            $("#jqxgrid").jqxGrid({
                width: '100%',
                source: dataAdapter,
                // columnsresize: true,
                sortable: true,
                filterable: true,
                ready: function()
                {
                    // called when the Grid is loaded. Call methods or set properties here.         
                },
                selectionmode: 'checkbox',
                altrows: true,
                columns: [
                    { text: 'ID', datafield: 'id', minwidth: 120 },
                    { text: 'Name', datafield: 'provider_name', width: 250 },
                    { text: 'Description', datafield: 'description', width: 250 },
                    { text: 'Credit', datafield: 'credit', width: 180, cellsformat: 'F2', cellsalign: 'right' },
                    { text: 'Creation Date', datafield: 'creationdate', width: 250 }
                ]
            });
        });
    </script>
</head>

<body class="default">
    <div id="layout-wrapper">
        <?= $this->render('../partials/menu'); ?>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Providers</h4>
                                </div>
                                <div class="card-body">
                                    <div id="jqxWidget">
                                        <div id="jqxgrid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->render('../partials/footer'); ?>
        </div>
    </div>
    <?= $this->render('../partials/customizer'); ?>
    <?= $this->render('../partials/vendor-scripts'); ?>
    <script src="<?= Yii::$app->request->baseUrl ?>/js/app.js"></script>
</body>
</html>
