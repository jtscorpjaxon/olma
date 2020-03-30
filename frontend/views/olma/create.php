<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Olmalar */

$this->title = ' Olmani qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Olmalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="olmalar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
