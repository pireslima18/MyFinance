<?php

use app\models\Categoria;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\web\JsExpression;

/** @var yii\web\View $this */
/** @var app\models\Produto $model */
/** @var yii\widgets\ActiveForm $form */

$this->registerJs("
    $(document).ready(function(){
        $('#produto_form button').click(function(e){
            e.preventDefault();

            var form_data = $('#produto_form').serialize();
            var action_url = $('#produto_form').attr('action');

            $.ajax({
                url: action_url,
                data: form_data,
                method: 'POST',
                success: function(resp){
                    if (resp.success == 1) {
                        swal({
                            title: 'Sucesso',
                            text: 'Produto cadastrado com sucesso',
                            icon: 'success',
                            timer: 7000,
                            allowOutsideClick: true,
                        });
                    } else {
                        swal({
                            title: 'Erro',
                            text: 'Erro ao cadastrar produto',
                            icon: 'error',
                            timer: 7000,
                            allowOutsideClick: true,
                        });
                    }
                }
            });
        });
    });
", \yii\web\View::POS_END);

?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(['id' => 'produto_form']); ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_categoria')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Categoria::find()->orderBy('descricao')->asArray()->all(), 'id', 'descricao'),
        'options' => ['placeholder' => ' '],
        'showToggleAll' => false,
    ]); 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success mt-3']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
