<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Crud */

$this->title = 'Create Crud';
$this->params['breadcrumbs'][] = ['label' => 'Cruds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crud-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'test'=>$test
    ]) ?>

</div>
