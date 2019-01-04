<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Seyahat */

//$this->title = 'Güncelleme Seyahat: ' . $model->sid;
//$this->params['breadcrumbs'][] = ['label' => 'Seyahat', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->sid, 'url' => ['view', 'id' => $model->sid]];
//$this->params['breadcrumbs'][] = 'Güncelleme';
?>
<h1>Güncelleme</h1>
<div class="seyahat-update">

   <!-- <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
