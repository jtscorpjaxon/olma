<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Olmalar */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="row">
    <div class="col-md-12">
        <div class="box box-default">
            <div class="box-header">
                <h3 class="box-title">Форма</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <?php $form = ActiveForm::begin(); ?>
            <div class="box-body">


    <?= $form->field($model, 'rang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unib')->textInput() ?>

    <?= $form->field($model, 'uzilish')->textInput() ?>

    <?= $form->field($model, 'holati')->dropDownList([ 'Daraxtda' => 'Daraxtda', 'tushdi' => 'Tushdi', 'chirigan' => 'Chirigan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'yeyilgani')->textInput() ?>


            </div>
            <div class="box-footer">
                <?= Html::submitButton($model->isNewRecord ? 'Qo\'shish'                : 'Yangilash', ['class' => $model->isNewRecord ? 'btn btn-success' :
                    'btn btn-primary']) ?>
            </div>

    <?php ActiveForm::end(); ?>

