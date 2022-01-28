<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
   <?php $this->registerMetaTag([
      'property' => 'og:title',
      'content' => 'TV Piaget'
    ]); 
       $this->registerMetaTag([
      'property' => 'og:url',
      'content' => 'https://www.unipiaget.edu.cv/webtv'
    ]);
    $this->registerMetaTag([
      'property' => 'og:image',
      'content' => 'https://www.unipiaget.edu.cv/webtv/web/images/liveradio/7-removebg-preview.png'
    ]); ?>
    <?php $this->head() ?>

</head>
<body class="responsive">
<?php $this->beginBody() ?>
<?php

/* @var $this yii\web\View */

$this->title = 'TV Piaget';
?>





 
<!-- Off Canvas Menu -->
<nav id="off-canvas-menu" >
  <div id="off-canvas-menu-title">MENU<span class="icon flaticon-cancel" id="off-canvas-menu-close"></span></div>
  <ul class="expander-list">
    <li><span class="name"><a href="?r=site/equipa" class="btn-main">Equipa</a></span></li>
    <li><span class="name"><a href="?r=site/programacao" class="btn-main">Programação</a></span></li>
    <li><span class="name"><a href="?r=site/noticias" class="btn-main">Noticias</a></span></li>
    <li><span class="name"><a href="?r=site/galeria" class="btn-main">Galeria</a></span></li>
    <li><span class="name"><a href="?r=site/contactos" class="btn-main">Contatos</a></span></li>
  </ul>
</nav>
<!-- //end Off Canvas Menu -->

<div id="outer">
    <div id="outer-canvas"> 
	  	<!-- Navbar -->
	  	<?= $this->render('header.php') ?>
	    <!-- //end Navbar --> 
	    

       <!-- Social widgets -->
    <section class="social-widgets hidden-xs" style="margin-top: 50px;">
     
        <div class="items row">
          <div class="col-md-12"> 
            <a target="_blank" href="https://www.facebook.com/UniPiagetCV/" class="tab-icon"><span class="icon icon-facebook flaticon-facebook"></span></a>
          </div>
          <br><br><br><br>
          <div class="col-md-12"> <a target="_blank" href="https://www.instagram.com/unipiaget_de_caboverde/" class="tab-icon"><img src="instagram.png"></a>
          </div>
          <br><br><br><br>
          <!--div class="col-md-12"> <a target="_blank" href="https://www.linkedin.com/school/unipiaget-caboverde/" class="tab-icon"><span class="icon icon-linkedin flaticon-linkedin"></span></a>
          </div>
          <br><br><br><br-->
          <div class="col-md-12"> <a target="_blank" href="https://www.youtube.com/channel/UCAy2X-u7bSkBH2SxUO7BKeg" class="tab-icon"><span class="icon icon-youtube flaticon-youtube"></span></a>
          </div>
        </div>
  
    </section>
    <!-- //end Social widgets -->

	    <?= $content ?>
	    
	    <!-- Footer -->
	    <?= $this->render('footer.php') ?>
	    <div id="outer-overlay"></div>
	    <!-- //end Footer -->
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
