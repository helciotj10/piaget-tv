<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Noticia */

$this->title = 'Adicionar Programa/Seviço';
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
