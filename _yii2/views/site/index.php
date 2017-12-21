<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Servidores Federais';
?>
<div class="site-index">

    <div class="jumbotron">
      <div class="person-form">
          <?php $form = ActiveForm::begin([
            'action' => '/person/results'
          ]); ?>
          <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
          <?= Html::submitButton('Search', ['class' => 'btn btn-success']) ?>
          <?php ActiveForm::end(); ?>
      </div>
    </div>

    <div class="body-content">

    </div>
</div>
