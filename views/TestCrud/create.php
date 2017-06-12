<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TestCrud */

$this->title = 'Create Test Crud';
$this->params['breadcrumbs'][] = ['label' => 'Test Cruds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-crud-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
