<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Popup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="popup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fotop')->widget(FileInput::classname(), [
                    'options'=>['accept'=>'image/*'],
                ])?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->dropDownList(['1' => 'Ativado', '0' => 'Desactivado'],['class' => 'form-control border-input']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
