<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CartazSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cartazes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card" style="background-color: #FAFAFA ;">

    <div class="header">
        <h4 class="title"><?= Html::encode($this->title) ?></h4>
    </div>

    <div class="content">

        <p>
            <?= Html::a('Adicionar Cartaz', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

           <div class="row">
           <?php foreach ($dataProvider->getModels() as $model) {

                echo "<div class='col-md-3'>
                        <a href='?r=cartaz/view&id=".$model->id."'>
                            <img style='width: 250px; height: 300px;' src=../radio/".$model->imagem." alt='...'/>
                        </a>
                      </div>";

                  
            } ?>
        </div>
    </div>

</div>