<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProgramacaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programacao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'semana') ?>

    <?= $form->field($model, 'hora') ?>

    <?= $form->field($model, 'imagem') ?>

    <?= $form->field($model, 'titulo') ?>

    <?php // echo $form->field($model, 'artista') ?>

    <?php // echo $form->field($model, 'texto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
