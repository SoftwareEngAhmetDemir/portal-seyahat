<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\Seyahat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seyahat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adsoyad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cinsiyet')->dropDownList([ 'Erkek' => 'Erkek', 'Kız' => 'Kız', ],
        ['prompt' => '---']) ?>

    <?= $form->field($model, 'gidecektarih')->widget(
        DatePicker::className(), [
        // inline too, not bad
        'inline' => false,
        // modify template for custom rendering
       // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
    ]);?>

    <?= $form->field($model, 'sehir')->
    dropDownList([\yii\helpers\ArrayHelper::map(\frontend\models\Seyahattb::find()->all(),
        'yolculugunadi','yolculugunadi'),],['prompt' => '----'])?>

    <div class="form-group" style="display: inline-block">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
<form action="http://portal.kouosl/seyahat/searchform/" >
    <input class="btn btn-success" type="submit" value="bilgilerim unuttum" name="sub">
</form>
