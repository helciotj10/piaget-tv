<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Top */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="top-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fotop')->widget(FileInput::classname(), [
                    'options'=>['accept'=>'image/*'],
                ])?>

    <?= $form->field($model, 'musica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ordem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'votos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->dropDownList(['proposta' => 'Proposta', 'top' => 'Musica Top'],['prompt'=>'(Vaziu)'],['class' => 'form-control border-input']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
