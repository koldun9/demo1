<?php
use yii\bootstrap5\Carousel;
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'Портал "Корочки.есть"!';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4"> <?= $this->title?> </h1>

        <p class="lead"> Онлайн-курсы дополнительного профессионального образования.</p>

        <p><a class="btn btn-lg btn-warning" href="/app">Записаться на курсы</a></p>
    </div>

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <?php 
        echo Carousel::widget([
            'items'=> [
                [
                    'content' => Html::img('@web/images/img1.jpg', ['alt' => 'computer']),
                    'caption' => "Котята программируют",
                ],
                [
                    'content' => Html::img('@web/images/img2.jpg', ['alt' => 'computer']),
                    'caption' => "Капибары программируют",
                ],
                [
                    'content' => Html::img('@web/images/img3.jpg', ['alt' => 'computer']),
                    'caption' => "Щенята программируют",
                ],
                [
                    'content' => Html::img('@web/images/img4.jpg', ['alt' => 'computer']),
                    'caption' => "Мышата программируют",
                ],
            ]

        ]) 
        ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Качественно</h2>

                <p>Возврат денег в случае обоснованной претензии по качеству.</p>

                <p><a class="btn btn-outline-secondary" href="/app">Записаться &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Удобно</h2>

                <p>Обучайтесь в удобное время, в удобном месте и в своем темпе.</p>

                <p><a class="btn btn-outline-secondary" href="/app">Узнать подробнее &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Выгодно</h2>

                <p>Сейчас как раз скидки на обучение программированию.</p>

                <p><a class="btn btn-outline-secondary" href="/app">Получить скидку &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
