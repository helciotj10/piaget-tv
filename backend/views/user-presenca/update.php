<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserPresenca */

$this->title = 'Update User Presenca: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Presencas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-presenca-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
