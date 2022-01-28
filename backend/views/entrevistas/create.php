<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Entrevistas */

$this->title = 'Create Entrevistas';
$this->params['breadcrumbs'][] = ['label' => 'Entrevistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrevistas-create">

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
