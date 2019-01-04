<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SeyahattbSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seyahattb-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'yolculugunadi') ?>

    <?= $form->field($model, 'iletisim') ?>

    <?= $form->field($model, 'gizecekyerler') ?>

    <?= $form->field($model, 'para') ?>

    <?php // echo $form->field($model, 'sure') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
