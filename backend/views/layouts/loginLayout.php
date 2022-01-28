<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;


LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="cont">
       <?php if(Yii::$app->session->hasFlash('success')): ?>
            <div style="padding: 20px !important; background-color: #00cc00 !important; color: white !important; font-size: 20px !important;"><?php echo Yii::$app->session->getFlash('success');?>
            </div>
        <?php endif; ?>

        <?php if(Yii::$app->session->hasFlash('error')): ?>
            <div style="padding: 20px !important; background-color: #cc0000 !important; color: white !important; font-size: 20px !important;"> <strong>Email Invalido!</strong> <?php echo Yii::$app->session->getFlash('error');?>
            </div>
        <?php endif; ?>
    <div class="demo">
        <div style="text-align: center;" class="login">
            <!--div class="login__check"></div-->
            <div>
                <img style="width: 100%; margin-top: 10px;" src="logo.png">
            </div>
            <?= $content ?>
        </div>
    </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
