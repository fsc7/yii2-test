<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Servidor */

$this->title = $model->formattedName;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Servidor'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servidor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cpf',
            'lastPayment'
        ],
    ]) ?>

</div>
