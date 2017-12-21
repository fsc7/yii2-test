<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Servidores');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_search_details',
    ]);
    ?>
<?php Pjax::end(); ?>
</div>