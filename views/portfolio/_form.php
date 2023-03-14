<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use sjaakp\wysiwyg\Wysiwyg;

/** @var yii\web\View $this */
/** @var app\models\Portfolio $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="portfolio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'description')->widget(Wysiwyg::class, []) ?>

    <?= $form->field($model, 'skills')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'knowledge')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
