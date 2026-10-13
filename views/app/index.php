<?php

use app\models\App;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AppSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = (Yii::$app->user->identity->isAdmin() ? "Панель управления: заявки": "Заявки");
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (!Yii::$app->user->isGuest && !Yii::$app->user->identity->isAdmin()): ?>
    <p>
        <?= Html::a('Навая заявка', ['create'], ['class' => 'btn btn-warning']) ?>
    </p>
    <?php endif ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model) {return ["title" => $model->getInfo()];},
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'course_id',
                'content' => function($model) {return $model->course->name;},
                'filter' => false
            ],
            'start',
            'status',
            //'feedback:ntext',
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, App $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
