<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fotop')->widget(FileInput::classname(), [
                    'options'=>['accept'=>'image/*'],
                ])?>


    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'layer1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'marginLeft1')->textInput(['type' => 'number', 'maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'marginTop1')->textInput(['type' => 'number', 'maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'layer2')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'marginLeft2')->textInput(['type' => 'number', 'maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'marginTop2')->textInput(['type' => 'number', 'maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'layer3')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'marginLeft3')->textInput(['type' => 'number', 'maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'marginTop3')->textInput(['type' => 'number', 'maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'transicao')->dropDownList(['horizontal' => 'Horizontal', 'vertical' => 'Vertical'],['prompt'=>'(Vaziu)'],['class' => 'form-control border-input']) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
