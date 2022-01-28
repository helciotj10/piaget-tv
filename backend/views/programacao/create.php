<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Programacao */

$this->title = 'Create Programacao';
$this->params['breadcrumbs'][] = ['label' => 'Programacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programacao-create">

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

</div>
