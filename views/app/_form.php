<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\App $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="app-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if (!Yii::$app->user->identity->isAdmin()): ?>

        <?php if($model->isNewRecord): ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'course_id')->textInput() ?>

    <?= $form->field($model, 'start')->textInput() ?>

    <?= $form->field($model, 'pament_option')->textInput(['maxlength' => true]) ?>

        <?php elseif ($model->status == "Обучение завершено"): ?>
    <?= $form->field($model, 'feedback')->textarea(['rows' => 6]) ?>
        <?php endif ?>
    
    <?php else: ?>
    <?= $form->field($model, 'status')->dropDownList($statuses) ?>
    <?php endif ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
