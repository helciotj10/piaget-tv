<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Users */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="card card-user">
                    <div class="image">
                        <img src="uploads/background.jpg" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                            <?php if ($model->foto == NULL) {
                                echo '<img class="avatar border-white" src="uploads/face.jpg" />';
                            }else{ ?>
                              <img class="avatar border-white" src="<?= $model->foto ?>" alt="..."/> <?php 
                          } ?>

                          <h4 class="title"><?=$model->nome?><br/>
                           <a href="http://<?=$model->email?>" target="_blank"><small><?=$model->email?></small></a>
                       </h4>
                   </div>
                   <p class="description text-center">
                    Cinto: <?=$model->cinto?>
                </p>
            </div>
            <hr>
            <div class="text-center">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1">
                        <h5><small>Idade</small><br /><?php echo date_diff(date_create($model->data_nascimento), date_create('today'))->y;?></h5>
                    </div>
                    <div class="col-md-5">
                        <h5><small>Sexo</small><br /><?=$model->sexo?></h5>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center">
            <a href="index.php?r=users%2Fupdate&id=<?=$model->id?>" class="btn btn-info btn-fill btn-wd">Atualizar Perfil </a>
            <?= Html::a('Desactivar Perfil', ['delete', 'id' => $model->id, 'crud' => Yii::$app->user->identity->id], [
                'class' => 'btn btn-danger btn-fill btn-wd',
                'data' => [
                    'confirm' => 'Deseja realmente desactivar este Perfil? (Ficará registrado que você fez isso)',
                    'method' => 'post',
                ],
            ])?>
        </div>
        <br>
    </div>

    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Perfil do Utilizador</h4>
            </div>
            <div class="content">
                <form>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Escola</label>
                                <input type="text" class="form-control border-input" disabled placeholder="Company" value="TKD">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nome de Utilisador</label>
                                <p class="form-control border-input"> <?=$model->username?> </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <p class="form-control border-input"> <?=$model->email?> </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Nome</label>
                                <p class="form-control border-input"> <?=$model->nome?> </p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Data Nascimento</label>
                                <p class="form-control border-input"> <?=$model->data_nascimento?> </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Link Facebook</label>
                                <p class="form-control border-input"> <a href="<?=$model->facebook?>"> link facebook <?=$model->username?> </a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Altura</label>
                                <p class="form-control border-input"> <?=$model->aturaMetros?> </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Peso</label>
                                <p class="form-control border-input"> <?=$model->pesoKilo?> </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Telefone</label>
                                <p class="form-control border-input"> <?=$model->telemovel?> </p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Turma</label>
                                <p class="form-control border-input"> <?=$model->turma?> </p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Tipo</label>
                                <p class="form-control border-input"> <?=$model->tipo?> </p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Data Inscrição</label>
                                <p class="form-control border-input"> <?=$model->data_inscrisao?> </p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>

