<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RemuneracaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="remuneracao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ANO') ?>

    <?= $form->field($model, 'MES') ?>

    <?= $form->field($model, 'ID_SERVIDOR_PORTAL') ?>

    <?= $form->field($model, 'CPF') ?>

    <?php // echo $form->field($model, 'NOME') ?>

    <?php // echo $form->field($model, 'REMUNERACAO_BASICA_BRUTA') ?>

    <?php // echo $form->field($model, 'REMUNERACAO_BASICA_BRUTA_USD') ?>

    <?php // echo $form->field($model, 'ABATE_TETO') ?>

    <?php // echo $form->field($model, 'ABATE_TETO_USD') ?>

    <?php // echo $form->field($model, 'GRATIFICACAO_NATALINA') ?>

    <?php // echo $form->field($model, 'GRATIFICACAO_NATALINA_USD') ?>

    <?php // echo $form->field($model, 'ABATE_TETO_GRATIFICACAO_NATALINA') ?>

    <?php // echo $form->field($model, 'ABATE_TETO_GRATIFICACAO_NATALINA_USD') ?>

    <?php // echo $form->field($model, 'FERIAS') ?>

    <?php // echo $form->field($model, 'FERIAS_USD') ?>

    <?php // echo $form->field($model, 'OUTRAS_REMUNERACOES_EVENTUAIS') ?>

    <?php // echo $form->field($model, 'OUTRAS_REMUNERACOES_EVENTUAIS_USD') ?>

    <?php // echo $form->field($model, 'IRRF') ?>

    <?php // echo $form->field($model, 'IRRF_USD') ?>

    <?php // echo $form->field($model, 'PSS_RPGS') ?>

    <?php // echo $form->field($model, 'PSS_RPGS_USD') ?>

    <?php // echo $form->field($model, 'PENSAO_MILITAR') ?>

    <?php // echo $form->field($model, 'PENSAO_MILITAR_USD') ?>

    <?php // echo $form->field($model, 'FUNDO_DE_SAUDE') ?>

    <?php // echo $form->field($model, 'FUNDO_DE_SAUDE_USD') ?>

    <?php // echo $form->field($model, 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL') ?>

    <?php // echo $form->field($model, 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL_USD') ?>

    <?php // echo $form->field($model, 'DEMAIS_DEDUCOES') ?>

    <?php // echo $form->field($model, 'DEMAIS_DEDUCOES_USD') ?>

    <?php // echo $form->field($model, 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS') ?>

    <?php // echo $form->field($model, 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS_USD') ?>

    <?php // echo $form->field($model, 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL') ?>

    <?php // echo $form->field($model, 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL_USD') ?>

    <?php // echo $form->field($model, 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR') ?>

    <?php // echo $form->field($model, 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR_USD') ?>

    <?php // echo $form->field($model, 'TOTAL_DE_VERBAS_INDENIZATORIAS') ?>

    <?php // echo $form->field($model, 'TOTAL_DE_VERBAS_INDENIZATORIAS_USD') ?>

    <?php // echo $form->field($model, 'TOTAL_DE_HONORARIOS_JETONS') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
