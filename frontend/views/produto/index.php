<?php

use app\models\Produto;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var frontend\models\ProdutoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

// $this->title = 'Produtos';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Criar Produto', ['class' => 'btn btn-primary text-white fw-bolder', 'onclick' => '
            $("#modal #modalContent").html("");
            $("#modal").find("#modalContent").load("'.Url::toRoute(['produto/create']).'");
            $("#modal").find(".modal-title").html("Criar produto");
            $("#modal").modal("show");
        ']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php Pjax::begin(['id' => 'id-pjax-produto', 'timeout' => false, 'enablePushState' => false]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            'descricao',
            [
                'attribute' => 'id_categoria',
                'value' => 'categoria.descricao'
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Produto $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>


</div>
