<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Seyahat */

$this->title = 'Update Seyahat: ' . $model->sid;
$this->params['breadcrumbs'][] = ['label' => 'Seyahats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sid, 'url' => ['view', 'id' => $model->sid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seyahat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
