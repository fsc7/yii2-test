<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Remuneracao */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Remuneracaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remuneracao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'servidor_id',
            'ANO',
            'MES',
            'REMUNERACAO_BASICA_BRUTA',
            'REMUNERACAO_BASICA_BRUTA_USD',
            'ABATE_TETO',
            'ABATE_TETO_USD',
            'GRATIFICACAO_NATALINA',
            'GRATIFICACAO_NATALINA_USD',
            'ABATE_TETO_GRATIFICACAO_NATALINA',
            'ABATE_TETO_GRATIFICACAO_NATALINA_USD',
            'FERIAS',
            'FERIAS_USD',
            'OUTRAS_REMUNERACOES_EVENTUAIS',
            'OUTRAS_REMUNERACOES_EVENTUAIS_USD',
            'IRRF',
            'IRRF_USD',
            'PSS_RPGS',
            'PSS_RPGS_USD',
            'PENSAO_MILITAR',
            'PENSAO_MILITAR_USD',
            'FUNDO_DE_SAUDE',
            'FUNDO_DE_SAUDE_USD',
            'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL',
            'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL_USD',
            'DEMAIS_DEDUCOES',
            'DEMAIS_DEDUCOES_USD',
            'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS',
            'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS_USD',
            'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL',
            'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL_USD',
            'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR',
            'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR_USD',
            'TOTAL_DE_VERBAS_INDENIZATORIAS',
            'TOTAL_DE_VERBAS_INDENIZATORIAS_USD',
            'TOTAL_DE_HONORARIOS_JETONS',
        ],
    ]) ?>

</div>
