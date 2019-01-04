<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Seyahattb */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seyahattb-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'yolculugunadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iletisim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gizecekyerler')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'para')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sure')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
