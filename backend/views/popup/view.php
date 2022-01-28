<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Popup */

$this->title = 'Popup';
$this->params['breadcrumbs'][] = ['label' => 'Popups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="header">
      <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="content">
        <p>
            <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'titulo',
            [
                'label'=> Yii::t('app', 'Imagem'),
                'value' => function ($model)  {
                    return "<img style='width: 250px; height: 300px;' src=../radio/".$model->imagem." alt='...'/>";
                           
                },
                'format'=>'html',
            ],
            [
                'label'=> Yii::t('app', 'Estado'),
                'value' => function ($model)  {
                    return $model->estado ? '<a href="?r=popup/ativardesativar&id='.$model->id.'" class="btn btn-success">ATIVADO</a>':'<a href="?r=popup/ativardesativar&id='.$model->id.'" class="btn btn-danger">DESATIVADO</a>';
                           
                },
                'format'=>'html',
            ],
            'link',
        ],
    ]) ?>
</div>
</div>
