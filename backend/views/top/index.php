<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TopSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tops';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card" style="background-color: #FAFAFA ;">

    <div class="header">
        <h4 class="title"><?= Html::encode($this->title) ?></h4>
    </div>

    <div class="content">

        <p>
            <?= Html::a('Adicionar musica Top', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


        <table class="dataTable table table-bordered table-hover" >
        <thead>
          <tr>
            <th>MUSICA</th> 
            <th>CANTOR</th>
            <th>VOTOS</th>       
          </tr>
        </thead>
         <tbody>
           
           <?php foreach ($dataProvider->getModels() as $model) {

                echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=top/view&id=".$model->id."' style='cursor: pointer;'>";
                 echo "<td>".$model->musica."</td>";
                echo "<td>".$model->cantor."</td>";
                 echo "<td>".$model->votos."</td>";
                  
            } ?>
           
         </tbody>
      </table>
    </div>


    <div class="header">
        <h4 class="title">Propostas Top</h4>
    </div>

    <div class="content">

        <table class="dataTable table table-bordered table-hover" >
        <thead>
          <tr>
            <th>MUSICA</th> 
            <th>CANTOR</th>
            <th>VOTOS</th>       
          </tr>
        </thead>
         <tbody>
           
           <?php foreach ($dataProviderp->getModels() as $model) {

                echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=top/view&id=".$model->id."' style='cursor: pointer;'>";
                 echo "<td>".$model->musica."</td>";
                echo "<td>".$model->cantor."</td>";
                 echo "<td>".$model->votos."</td>";
                  
            } ?>
           
         </tbody>
      </table>
    </div>

</div>

