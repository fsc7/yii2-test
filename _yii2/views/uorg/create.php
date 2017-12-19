<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Uorg */

$this->title = Yii::t('app', 'Create Uorg');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Uorgs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uorg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
