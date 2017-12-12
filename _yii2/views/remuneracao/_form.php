<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Remuneracao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="remuneracao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ANO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_SERVIDOR_PORTAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CPF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REMUNERACAO_BASICA_BRUTA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REMUNERACAO_BASICA_BRUTA_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ABATE_TETO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ABATE_TETO_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GRATIFICACAO_NATALINA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GRATIFICACAO_NATALINA_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ABATE_TETO_GRATIFICACAO_NATALINA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ABATE_TETO_GRATIFICACAO_NATALINA_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FERIAS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FERIAS_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OUTRAS_REMUNERACOES_EVENTUAIS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OUTRAS_REMUNERACOES_EVENTUAIS_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IRRF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IRRF_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PSS_RPGS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PSS_RPGS_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PENSAO_MILITAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PENSAO_MILITAR_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FUNDO_DE_SAUDE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FUNDO_DE_SAUDE_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEMAIS_DEDUCOES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEMAIS_DEDUCOES_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TOTAL_DE_VERBAS_INDENIZATORIAS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TOTAL_DE_VERBAS_INDENIZATORIAS_USD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TOTAL_DE_HONORARIOS_JETONS')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
