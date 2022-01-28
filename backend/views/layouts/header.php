<?php
//commit
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

?>

<nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">WebTv</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="ti-bell"></i>
                                        <p class="notification">0</p>
                                        <p>Notificações</p>
                                        <b class="caret"></b>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Nenhuma Notificação</a></li>
                                  </ul>
                            </li>
                            
                            <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">       
                                        <i class="ti-user"></i>
                                        <p>Perfil</p>
                                        <b class="caret"></b>
                                  </a>
                                  <ul class="dropdown-menu" style="width: 200px;">
                                    <li>   
                                            <img style="width: 200px; height: 200px;" class="avatar border-white img-responsive"  src="<?=Yii::$app->user->identity->foto?>" alt="..."/>       
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <?= Html::a('<span>Perfil</span>',
                                                        ['/users/view','id' =>Yii::$app->user->identity->id],
                                                        ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                                    ) ?>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <?= Html::a('<span>Sair</span>',
                                                        ['/site/logout'],
                                                        ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                                    ) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                                          
                                  </ul>
                            </li>

                                
                            </li>

                            
                        </ul>

                    </div>
                </div>
            </nav>