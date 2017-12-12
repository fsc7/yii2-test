<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cadastro".
 *
 * @property integer $id
 * @property integer $Id_SERVIDOR_PORTAL
 * @property string $NOME
 * @property string $CPF
 * @property string $MATRICULA
 * @property string $DESCRICAO_CARGO
 * @property string $CLASSE_CARGO
 * @property string $REFERENCIA_CARGO
 * @property string $PADRAO_CARGO
 * @property string $NIVEL_CARGO
 * @property string $SIGLA_FUNCAO
 * @property string $NIVEL_FUNCAO
 * @property string $FUNCAO
 * @property string $CODIGO_ATIVIDADE
 * @property string $ATIVIDADE
 * @property string $OPCAO_PARCIAL
 * @property string $COD_UORG_LOTACAO
 * @property string $UORG_LOTACAO
 * @property string $COD_ORG_LOTACAO
 * @property string $ORG_LOTACAO
 * @property string $COD_ORGSUP_LOTACAO
 * @property string $ORGSUP_LOTACAO
 * @property string $COD_UORG_EXERCICIO
 * @property string $UORG_EXERCICIO
 * @property string $COD_ORG_EXERCICIO
 * @property string $ORG_EXERCICIO
 * @property string $COD_ORGSUP_EXERCICIO
 * @property string $ORGSUP_EXERCICIO
 * @property string $TIPO_VINCULO
 * @property string $SITUACAO_VINCULO
 * @property string $DATA_INICIO_AFASTAMENTO
 * @property string $DATA_TERMINO_AFASTAMENTO
 * @property string $REGIME_JURIDICO
 * @property string $JORNADA_DE_TRABALHO
 * @property string $DATA_INGRESSO_CARGOFUNCAO
 * @property string $DATA_NOMEACAO_CARGOFUNCAO
 * @property string $DATA_INGRESSO_ORGAO
 * @property string $DOCUMENTO_INGRESSO_SERVICOPUBLICO
 * @property string $DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO
 * @property string $DIPLOMA_INGRESSO_CARGOFUNCAO
 * @property string $DIPLOMA_INGRESSO_ORGAO
 * @property string $DIPLOMA_INGRESSO_SERVICOPUBLICO
 * @property string $UF_EXERCICIO
 */
class Servidor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cadastro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_SERVIDOR_PORTAL'], 'integer'],
            [['NOME', 'CPF', 'MATRICULA', 'DESCRICAO_CARGO', 'CLASSE_CARGO', 'REFERENCIA_CARGO', 'PADRAO_CARGO', 'NIVEL_CARGO', 'SIGLA_FUNCAO', 'NIVEL_FUNCAO', 'FUNCAO', 'CODIGO_ATIVIDADE', 'ATIVIDADE', 'OPCAO_PARCIAL', 'COD_UORG_LOTACAO', 'UORG_LOTACAO', 'COD_ORG_LOTACAO', 'ORG_LOTACAO', 'COD_ORGSUP_LOTACAO', 'ORGSUP_LOTACAO', 'COD_UORG_EXERCICIO', 'UORG_EXERCICIO', 'COD_ORG_EXERCICIO', 'ORG_EXERCICIO', 'COD_ORGSUP_EXERCICIO', 'ORGSUP_EXERCICIO', 'TIPO_VINCULO', 'SITUACAO_VINCULO', 'DATA_INICIO_AFASTAMENTO', 'DATA_TERMINO_AFASTAMENTO', 'REGIME_JURIDICO', 'JORNADA_DE_TRABALHO', 'DATA_INGRESSO_CARGOFUNCAO', 'DATA_NOMEACAO_CARGOFUNCAO', 'DATA_INGRESSO_ORGAO', 'DOCUMENTO_INGRESSO_SERVICOPUBLICO', 'DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO', 'DIPLOMA_INGRESSO_CARGOFUNCAO', 'DIPLOMA_INGRESSO_ORGAO', 'DIPLOMA_INGRESSO_SERVICOPUBLICO', 'UF_EXERCICIO'], 'string', 'max' => 191],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Id_SERVIDOR_PORTAL' => 'Id  Servidor  Portal',
            'NOME' => 'Nome',
            'CPF' => 'Cpf',
            'MATRICULA' => 'Matricula',
            'DESCRICAO_CARGO' => 'Descricao  Cargo',
            'CLASSE_CARGO' => 'Classe  Cargo',
            'REFERENCIA_CARGO' => 'Referencia  Cargo',
            'PADRAO_CARGO' => 'Padrao  Cargo',
            'NIVEL_CARGO' => 'Nivel  Cargo',
            'SIGLA_FUNCAO' => 'Sigla  Funcao',
            'NIVEL_FUNCAO' => 'Nivel  Funcao',
            'FUNCAO' => 'Funcao',
            'CODIGO_ATIVIDADE' => 'Codigo  Atividade',
            'ATIVIDADE' => 'Atividade',
            'OPCAO_PARCIAL' => 'Opcao  Parcial',
            'COD_UORG_LOTACAO' => 'Cod  Uorg  Lotacao',
            'UORG_LOTACAO' => 'Uorg  Lotacao',
            'COD_ORG_LOTACAO' => 'Cod  Org  Lotacao',
            'ORG_LOTACAO' => 'Org  Lotacao',
            'COD_ORGSUP_LOTACAO' => 'Cod  Orgsup  Lotacao',
            'ORGSUP_LOTACAO' => 'Orgsup  Lotacao',
            'COD_UORG_EXERCICIO' => 'Cod  Uorg  Exercicio',
            'UORG_EXERCICIO' => 'Uorg  Exercicio',
            'COD_ORG_EXERCICIO' => 'Cod  Org  Exercicio',
            'ORG_EXERCICIO' => 'Org  Exercicio',
            'COD_ORGSUP_EXERCICIO' => 'Cod  Orgsup  Exercicio',
            'ORGSUP_EXERCICIO' => 'Orgsup  Exercicio',
            'TIPO_VINCULO' => 'Tipo  Vinculo',
            'SITUACAO_VINCULO' => 'Situacao  Vinculo',
            'DATA_INICIO_AFASTAMENTO' => 'Data  Inicio  Afastamento',
            'DATA_TERMINO_AFASTAMENTO' => 'Data  Termino  Afastamento',
            'REGIME_JURIDICO' => 'Regime  Juridico',
            'JORNADA_DE_TRABALHO' => 'Jornada  De  Trabalho',
            'DATA_INGRESSO_CARGOFUNCAO' => 'Data  Ingresso  Cargofuncao',
            'DATA_NOMEACAO_CARGOFUNCAO' => 'Data  Nomeacao  Cargofuncao',
            'DATA_INGRESSO_ORGAO' => 'Data  Ingresso  Orgao',
            'DOCUMENTO_INGRESSO_SERVICOPUBLICO' => 'Documento  Ingresso  Servicopublico',
            'DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO' => 'Data  Diploma  Ingresso  Servicopublico',
            'DIPLOMA_INGRESSO_CARGOFUNCAO' => 'Diploma  Ingresso  Cargofuncao',
            'DIPLOMA_INGRESSO_ORGAO' => 'Diploma  Ingresso  Orgao',
            'DIPLOMA_INGRESSO_SERVICOPUBLICO' => 'Diploma  Ingresso  Servicopublico',
            'UF_EXERCICIO' => 'Uf  Exercicio',
        ];
    }
}
