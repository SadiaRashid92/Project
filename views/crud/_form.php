<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Crud */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="crud-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Email')->textarea(['rows' => 6]) ?>


  <?= $form->field($model, 'esign_ssn_authentication')->radioList(['1' => 'Yes', '0' => 'No'], ['value' => $test])->label(false); ?>
<div class="control__indicator"></div>
 

 



















    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
