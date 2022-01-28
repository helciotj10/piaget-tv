<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Top */

$this->title = $model->musica;
$this->params['breadcrumbs'][] = ['label' => 'Tops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="header">
      <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="content">
        <p>
            <?= Html::a('Adicionar Musica', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Tens a certesa? Esta acção nao pode ser desfeita.',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                'label'=> Yii::t('app', 'Imagem'),
                'value' => function ($model)  {
                    return "<img style='width: 100px; height: 70px;' src=../".$model->imagem." alt='...'/>";
                           
                },
                'format'=>'html',
            ],
            'musica',
            'cantor',
            'youtube',
            'ordem',
            'votos',
        ],
    ]) ?>
    </div>

</div>
