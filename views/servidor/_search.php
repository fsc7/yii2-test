<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServidorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servidor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Id_SERVIDOR_PORTAL') ?>

    <?= $form->field($model, 'NOME') ?>

    <?= $form->field($model, 'CPF') ?>

    <?= $form->field($model, 'MATRICULA') ?>

    <?php // echo $form->field($model, 'DESCRICAO_CARGO') ?>

    <?php // echo $form->field($model, 'CLASSE_CARGO') ?>

    <?php // echo $form->field($model, 'REFERENCIA_CARGO') ?>

    <?php // echo $form->field($model, 'PADRAO_CARGO') ?>

    <?php // echo $form->field($model, 'NIVEL_CARGO') ?>

    <?php // echo $form->field($model, 'SIGLA_FUNCAO') ?>

    <?php // echo $form->field($model, 'NIVEL_FUNCAO') ?>

    <?php // echo $form->field($model, 'FUNCAO') ?>

    <?php // echo $form->field($model, 'CODIGO_ATIVIDADE') ?>

    <?php // echo $form->field($model, 'ATIVIDADE') ?>

    <?php // echo $form->field($model, 'OPCAO_PARCIAL') ?>

    <?php // echo $form->field($model, 'COD_UORG_LOTACAO') ?>

    <?php // echo $form->field($model, 'UORG_LOTACAO') ?>

    <?php // echo $form->field($model, 'COD_ORG_LOTACAO') ?>

    <?php // echo $form->field($model, 'ORG_LOTACAO') ?>

    <?php // echo $form->field($model, 'COD_ORGSUP_LOTACAO') ?>

    <?php // echo $form->field($model, 'ORGSUP_LOTACAO') ?>

    <?php // echo $form->field($model, 'COD_UORG_EXERCICIO') ?>

    <?php // echo $form->field($model, 'UORG_EXERCICIO') ?>

    <?php // echo $form->field($model, 'COD_ORG_EXERCICIO') ?>

    <?php // echo $form->field($model, 'ORG_EXERCICIO') ?>

    <?php // echo $form->field($model, 'COD_ORGSUP_EXERCICIO') ?>

    <?php // echo $form->field($model, 'ORGSUP_EXERCICIO') ?>

    <?php // echo $form->field($model, 'TIPO_VINCULO') ?>

    <?php // echo $form->field($model, 'SITUACAO_VINCULO') ?>

    <?php // echo $form->field($model, 'DATA_INICIO_AFASTAMENTO') ?>

    <?php // echo $form->field($model, 'DATA_TERMINO_AFASTAMENTO') ?>

    <?php // echo $form->field($model, 'REGIME_JURIDICO') ?>

    <?php // echo $form->field($model, 'JORNADA_DE_TRABALHO') ?>

    <?php // echo $form->field($model, 'DATA_INGRESSO_CARGOFUNCAO') ?>

    <?php // echo $form->field($model, 'DATA_NOMEACAO_CARGOFUNCAO') ?>

    <?php // echo $form->field($model, 'DATA_INGRESSO_ORGAO') ?>

    <?php // echo $form->field($model, 'DOCUMENTO_INGRESSO_SERVICOPUBLICO') ?>

    <?php // echo $form->field($model, 'DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO') ?>

    <?php // echo $form->field($model, 'DIPLOMA_INGRESSO_CARGOFUNCAO') ?>

    <?php // echo $form->field($model, 'DIPLOMA_INGRESSO_ORGAO') ?>

    <?php // echo $form->field($model, 'DIPLOMA_INGRESSO_SERVICOPUBLICO') ?>

    <?php // echo $form->field($model, 'UF_EXERCICIO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
