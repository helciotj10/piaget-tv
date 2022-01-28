<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Presenca */

$this->title = 'Adicionar Nova Lista de presença ('.date('Y-m-d').')';
$this->params['breadcrumbs'][] = ['label' => 'Presencas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presenca-create">

    <div class="card" style="background-color: #FAFAFA ;">
		<div class="header">
			<h4 class="title"><?= Html::encode($this->title) ?></h4>
		</div>
		<div class="content">
			<?= $this->render('_form', [
				'model' => $model,
				'searchModel' => $searchModel,
            	'dataProvider' => $dataProvider,
			]) ?>
		</div>
	</div>

</div>
