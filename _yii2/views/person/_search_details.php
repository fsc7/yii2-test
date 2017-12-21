<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Person */

// $this->title = $model->name;
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'People'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'formattedName',
            'cpf',
            'lastPayment'
        ],
    ]) ?>

</div>
