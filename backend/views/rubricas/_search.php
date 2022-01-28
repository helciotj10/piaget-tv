<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RubricasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rubricas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'youtube') ?>

    <?= $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'texto') ?>

    <?php // echo $form->field($model, 'horario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
