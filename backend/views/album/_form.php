<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use dosamigos\tinymce\TinyMce;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Album */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="album-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>
    <!--hr>
    <label>Preferencia para texto (Cor texto: preto | Tipo texto:  arial | Tamanho texto: 18px)</label-->
    <!--?php /*echo $form->field($model, 'descricao')->widget(TinyMce::className(), [
        'options' => ['rows' => 15],
        'language' => 'pt_br',
        'clientOptions' => [
            'plugins' => [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            'toolbar' => "undo redo | styleselect | fontselect | fontsizeselect | forecolor backcolor emoticons | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);*/ ?--><!--br/-->

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

    <?= $form->field($model, 'img_file[]')->widget(FileInput::classname(), [
                    'options'=>['accept'=>'*', 'multiple' => true],
                ])?>


    <?= $form->field($model, 'tipo')->dropDownList(['1' => 'Foto', '2' => 'Videos'],['class' => 'form-control border-input']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
