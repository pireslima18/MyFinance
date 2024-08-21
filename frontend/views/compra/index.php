<?php

use app\models\Compra;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\money\MaskMoney;

/** @var yii\web\View $this */
/** @var frontend\models\CompraSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Compras';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="compra-index mt-5">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('+ Compra', ['class' => 'btn btn-primary text-white fw-bolder', 'onclick' => '
            $("#modal #modalContent").html("");
            $("#modal").find("#modalContent").load("'.Url::toRoute(['compra/create']).'");
            $("#modal").find(".modal-title").html("Registrar compra");
            $("#modal").modal("show");
        ']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php Pjax::begin(['id' => 'id-pjax-compra', 'timeout' => false, 'enablePushState' => false]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'valor',
                'value' => function($model) {
                    return Yii::$app->formatter->asCurrency($model->valor, 'BRL');
                },
                'contentOptions' => ['class' => 'text-center'],
            ],
            'descricao',
            [
                'attribute' => 'id_produto',
                'value' => 'produto.descricao'
            ],
            [
                'attribute' => 'DataCompra',
                'contentOptions' => ['class' => 'text-center'],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' =>['class' => 'text-center', 'style' => 'vertical-align: middle;'],
                'template' => '{visualizar}{editar}',
                'buttons' => [
                  'visualizar' => function ($url, $model, $key) {
                    return '
                    <a class="btn btn-primary btn-circle" data-toggle="tooltip" data-pjax="0" title="Visualizar" href=\''.Url::to(['/brl-dispositivo-aparelho/view','id'=>$model->id]).'\'>
                    <i class="fa fa-eye"></i>
                    </a>
                    ';
                  },
                  'editar' => function ($url, $model, $key) {
                    return '
                    <a class="" data-toggle="tooltip" data-pjax="0" title="Editar" href=\''.Url::to(['/brl-dispositivo-aparelho/update','id'=>$model->id]).'\'>
                    <i class="fa fa-pencil"></i>
                    </a>
                    ';
                  },
                ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
