<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="login__form">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <div class="login__row">
            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
            </svg>
            <input id="loginform-username" name="LoginForm[username]" type="text" class="login__input name" placeholder="Nome do Utilizador"/>      
        </div>
        <div class="login__row">
            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
            </svg>
           <input id="loginform-password" name="LoginForm[password]" type="password" class="login__input pass" placeholder="Palavra-Passe"/>  
        </div> 
            <?= Html::submitButton('Login', ['class' => 'login__submit', 'name' => 'login-button']) ?>
        <p class="login__signup">Esqueceu a palavra-passe? &nbsp;<?= Html::a('Recuperar', ['site/request-password-reset']) ?></p>
        <?php ActiveForm::end(); ?>
    </div>
