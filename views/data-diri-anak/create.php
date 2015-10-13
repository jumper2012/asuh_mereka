<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DataDiriAnak */

$this->title = 'Create Data Diri Anak';
$this->params['breadcrumbs'][] = ['label' => 'Data Diri Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-diri-anak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
