<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Texto */

$this->title = 'Create Texto';
$this->params['breadcrumbs'][] = ['label' => 'Textos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="texto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
