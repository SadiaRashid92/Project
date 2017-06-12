<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TestCrud */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="test-crud-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'flag_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flag_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_created')->textInput(['id'=>'datepicker']) ?>

    <?= $form->field($model, 'flag_status')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
