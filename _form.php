<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form->field($model, 'profile')->fileInput() ?>
    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
	 <?= $form->field($model, 'job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_key')->hiddenInput(['value' => 'WcLWvFKYUJzKTBmvmBnBbOaEANuiawUY'])->label(false) ?>

    <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true]) ?>

    <!-- <?//= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?> -->
    <?= $form->field($model, 'status')->hiddenInput(['value' => 'active'])->label(false) ?>
    <?= $form->field($model, 'file[]')->fileInput(['multiple' => true]) ?>

    <?= $form->field($model, 'fk_role_id')->hiddenInput(['value'=>1])->label(false) ?>

    <?= $form->field($model, 'created_at')->hiddenInput(['value'=>date('Y-m-d')])->label(false) ?>

    <?= $form->field($model, 'updated_at')->hiddenInput(['value'=>date('Y-m-d')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
