<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form ActiveForm */
?>
<div class="Profile">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'bio') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'public_email') ?>
        <?= $form->field($model, 'gravatar_email') ?>
        <?= $form->field($model, 'location') ?>
        <?= $form->field($model, 'website') ?>
        <?= $form->field($model, 'gravatar_id') ?>
        <?= $form->field($model, 'timezone') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Profile -->
