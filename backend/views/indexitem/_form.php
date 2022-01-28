<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use conquer\codemirror\CodemirrorWidget;
//use conquer\codemirror\CodemirrorAsset;



/* @var $this yii\web\View */
/* @var $model common\models\Indexitem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indexitem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'indexItemTitulo')->textInput() ?>

    <?= $form->field($model, 'indexItemConteudo')->widget(
    CodemirrorWidget::className(),
    [	
    	'preset'=>'php',
        'options'=>['rows' => 20],
    ]
); ?>

<div class="row" >
	<div class="col-sm-6">
		<?= $form->field($model, 'indexItemOrdem')->textInput(['type' => 'number']) ?>
	</div>
	<div class="col-sm-6">
		<?= $form->field($model, 'indexItemEstado')->dropDownList(['1' => 'Visivel', '0' => 'Desactivado'],['class' => 'form-control border-input']) ?>
	</div>
</div>

    

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
