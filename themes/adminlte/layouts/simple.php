<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 9/29/17 2:58 PM
 */

use yii\helpers\Html;
use yivic\yivicCms\libs\override\web\NpView as View;

\yii\web\JqueryAsset::register($this);
\yii\bootstrap\BootstrapAsset::register($this);
\yii\jui\JuiAsset::register($this);
\yivic\yivicCms\assets\fontawesome\FontAwesomeAsset::register($this);
\yivic\yivicCms\assets\ionicons\IoniconsAsset::register($this);

\yivic\yivicCms\assets\icheck\IcheckAsset::register($this);

\yivic\yivicCms\assets\adminlte\AdminLteAsset::register($this);

/* @var View $this */
/* @var string $content */

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <meta name="description"
          content="<?= $this->description ?>"/>

    <meta name="keywords"
          content="<?= $this->keywords ?>"/>

    <?php $this->head() ?>
    <style>

    </style>
</head>
<body class="<?= $this->getBodyClass() ?> hold-transition simple">
<?php $this->beginBody() ?>
<div class="main-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
</div>


<?= \yivic\yivicCms\libs\override\widgets\NpBootstrapAlertWidget::widget() ?>

<?= $content ?>

<?= $this->render('_footer') ?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
