<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Youtube */

$this->title = 'Create Youtube';
$this->params['breadcrumbs'][] = ['label' => 'Youtubes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
	<div class="header">
		<h4 class="title"><?= Html::encode($this->title) ?></h4>
	</div>
 	<div class="content">
 		<?= $this->render('_form', [
				'model' => $model,
			]) ?>
 	</div>
</div>
