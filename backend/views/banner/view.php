<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Banner */

$this->title = $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="header">
      <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="content">
        <p>
            <?= Html::a('Adicionar Banner', ['create'], ['class' => 'btn btn-success']) ?>
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
            'id',
            'titulo',
            [
                'label'=> Yii::t('app', 'Imagem'),
                'value' => function ($model)  {
                    return "<img style='width: 100px; height: 70px;' src='../radio/".$model->imagem."' alt='...'/>";
                           
                },
                'format'=>'html',
            ],
            'layer1',
            'layer2',
            'layer3',
            'marginLeft1',
            'marginTop1',
            'marginLeft2',
            'marginTop2',
            'marginLeft3',
            'marginTop3',
            'transicao',
            'link',
        ],
    ]) ?>

</div>
</div>

