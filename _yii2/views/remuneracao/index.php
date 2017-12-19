<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RemuneracaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Remuneracaos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remuneracao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Remuneracao'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'person_id',
            'ANO',
            'MES',
            'REMUNERACAO_BASICA_BRUTA',
            // 'REMUNERACAO_BASICA_BRUTA_USD',
            // 'ABATE_TETO',
            // 'ABATE_TETO_USD',
            // 'GRATIFICACAO_NATALINA',
            // 'GRATIFICACAO_NATALINA_USD',
            // 'ABATE_TETO_GRATIFICACAO_NATALINA',
            // 'ABATE_TETO_GRATIFICACAO_NATALINA_USD',
            // 'FERIAS',
            // 'FERIAS_USD',
            // 'OUTRAS_REMUNERACOES_EVENTUAIS',
            // 'OUTRAS_REMUNERACOES_EVENTUAIS_USD',
            // 'IRRF',
            // 'IRRF_USD',
            // 'PSS_RPGS',
            // 'PSS_RPGS_USD',
            // 'PENSAO_MILITAR',
            // 'PENSAO_MILITAR_USD',
            // 'FUNDO_DE_SAUDE',
            // 'FUNDO_DE_SAUDE_USD',
            // 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL',
            // 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL_USD',
            // 'DEMAIS_DEDUCOES',
            // 'DEMAIS_DEDUCOES_USD',
            // 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS',
            // 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS_USD',
            // 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL',
            // 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL_USD',
            // 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR',
            // 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR_USD',
            // 'TOTAL_DE_VERBAS_INDENIZATORIAS',
            // 'TOTAL_DE_VERBAS_INDENIZATORIAS_USD',
            // 'TOTAL_DE_HONORARIOS_JETONS',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
