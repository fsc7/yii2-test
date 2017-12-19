<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Remuneracao */

$this->title = Yii::t('app', 'Create Remuneracao');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Remuneracaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remuneracao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
