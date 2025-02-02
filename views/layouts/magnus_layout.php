<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\bootstrap4\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

?>
<?php $this->beginPage() ?>
<?= Alert::widget() ?>
<?= $content ?>
<?php $this->endPage() ?>
