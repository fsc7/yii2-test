<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cadastro */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cadastros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cadastro-view">

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
            'COD_ORG_LOTACAO',
            'COD_ORGSUP_LOTACAO',
            'COD_UORG_EXERCICIO',
            'COD_ORG_EXERCICIO',
            'COD_ORGSUP_EXERCICIO',
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
