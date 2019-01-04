<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Seyahat */

//$this->title = 'hello';
//$this->params['breadcrumbs'][] = ['label' => 'Seyahat', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="seyahat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelleme', ['update', 'id' => $model->sid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Silme', ['delete', 'id' => $model->sid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'kayıt silmek ister misiniz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'sid',
            'adsoyad',
            'cinsiyet',
            'gidecektarih',
            'sehir',
        ],
    ]) ?>

</div>
<?php

?>

<button class="btn btn-primary"onclick="myFunction()">bilgilerinizi yazdırma işlemi</button>

<script>
    function myFunction() {
        window.print();
    }
</script>
