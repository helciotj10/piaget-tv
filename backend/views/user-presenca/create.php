<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserPresenca */

$this->title = 'Create User Presenca';
$this->params['breadcrumbs'][] = ['label' => 'User Presencas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-presenca-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
