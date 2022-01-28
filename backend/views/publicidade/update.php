<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Publicidade */

$this->title = 'Atualizar Publicidade: ';
$this->params['breadcrumbs'][] = ['label' => 'Publicidades', 'url' => ['index']];
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
