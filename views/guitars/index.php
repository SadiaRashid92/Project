<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Guitars */
/* @var $form ActiveForm */
?>
<div class="guitars">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'brand') ?>
        <?= $form->field($model, 'model') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- guitars -->
