<?php

use yii\helpers\Html;
use app\models\Produto;
use kartik\date\DatePicker;
use kartik\money\MaskMoney;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;
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
                success: function(data){
                    if (data.status == 1) {
                        swal({
                            title: 'Sucesso',
                            text: 'Compra cadastrado com sucesso',
                            icon: 'success',
                            timer: 3000,
                            allowOutsideClick: true,
                        });
                        $('#modal').modal('hide');
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

    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-5" style="margin: auto;">
            <?php
                echo '<div class="well border border-secondary rounded p-1" >';
                echo DatePicker::widget([
                    'name' => 'dp_5',
                    'type' => DatePicker::TYPE_INLINE,
                    'value' => $model->DataCompra == 'CURRENT_TIMESTAMP' ? date('d/m/Y') : $model->DataCompra,
                    'type' => DatePicker::TYPE_INLINE,
                    'pluginOptions' => [
                        'format' => 'dd/mm/yyyy',
                        'multidate' => false
                    ],
                    'options' => [
                    ]
                ]);
                echo '</div>';
            ?>
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Salvar', ['class' => 'btn btn-primary mt-3']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
