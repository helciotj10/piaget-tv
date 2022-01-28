<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YoutubeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Recentes';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card" style="background-color: #FAFAFA ;">

    <div class="header">
        <h4 class="title"><?= Html::encode($this->title) ?></h4>
    </div>

    <div class="content">

        <p>
            <?= Html::a('Adicionar', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


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
                 //echo "<td>".$model->tipo."</td>";
                 echo "<td>".$model->ordem."</td>";
                  
            } ?>
           
         </tbody>
      </table>
    </div>


    

</div>
