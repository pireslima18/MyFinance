<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';

$this->registerJs("
    $(document).ready(function(){
        
    });
", \yii\web\View::POS_END);

?>

<style>

    .button-63 {
        align-items: center;
        background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
        border: 0;
        border-radius: 8px;
        box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
        box-sizing: border-box;
        color: #FFFFFF;
        display: flex;
        font-family: Phantomsans, sans-serif;
        font-size: 20px;
        font-weight: bold;
        justify-content: center;
        line-height: 1em;
        max-width: 100%;
        min-width: 140px;
        padding: 19px 24px;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
        cursor: pointer;
    }

    .button-63:active,
    .button-63:hover {
        outline: 0;
    }

    @media (min-width: 768px) {
        .button-63 {
            font-size: 24px;
            min-width: 196px;
        }
    }

</style>



<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3 row border">

        <div class="col-4">
            <?= Html::button('<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>+ Compra', [
                'class'=>'button-63',
                'onclick' => '
                    $("#modal #modalContent").html("");
                    $("#modal").find("#modalContent").load("'.Url::toRoute(['compra/create']).'");
                    $("#modal").find(".modal-title").html("Compra");
                    $("#modal").modal("show");
                ',
            ]); ?>
        </div>
        <div class="col-4">
            <?= Html::button('<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>+ Produto', [
                'class'=>'button-63',
                'onclick' => '
                    $("#modal #modalContent").html("");
                    $("#modal").find("#modalContent").load("'.Url::toRoute(['produto/create']).'");
                    $("#modal").find(".modal-title").html("Produto");
                    $("#modal").modal("show");
                ',
            ]); ?>
        </div>
        <div class="col-4">
            <?= Html::button('<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>+ Categoria', [
                'class'=>'button-63',
                'onclick' => '
                    $("#modal #modalContent").html("");
                    $("#modal").find("#modalContent").load("'.Url::toRoute(['categoria/create']).'");
                    $("#modal").find(".modal-title").html("Categoria");
                    $("#modal").modal("show");
                ',
            ]); ?>
        </div>
        
       
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
