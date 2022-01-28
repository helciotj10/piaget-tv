<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Noticia */

$this->title = 'Programa: '.$model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="card">
    <div class="header">
      <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="content">
        <p>
            <?= Html::a('Adicionar +', ['create'], ['class' => 'btn btn-success']) ?>
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
               // 'id',
                'titulo',
                'conteudo:ntext',
                [
                'label'=> Yii::t('app', 'Imagem'),
                'value' => function ($model)  {
                    return "<img style='width: 100px; height: 70px;' src=../../webtv/".$model->imagem." alt='...'/>";
                           
                },
                'format'=>'html',
            ],
                //'imagem',
               // 'link:url',
                'data',
            ],
        ]) ?>

        <p>
            <?= Html::a('Adicionar Videos', ['youtube/programa', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        </p>
        <table class="dataTable table table-bordered table-hover" >
        <thead>
          <tr>
            <th>Titulo</th> 
            <th>Link</th> 
            <th>Ordem</th>      
          </tr>
        </thead>
         <tbody>
           
           <?php foreach ($dataProvider->getModels() as $model) {

                echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=youtube/view&id=".$model->id."' style='cursor: pointer;'>";
                 echo "<td>".$model->efeito."</td>";
                echo "<td>".$model->link."</td>";
                echo "<td>".$model->ordem."</td>";
                  
            } ?>
           
         </tbody>
      </table>
    </div>
</div>
