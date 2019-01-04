<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Seyahat */

$this->title = 'Create Seyahat';
$this->params['breadcrumbs'][] = ['label' => 'Seyahats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seyahat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
