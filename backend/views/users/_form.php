<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;
use dosamigos\datepicker\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Users */
/* @var $form yii\widgets\ActiveForm */

$model->data_inscrisao =  date("Y-m-d");
$model->data_nascimento =  date("Y-m-d");
?>

<div class="users-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>          

    <form>
        <div class="row">

            <div class="col-md-4">
                <?= $form->field($model, 'fotop')->widget(FileInput::classname(), [
                    'options'=>['accept'=>'image/*'],
                ])?>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'username')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true,'class' => 'form-control border-input']) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                         <?= $form->field($model, 'nome')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?>
                     </div>
                 </div>
                 <div class="col-md-2">
                    <div class="form-group">
                        <?= $form->field($model, 'telemovel')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?>                                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= $form->field($model, 'email')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?>                                        
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <?= $form->field($model, 'data_nascimento')->widget(
                            DatePicker::className(), [
                                // inline too, not bad
                               'inline' => false, 
                                 // modify template for custom rendering
                               //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                               'clientOptions' => [
                                'autoclose' => true,
                                'format' => 'yyyy-m-d'
                            ]
                        ]);?>                                        
                    </div>
                </div>


                <div class="col-md-2">
                    <div class="form-group">
                        <?= $form->field($model, 'data_inscrisao')->widget(
                            DatePicker::className(), [
                                // inline too, not bad
                               'inline' => false, 
                                 // modify template for custom rendering
                               //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                               'clientOptions' => [
                                'autoclose' => true,
                                'format' => 'yyyy-m-d'
                            ]
                        ]);?>                                        
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <?= $form->field($model, 'documento_indentificacao')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?>                                        
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">

                        <?= $form->field($model, 'cinto')->widget(
                            Select2::className(),
                            [
                                'name' => 'cinto',
                                'value' => '',
                                'language' => 'pt',
                                'data' => ['branco' => 'branco', 'branco/amarela' => 'branco/amarela', 'amarelo' => 'amarelo', 'amarelo/verde' => 'amarelo/verde', 'verde' => 'verde', 'verde/azul' => 'verde/azul', 'azul' => 'azul', 'azul/vermelho' => 'azul/vermelho', 'vermelho' => 'vermelho', 'vermelho/preta' => 'vermelho/preta', 'preto' => 'preto'],
                                'options' => [
                                    'placeholder' => '(vaziu)',
                                ],
                                'pluginOptions' => ['allowClear' => true],
                            ]
                        )?>                                        
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <?= $form->field($model, 'facebook')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?>                                        
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <?= $form->field($model, 'aturaMetros')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <?= $form->field($model, 'pesoKilo')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <?= $form->field($model, 'sexo')->dropDownList(['Masculino' => 'Masculino', 'Feminino' => 'Feminino'],['prompt'=>'(Vaziu)'],['class' => 'form-control border-input']) ?>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <?= $form->field($model, 'turma')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <?= $form->field($model, 'tipo')->dropDownList(['Aluno' => 'Aluno', 'Mestre' => 'Mestre'],['prompt'=>'(Vaziu)'],['class' => 'form-control border-input']) ?>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Salvar Atualizações', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </form>

    <?php ActiveForm::end(); ?>
</div>

