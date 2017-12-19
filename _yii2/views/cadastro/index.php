<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CadastroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Cadastros');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cadastro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Cadastro'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'person_id',
            'MATRICULA',
            'DESCRICAO_CARGO',
            'CLASSE_CARGO',
            // 'REFERENCIA_CARGO',
            // 'PADRAO_CARGO',
            // 'NIVEL_CARGO',
            // 'SIGLA_FUNCAO',
            // 'NIVEL_FUNCAO',
            // 'FUNCAO',
            // 'CODIGO_ATIVIDADE',
            // 'ATIVIDADE',
            // 'OPCAO_PARCIAL',
            // 'COD_UORG_LOTACAO',
            // 'COD_ORG_LOTACAO',
            // 'COD_ORGSUP_LOTACAO',
            // 'COD_UORG_EXERCICIO',
            // 'COD_ORG_EXERCICIO',
            // 'COD_ORGSUP_EXERCICIO',
            // 'TIPO_VINCULO',
            // 'SITUACAO_VINCULO',
            // 'DATA_INICIO_AFASTAMENTO',
            // 'DATA_TERMINO_AFASTAMENTO',
            // 'REGIME_JURIDICO',
            // 'JORNADA_DE_TRABALHO',
            // 'DATA_INGRESSO_CARGOFUNCAO',
            // 'DATA_NOMEACAO_CARGOFUNCAO',
            // 'DATA_INGRESSO_ORGAO',
            // 'DOCUMENTO_INGRESSO_SERVICOPUBLICO',
            // 'DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO',
            // 'DIPLOMA_INGRESSO_CARGOFUNCAO',
            // 'DIPLOMA_INGRESSO_ORGAO',
            // 'DIPLOMA_INGRESSO_SERVICOPUBLICO',
            // 'UF_EXERCICIO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
