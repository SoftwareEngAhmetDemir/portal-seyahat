<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SeyahattbSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seyahattbs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seyahattb-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Seyahattb', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'yolculugunadi',
            'iletisim',
            'gizecekyerler',
            'para',
            //'sure',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
