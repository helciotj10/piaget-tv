<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Programacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'semana')->dropDownList(['Segunda' => 'Segunda', 'Terca' => 'Terça', 'Quarta' => 'Quarta', 'Quinta' => 'Quinta', 'Sexta' => 'Sexta', 'Sabado' => 'Sabado', 'Domingo' => 'Domingo'],['prompt'=>'(Vaziu)'],['class' => 'form-control border-input']) ?>

    <?= $form->field($model, 'hora')->widget(TimePicker::classname(), ['pluginOptions' => [
        //'showSeconds' => true,
        'showMeridian' => false,
        //'minuteStep' => 1,
        //'secondStep' => 5, 
       ]]); ?>

    <?= $form->field($model, 'fotop')->widget(FileInput::classname(), [
                    'options'=>['accept'=>'image/*'],
                ])?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'artista')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texto')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
