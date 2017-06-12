<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TestCrud */

$this->title = 'Update Test Crud: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Test Cruds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="test-crud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
