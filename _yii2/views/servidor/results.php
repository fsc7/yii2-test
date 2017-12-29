<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ServidorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Servidores');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servidor-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_search_details',
        // 'summary' => 'Summary'
    ]);
    ?>
<?php Pjax::end(); ?>
</div>
