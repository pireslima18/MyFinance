<?php

use app\models\Produto;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\money\MaskMoney;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Compra $model */
/** @var yii\widgets\ActiveForm $form */

$this->registerJs("
    $(document).ready(function(){
        $('#form-compra button').click(function(e){
            e.preventDefault();

            var form_data = $('#form-compra').serialize();
            var action_url = $('#form-compra').attr('action');

            $.ajax({
                url: action_url,
                data: form_data,
                method: 'POST',
                success: function(resp){
                    if (resp.success == 1) {
                        swal({
                            title: 'Sucesso',
                            text: 'Compra cadastrado com sucesso',
                            icon: 'success',
                            timer: 7000,
                            allowOutsideClick: true,
                        });
                        $.pjax.reload({container:'#id-pjax-compra',async:false});
                    } else {
                        swal({
                            title: 'Erro',
                            text: 'Erro ao registrar Compra',
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

<div class="compra-form">

    <?php $form = ActiveForm::begin(['id' => 'form-compra']); ?>

    <?= $form->field($model, 'valor')->widget(MaskMoney::classname(),['pluginOptions'=>['prefix'=>'R$'],'options'=>['maxlength' => 15, 'placeholder'=>'']]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_produto')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Produto::find()->orderBy('descricao')->asArray()->all(), 'id', 'descricao'),
        'options' => ['placeholder' => ' '],
        'showToggleAll' => false,
    ]);  ?>


    <div class="form-group">
        <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary mt-3']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
