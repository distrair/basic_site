<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Portfolio $model */

$this->title = 'Create Portfolio';
?>
<div class="portfolio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
