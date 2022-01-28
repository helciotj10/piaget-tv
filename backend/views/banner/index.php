<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banners';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card" style="background-color: #FAFAFA ;">

    <div class="header">
        <h4 class="title"><?= Html::encode($this->title) ?></h4>
    </div>

    <div class="content">

        <p>
            <?= Html::a('Adicionar Banner', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


        <table class="dataTable table table-bordered table-hover" >
        <thead>
          <tr>
            <th>Imagem</th> 
            <th>Titulo</th>       
          </tr>
        </thead>
         <tbody>
           
           <?php foreach ($dataProvider->getModels() as $model) {

                echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=banner/view&id=".$model->id."' style='cursor: pointer;'>";
                echo "<td><img style='width: 200px; height: 70px;' src=../".$model->imagem." alt='...'/></td>";
                echo "<td>".$model->titulo."</td>";
                  
            } ?>
           
         </tbody>
      </table>
    </div>

</div>
