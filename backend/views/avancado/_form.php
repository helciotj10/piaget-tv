<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Avancado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avancado-form">

    <div class="card" style="background-color: #FAFAFA ;">

    <div class="header">
        <h4 class="title"><?= Html::encode($this->title) ?></h4>
    </div>

    <div class="content">
        <div id="acordeon">
            <div class="panel-group" id="accordion">
                <!-- Copia kel div li pa adiciona menu -->
                <div class="panel panel-border panel-default">
                    <a data-toggle="collapse" href="#collapseOne">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                Rubricas
                                <i class="ti-angle-down"></i>
                            </h4>
                        </div>
                    </a>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <p> Link para ver lançamentos Antigos </p>
                                    <?= $model->rubricasVerLancamentosAntigos ? '<a href="?r=avancado/ativardesativar&id='.$model->id.'" class="btn btn-success">ATIVADO</a>':'<a href="?r=avancado/ativardesativar&id='.$model->id.'" class="btn btn-danger">DESATIVADO</a>'; ?>
                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-border panel-default">
                    <a data-toggle="collapse" href="#collapseTwo">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                Cartaz
                                <i class="ti-angle-down"></i>
                            </h4>
                        </div>
                    </a>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <?php $form = ActiveForm::begin(); ?>
                                    <div class="row" >
                                    	<div class="col-md-8">
                                    		<?= $form->field($model, 'cartazLimiteDeSlide')->textInput(['type' => 'number']) ?>
                                    	</div>
                                    	<div class="col-md-4" style="margin-top: 25px;">
                                    		<?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
                                    	</div>
                            	
                                    </div>
                                    <?php ActiveForm::end(); ?>

                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-border panel-default">
                    <a data-toggle="collapse" href="#collapseThree">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                Pagina Inicial
                                <i class="ti-angle-down"></i>
                            </h4>
                        </div>
                    </a>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>
                                <?= Html::a('Adicionar Item', ['indexitem/create'], ['class' => 'btn btn-success']) ?>
                            </p>

                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                            <table class="dataTable table table-bordered table-hover" >
                            <thead>
                              <tr> 
                                <th>Titulo</th>   
                                <th>Estado</th>
                                <th>Ordem</th>     
                              </tr>
                            </thead>
                             <tbody>
                               
                               <?php foreach ($dataProvider->getModels() as $model) {

                                    echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=indexitem/update&id=".$model->id."' style='cursor: pointer;'>";
                                    echo "<td>".$model->indexItemTitulo."</td>";
                                    $estado = $model->indexItemEstado ? '<a href="" class="btn btn-success">VISIVEL</a>':'<a href="" class="btn btn-danger">DESATIVADO</a>';
                                    echo "<td>".$estado."</td>";
                                    echo "<td>".$model->indexItemOrdem."</td></tr>";
                                      
                                } ?>
                               
                             </tbody>
                          </table>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
