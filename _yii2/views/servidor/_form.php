<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Servidor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servidor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_SERVIDOR_PORTAL')->textInput() ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CPF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MATRICULA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESCRICAO_CARGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLASSE_CARGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REFERENCIA_CARGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PADRAO_CARGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIVEL_CARGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SIGLA_FUNCAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIVEL_FUNCAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FUNCAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CODIGO_ATIVIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ATIVIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OPCAO_PARCIAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COD_UORG_LOTACAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UORG_LOTACAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COD_ORG_LOTACAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ORG_LOTACAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COD_ORGSUP_LOTACAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ORGSUP_LOTACAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COD_UORG_EXERCICIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UORG_EXERCICIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COD_ORG_EXERCICIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ORG_EXERCICIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COD_ORGSUP_EXERCICIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ORGSUP_EXERCICIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TIPO_VINCULO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SITUACAO_VINCULO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_INICIO_AFASTAMENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_TERMINO_AFASTAMENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REGIME_JURIDICO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JORNADA_DE_TRABALHO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_INGRESSO_CARGOFUNCAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_NOMEACAO_CARGOFUNCAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_INGRESSO_ORGAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DOCUMENTO_INGRESSO_SERVICOPUBLICO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIPLOMA_INGRESSO_CARGOFUNCAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIPLOMA_INGRESSO_ORGAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIPLOMA_INGRESSO_SERVICOPUBLICO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UF_EXERCICIO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
