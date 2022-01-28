<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Indexitem */

$this->title = 'Atualizar: ' . $model->indexItemTitulo;
$this->params['breadcrumbs'][] = ['label' => 'Indexitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
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
