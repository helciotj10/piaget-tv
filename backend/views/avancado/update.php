<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Avancado */

$this->title = 'Avançado: ';
$this->params['breadcrumbs'][] = ['label' => 'Avancados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="avancado-update">

    <?= $this->render('_form', [
        'model' => $model,
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
    ]) ?>

</div>
