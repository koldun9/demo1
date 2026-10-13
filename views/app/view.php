<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\App $model */

$this->title = "Заявка ". $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="app-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $updateText = Yii::$app->user->identity->isAdmin() ? "Сменить статус" : "Оставить отзыв"; ?>

    <p>
        <?= Html::a($updateText, ['update', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'user_id',
                'value' => $model->user->full_name,
            ],
            [
                'attribute' => 'course_id',
                'value' => $model->course->name,
            ],
            'start',
            'pament_option',
            'status',
            'feedback:ntext',
        ],
    ]) ?>

</div>
