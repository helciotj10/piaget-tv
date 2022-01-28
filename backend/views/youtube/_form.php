<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Youtube */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="youtube-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php /* $form->field($model, 'fotop')->widget(FileInput::classname(), [
                    'options'=>['accept'=>'image/*'],
                ]) */?>

    <?= $form->field($model, 'efeito')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ordem')->textInput(['type' => 'number', 'maxlength' => true]) ?>

     <?php // $form->field($model, 'tipo')->dropDownList(['recente' => 'Recente', 'publicidade' => 'Publicidade'],['prompt'=>'(Vaziu)'],['class' => 'form-control border-input']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
