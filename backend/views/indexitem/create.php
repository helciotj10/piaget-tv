<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Indexitem */

$this->title = 'Create Indexitem';
$this->params['breadcrumbs'][] = ['label' => 'Indexitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indexitem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
