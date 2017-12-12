<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Servidor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Servidors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servidor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Id_SERVIDOR_PORTAL',
            'NOME',
            'CPF',
            'MATRICULA',
            'DESCRICAO_CARGO',
            'CLASSE_CARGO',
            'REFERENCIA_CARGO',
            'PADRAO_CARGO',
            'NIVEL_CARGO',
            'SIGLA_FUNCAO',
            'NIVEL_FUNCAO',
            'FUNCAO',
            'CODIGO_ATIVIDADE',
            'ATIVIDADE',
            'OPCAO_PARCIAL',
            'COD_UORG_LOTACAO',
            'UORG_LOTACAO',
            'COD_ORG_LOTACAO',
            'ORG_LOTACAO',
            'COD_ORGSUP_LOTACAO',
            'ORGSUP_LOTACAO',
            'COD_UORG_EXERCICIO',
            'UORG_EXERCICIO',
            'COD_ORG_EXERCICIO',
            'ORG_EXERCICIO',
            'COD_ORGSUP_EXERCICIO',
            'ORGSUP_EXERCICIO',
            'TIPO_VINCULO',
            'SITUACAO_VINCULO',
            'DATA_INICIO_AFASTAMENTO',
            'DATA_TERMINO_AFASTAMENTO',
            'REGIME_JURIDICO',
            'JORNADA_DE_TRABALHO',
            'DATA_INGRESSO_CARGOFUNCAO',
            'DATA_NOMEACAO_CARGOFUNCAO',
            'DATA_INGRESSO_ORGAO',
            'DOCUMENTO_INGRESSO_SERVICOPUBLICO',
            'DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO',
            'DIPLOMA_INGRESSO_CARGOFUNCAO',
            'DIPLOMA_INGRESSO_ORGAO',
            'DIPLOMA_INGRESSO_SERVICOPUBLICO',
            'UF_EXERCICIO',
        ],
    ]) ?>

</div>
