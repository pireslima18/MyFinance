<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Renda $model */

$this->title = 'Update Renda: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="renda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
