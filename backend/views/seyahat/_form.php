<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Seyahat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seyahat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adsoyad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cinsiyet')->dropDownList([ 'Erkek' => 'Erkek', 'Kız' => 'Kız', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gidecektarih')->textInput() ?>

    <?= $form->field($model, 'sehir')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
