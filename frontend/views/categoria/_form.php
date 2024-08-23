<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\Categoria $model */
/** @var yii\widgets\ActiveForm $form */

$this->registerJs("
    $(document).ready(function(){
        $('#categoria_form button').click(function(e){
            e.preventDefault();

            var form_data = $('#categoria_form').serialize();
            var action_url = $('#categoria_form').attr('action');

            $.ajax({
                url: action_url,
                data: form_data,
                method: 'POST',
                success: function(resp){
                    if (resp.success == 1) {
                        swal({
                            title: 'Sucesso',
                            text: 'Categoria cadastrado com sucesso',
                            icon: 'success',
                            timer: 3000,
                            allowOutsideClick: true,
                        });
                        $('#modal').modal('hide');
                        $.pjax.reload({container:'#id-pjax-categoria',async:false});
                    } else {
                        swal({
                            title: 'Erro',
                            text: 'Erro ao cadastrar Categoria',
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

<div class="categoria-form">

    <?php $form = ActiveForm::begin(['id' => 'categoria_form']); ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success mt-3']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
