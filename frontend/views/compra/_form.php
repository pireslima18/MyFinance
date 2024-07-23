<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Compra $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="compra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pessoa')->textInput() ?>

    <?= $form->field($model, 'id_produto')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
