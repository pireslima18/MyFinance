<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;

$this->title = 'My Yii Application';

$this->registerJs("
    $(document).ready(function(){
        
    });
", \yii\web\View::POS_END);

?>

<div style="margin-top: 20%;">
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4><?= Yii::$app->name ?></h4></a>
                                <?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'mt-5 mb-5 login-input']); ?>
                                    <div class="form-group">
                                        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control border-0 border-bottom']) ?>
                                    </div>
                                    <div class="form-group">
                                        <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control border-0 border-bottom']) ?>
                                    </div>
                                    <?= Html::submitButton('Entrar', ['class' => 'btn login-form__btn submit w-100', 'name' => 'login-button']) ?>
                                </form>
                                <?php ActiveForm::end(); ?>
                                <p class="mt-5 login-form__footer">Ainda não tem uma conta?
                                    <?= Html::a('Criar agora', Url::to(['site/signup']), ['class' => 'text-primary']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>