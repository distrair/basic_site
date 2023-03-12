<?php
use yii\helpers\Url;
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">
	<div class="text-center display-4 mt-3">Создать портфолио</div>
	<div class="text-center display-5 mt-3">Единственный сайт для создания портфолио, многофункиональный и простой</div>
    <?php if (Yii::$app->user->isGuest) { ?>
    <div class="col text-center mt-3">
        <?= Html::a('Зарегистрироваться', ['/user/create'], ['class' => 'btn btn-success']) ?>
    </div>
    <?php } else {?>
    <div class="col text-center mt-3">
        <?= Html::a('Создать портфолио', ['/portfolio/create'], ['class' => 'btn btn-success']) ?>
    </div>
    <?php } ?>
</div>
