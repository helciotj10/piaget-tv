<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProgramacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Programacao';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card" style="background-color: #FAFAFA ;">

    <div class="header">
        <h4 class="title"><?= Html::encode($this->title) ?></h4>
    </div>

    <div class="content">

        <p>
            <?= Html::a('Adicionar Programa', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<div id="acordeon">
    <div class="panel-group" id="accordion">
        <div class="panel panel-border panel-default">
            <a data-toggle="collapse" href="#collapseOne">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Segunda
                        <i class="ti-angle-down"></i>
                    </h4>
                </div>
            </a>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                 <table class="dataTable table table-bordered table-hover" >
                    <thead>
                        <tr>
                            <th>Dia da Semana</th> 
                            <th>Hora</th> 
                            <th>Titulo</th>       
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($dataProviderSegunda->getModels() as $model) {

                            echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=programacao/view&id=".$model->id."' style='cursor: pointer;'>";
                             echo "<td>".$model->semana."</td>";
                            echo "<td>".$model->hora."</td>";
                            echo "<td>".$model->titulo."</td>";

                        } ?>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="panel panel-border panel-default">
            <a data-toggle="collapse" href="#collapseTwo">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Terça
                        <i class="ti-angle-down"></i>
                    </h4>
                </div>
            </a>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="dataTable table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>Dia da Semana</th> 
                                <th>Hora</th> 
                                <th>Titulo</th>       
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($dataProviderTerca->getModels() as $model) {

                                echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=programacao/view&id=".$model->id."' style='cursor: pointer;'>";
                                 echo "<td>".$model->semana."</td>";
                                echo "<td>".$model->hora."</td>";
                                echo "<td>".$model->titulo."</td>";

                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-border panel-default">
            <a data-toggle="collapse" href="#collapseThree">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Quarta
                        <i class="ti-angle-down"></i>
                    </h4>
                </div>
            </a>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="dataTable table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>Dia da Semana</th> 
                                <th>Hora</th> 
                                <th>Titulo</th>       
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($dataProviderQuarta->getModels() as $model) {

                                echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=programacao/view&id=".$model->id."' style='cursor: pointer;'>";
                                 echo "<td>".$model->semana."</td>";
                                echo "<td>".$model->hora."</td>";
                                echo "<td>".$model->titulo."</td>";

                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-border panel-default">
            <a data-toggle="collapse" href="#collapseFour">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Quinta
                        <i class="ti-angle-down"></i>
                    </h4>
                </div>
            </a>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="dataTable table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>Dia da Semana</th> 
                                <th>Hora</th> 
                                <th>Titulo</th>       
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($dataProviderQuinta->getModels() as $model) {

                                echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=programacao/view&id=".$model->id."' style='cursor: pointer;'>";
                                 echo "<td>".$model->semana."</td>";
                                echo "<td>".$model->hora."</td>";
                                echo "<td>".$model->titulo."</td>";

                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-border panel-default">
            <a data-toggle="collapse" href="#collapseFive">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Sexta
                        <i class="ti-angle-down"></i>
                    </h4>
                </div>
            </a>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="dataTable table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>Dia da Semana</th> 
                                <th>Hora</th> 
                                <th>Titulo</th>       
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($dataProviderSexta->getModels() as $model) {

                                echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=programacao/view&id=".$model->id."' style='cursor: pointer;'>";
                                 echo "<td>".$model->semana."</td>";
                                echo "<td>".$model->hora."</td>";
                                echo "<td>".$model->titulo."</td>";

                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-border panel-default">
            <a data-toggle="collapse" href="#collapseSix">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Sabado
                        <i class="ti-angle-down"></i>
                    </h4>
                </div>
            </a>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="dataTable table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>Dia da Semana</th> 
                                <th>Hora</th> 
                                <th>Titulo</th>       
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($dataProviderSabado->getModels() as $model) {

                                echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=programacao/view&id=".$model->id."' style='cursor: pointer;'>";
                                 echo "<td>".$model->semana."</td>";
                                echo "<td>".$model->hora."</td>";
                                echo "<td>".$model->titulo."</td>";

                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-border panel-default">
            <a data-toggle="collapse" href="#collapseSeven">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Domingo
                        <i class="ti-angle-down"></i>
                    </h4>
                </div>
            </a>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="dataTable table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>Dia da Semana</th> 
                                <th>Hora</th> 
                                <th>Titulo</th>       
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($dataProviderDomingo->getModels() as $model) {

                                echo "<tr class='clickable-row' title='Ver detalhes' data-href='?r=programacao/view&id=".$model->id."' style='cursor: pointer;'>";
                                 echo "<td>".$model->semana."</td>";
                                echo "<td>".$model->hora."</td>";
                                echo "<td>".$model->titulo."</td>";

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