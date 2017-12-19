<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Servidores Federais';
?>
<div class="site-index">

    <div class="jumbotron">
      <div class="person-form">
          <?php $form = ActiveForm::begin(); ?>
          <?//= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
          <?//= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <?php ActiveForm::end(); ?>
      </div>
    </div>

    <div class="body-content">

    </div>
</div>
