<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Rubricas */
/* @var $form yii\widgets\ActiveForm */

$model->data = date('d-m-yy');
?>

<div class="rubricas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo')->dropDownList(['Sucesso do dia' => 'Sucesso do dia', 'Nós kultura' => 'Nós kultura', 'Bons Momentos' => 'Bons Momentos', 'Mantras' => 'Mantras'],['prompt'=>'(Vaziu)'],['class' => 'form-control border-input']) ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texto')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <?= $form->field($model, 'horario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->dropDownList(['1' => 'Rubricas', '0' => 'Lançamentos Antigos'],['prompt'=>'(Vaziu)'],['class' => 'form-control border-input']) ?>

    <?= $form->field($model, 'posicao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
