<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RubricasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rubricas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card" style="background-color: #FAFAFA ;">

    <div class="header">
        <h4 class="title"><?= Html::encode($this->title) ?></h4>
    </div>

    <div class="content">

        <p>
            <?= Html::a('Adicionar Rubrica', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Historico', ['historico'], ['class' => 'btn btn-primary']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


        <table class="dataTable table table-bordered table-hover" >
        <thead>
          <tr>
            <th>Tipo</th> 
            <th>Titulo</th>   
            <th>Data</th>     
          </tr>
        </thead>
         <tbody>
           
           <?php foreach ($dataProvider->getModels() as $model) {

                echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=rubricas/view&id=".$model->id."' style='cursor: pointer;'>";
                echo "<td>".$model->tipo."</td>";
                echo "<td>".$model->titulo."</td>";
                echo "<td>".$model->data."</td></tr>";
                  
            } ?>
           
         </tbody>
      </table>
    </div>

</div>
