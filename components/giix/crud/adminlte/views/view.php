<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>

use yivic\yivicCms\libs\override\helpers\NpHtml as Html;
use yivic\yivicCms\libs\override\widgets\NpDetailView as DetailView;
use yivic\yivicCms\libs\override\web\NpView as View;
use yivic\yivicCms\libs\override\widgets\NpActiveForm as ActiveForm;
use <?= ltrim($generator->searchModelClass, '\\') ?> as <?= StringHelper::basename($generator->modelClass) ?>;

/* @var View $this */
/* @var <?= StringHelper::basename($generator->modelClass) ?> $model */

$pageTitle = <?= $generator->generateString('View {modelClass}', ['modelClass' => $generator->generateString(Inflector::camel2words(StringHelper::basename($generator->modelClass)))]) ?> . ' ID: ' . $model-><?= $generator->getNameAttribute() ?>;
$this->setBrowserTitle($pageTitle, 0);

$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::camel2words(StringHelper::basename($generator->modelClass)).' Management') ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'ID: ' . $model-><?= $generator->getNameAttribute() ?>, 'url' => ['view', <?= $urlParams ?>]];
$this->params['breadcrumbs'][] = <?= $generator->generateString('View') ?>;

?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view">

    <h3 class="page-title"><?= "<?= " ?> Html::encode(<?= $generator->generateString(Inflector::camel2words(StringHelper::basename($generator->modelClass)).' Management') ?>) ?></h3>

    <div class="caption font-green-sharp bold uppercase">
        <span class="caption-subject bold uppercase"><?= "<?= " ?>Html::encode($pageTitle) ?></span>
    </div>

    <p>
        <?= "<?= " ?>Html::a(<?= $generator->generateString('Update') ?>, ['update', <?= $urlParams ?>], ['class' => 'btn btn-primary']) ?>
        <?= "<?php " ?>$form = ActiveForm::begin(['options' => ['class' => 'single-form', 'role' => 'form']]); ?>
        <?= "<?= " ?>Html::a(<?= $generator->generateString('Delete') ?>, ['delete', <?= $urlParams ?>], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => <?= $generator->generateString('Are you sure you want to delete?') ?>,
                'method' => 'post',
            ],
        ]) ?>
        <?= "<?php " ?>ActiveForm::end(); ?>

        <?= "<?= " ?>Html::a('<i class="fa fa-plus"></i> <span class="hidden-480">'.
            <?= $generator->generateString('Create ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>,
            ['create'],
            ['class' => 'btn blue btn-outline pull-right']) ?>
    </p>

    <?= "<?= " ?>DetailView::widget([
        'model' => $model,
        'attributes' => [
<?php
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        echo "            '" . $name . "',\n";
    }
} else {
    foreach ($generator->getTableSchema()->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
    }
}
?>
        ],
    ]) ?>

</div>
