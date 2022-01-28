<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <div class="row">
        <div class="col-md-10">
            <?= $form->field($model, 'globalSearch')->label(false) ?>
        </div>
        <div class="col-md-2">
            <?= Html::submitButton('Pesquisar', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    
   

    

    
    
</div>

<?php ActiveForm::end(); ?>


<style>
 #userssearch-globalsearch {
      border: 1px solid #CCC5B9;
  }
</style>

</div>
