<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataDiriAnak */

$this->title = $model->id_data_diri_anak;
$this->params['breadcrumbs'][] = ['label' => 'Data Diri Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-diri-anak-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_data_diri_anak], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_data_diri_anak], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_data_diri_anak',
            'nama_lengkap',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'pendidikan_sd',
            'pendidikan_smp',
            'pendidikan_sma',
            'alamat:ntext',
            'nama_ayah',
            'tgl_lahir_ayah',
            'nama_ibu',
            'tgl_lahir_ibu',
            'no_kontak',
            'keterangan:ntext',
        ],
    ]) ?>

</div>
