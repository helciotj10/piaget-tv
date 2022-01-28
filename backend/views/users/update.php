<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Users */

$this->title = 'Update Users: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-update">

	<div class="card">
		<div class="header">
			<h4 class="title">Atualizar Pessoa</h4>
		</div>
		<div class="content">

			<?= $this->render('_form', [
				'model' => $model,
			]) ?>
			
		</div>
	</div>

</div>
