<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Publicidade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publicidade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fotop')->widget(FileInput::classname(), [
                    'options'=>['accept'=>'image/*'],
                ])?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ordem')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
