<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Album */

$this->title = 'Detalhes Album';
$this->params['breadcrumbs'][] = ['label' => 'Albuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="header">
      <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="content">
    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tens a certeza que pretende eliminar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'titulo',
            [
                'label'=> Yii::t('app', 'Descrição'),
                'value' => function ($model)  {
                    return $model->descricao;
                           
                },
                'format'=>'html',
            ],
            'data2',
        ],
    ]) ?>

    <table class="dataTable table table-bordered table-hover" >
      <thead>
        <tr>
          <th>Imagem</th>   
          <th>Acção</th>     
        </tr>
      </thead>
       <tbody>
         
         <?php foreach ($model->fotografias as $foto) {

                    echo "<tr><td><img src='../".$foto->img."' class='responsive' style='width: 290px;'/></td>";
                    
                      echo "<td><a data-confirm='Tens a certeza que pretende eliminar este item?' class='btn btn-danger' href='?r=album/deletefoto&id=".$foto->id."'>Eliminar Fotografia</a></td></tr>";
                } 
          ?>
         
       </tbody>
    </table>
 </div>
</div>
