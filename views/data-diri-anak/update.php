<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataDiriAnak */

$this->title = 'Update Data Diri Anak: ' . ' ' . $model->id_data_diri_anak;
$this->params['breadcrumbs'][] = ['label' => 'Data Diri Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_data_diri_anak, 'url' => ['view', 'id' => $model->id_data_diri_anak]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-diri-anak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
