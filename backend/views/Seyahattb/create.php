<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Seyahattb */

$this->title = 'Create Seyahattb';
$this->params['breadcrumbs'][] = ['label' => 'Seyahattbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seyahattb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
