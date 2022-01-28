<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\controllers\AlbumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Albuns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="header">
      <h1><?= Html::encode($this->title) ?></h1>
      <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>

    <div class="content">
      <p>
          <?= Html::a('Criar Album', ['create'], ['class' => 'btn btn-success']) ?>
      </p>

      <table class="dataTable table table-bordered table-hover" >
        <thead>
          <tr>
            <th>Titulo</th>   
            <th>Data</th>     
          </tr>
        </thead>
         <tbody>
           
           <?php foreach ($dataProvider->getModels() as $model) {

                      echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=album/view&id=".$model->id."' style='cursor: pointer;'><td>".$model->titulo."</td>";
                      
                        echo "<td>".$model->data2."</td></tr>";
                  } 
            ?>
           
         </tbody>
      </table>
    </div>
</div>
