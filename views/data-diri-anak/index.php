<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataDiriAnakSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Diri Anaks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-diri-anak-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Data Diri Anak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_data_diri_anak',
            'nama_lengkap',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            // 'pendidikan_sd',
            // 'pendidikan_smp',
            // 'pendidikan_sma',
            // 'alamat:ntext',
            // 'nama_ayah',
            // 'tgl_lahir_ayah',
            // 'nama_ibu',
            // 'tgl_lahir_ibu',
            // 'no_kontak',
            // 'keterangan:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
