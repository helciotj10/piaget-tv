<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Noticia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?>

    <?= $form->field($model, 'conteudo')->textarea(['rows' => 6,'class' => 'form-control border-input']) ?>

    <?= $form->field($model, 'fotop')->widget(FileInput::classname(), [
                    'options'=>['accept'=>'image/*'],
                ])?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?>

    <?= $form->field($model, 'data')->widget(
        DatePicker::className(), [
            'options' => ['placeholder' => 'Data da noticia (ex: 2018-12-25)'],
            // inline too, not bad
             'inline' => true, 
             // modify template for custom rendering
            'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <?= $form->field($model, 'tipo')->dropDownList(['1' => 'Programa', '2' => 'Servicos'],['class' => 'form-control border-input']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
