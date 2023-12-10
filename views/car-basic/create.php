<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CarBasic $model */

$this->title = Yii::t('app', 'Create Car Basic');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Car Basics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-basic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
