<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Presenca */
/* @var $form yii\widgets\ActiveForm */

$model->dia = date("d");
$model->mes = date("n");
$model->ano = date("o");

?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div class="presenca-form">

  <?php $form = ActiveForm::begin(); ?>

  <div class="row">
    <div class="col-md-4"><?= $form->field($model, 'dia')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?></div>
    <div class="col-md-4"><?= $form->field($model, 'mes')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?></div>
    <div class="col-md-4"><?= $form->field($model, 'ano')->textInput(['maxlength' => true,'class' => 'form-control border-input']) ?></div>
  </div>


  <?php foreach ($dataProvider->getModels() as $model) { ?>
    <div style="margin-left: 10px; margin-right: 10px;" class="card">
      <div class="content row">
        <div class="col-xs-2"><img style='width: 50px; height: 50px;' class="avatar border-white" src="<?= $model->foto ?>" alt="..."/></div>
        <div class="col-xs-6" style="margin-left: 5px;">
          <p><b><?= $model->nome ?></b></p>
          <p>Cinto: <?= $model->cinto ?> &nbsp; &nbsp; Idade: <?php echo date_diff(date_create($model->data_nascimento), date_create('today'))->y;?>  </p>
        </div>
        <div class="col-xs-2">
          <label class="container">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
    </div> 
  <?php } ?>

  <div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
  </div>

  <?php ActiveForm::end(); ?>

</div>



<script type="text/javascript">

    /*

    *** ADD
    var fruits = ["Banana", "Orange", "Apple", "Mango"];
    fruits.push("Kiwi");  

    *** Remove
   function remove(arr, item) {
    for (var i = arr.length; i--;) {
        if (arr[i] === item) {
            arr.splice(i, 1);
        }
    }
}

   */

</script>
