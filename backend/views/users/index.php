<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equipa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">
    <div class="card" style="background-color: #FAFAFA ;">
        <div class="content">

            <h1><?= Html::encode($this->title) ?></h1>

          <br>
           <div class="row">
            <div class="col-md-6">
                <p style="margin-top: 10px;">
                   <?= Html::a('Adicionar', ['create'], ['class' => 'btn btn-success']) ?> 
               </p>
           </div>
           <div class="col-md-6">
            <p>
               <?php echo $this->render('_search', ['model' => $searchModel]); ?> 
           </p>
       </div>
   </div>
   <br>

   <?php foreach ($dataProvider->getModels() as $model) { ?>
    <div style="margin-left: 10px; margin-right: 10px;" class="card">
        <a href="index.php?r=users%2Fview&id=<?= $model->id ?>">
            <div class="content row">
                <div class="col-md-1"><img style='width: 50px; height: 50px;' class="avatar border-white" src="<?= $model->foto ?>" alt="..."/></div>
                <div class="col-md-11"><p><b><?= $model->nome ?></b></p>
                  <p>Cinto: <?= $model->cinto ?> &nbsp; &nbsp; Idade: <?php echo date_diff(date_create($model->data_nascimento), date_create('today'))->y;?>  </p>
                </div>
            </div> 
        </a>
    </div>
<?php } ?>


<div style="margin-top: 15px;" >.</div>




</div>
</div>


</div>
