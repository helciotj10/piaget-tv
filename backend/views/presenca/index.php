<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PresencaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Listas das Presenças';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presenca-index">

    <p> Atençao!!! Esta Parte ainda esta em desenvolvimento. </p>

   <div class="card" style="background-color: #FAFAFA ;">
    <div class="content">

        <h1><?= Html::encode($this->title) ?></h1>
        <br>

        <p>
            <?= Html::a('Nova lista de Presença', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <br>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'dia',
                'mes',
                'ano',
                //'estado',
                //'crud_by',
                //'crud_data',
                //'user_id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>

</div>
