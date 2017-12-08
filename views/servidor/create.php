<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Servidor */

$this->title = 'Create Servidor';
$this->params['breadcrumbs'][] = ['label' => 'Servidors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servidor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
