<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Equipa */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Equipas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">

   <div class="header">
      <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="content">
    <p>
        <?= Html::a('Adicionar Membro', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'imagem',
            'nome',
            'nickname',
            'funcao',
            'descricao:ntext',
            'facebook',
            'instagram',
            'email:email',
        ],
    ]) ?>
</div>
</div>
