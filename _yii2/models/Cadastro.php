<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cadastro".
 *
 * @property integer $id
 * @property integer $Servidor_id
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
 * @property string $COD_ORG_LOTACAO
 * @property string $COD_ORGSUP_LOTACAO
 * @property string $COD_UORG_EXERCICIO
 * @property string $COD_ORG_EXERCICIO
 * @property string $COD_ORGSUP_EXERCICIO
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
 *
 * @property Organization $cODORGEXERCICIO
 * @property Organization $cODORGLOTACAO
 * @property Organization $cODORGSUPEXERCICIO
 * @property Organization $cODORGSUPLOTACAO
 * @property Servidor $servidor
 * @property Uorg $cODUORGEXERCICIO
 * @property Uorg $cODUORGLOTACAO
 */
class Cadastro extends \yii\db\ActiveRecord
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
            [['servidor_id'], 'required'],
            [['servidor_id'], 'integer'],
            [['MATRICULA', 'DESCRICAO_CARGO', 'CLASSE_CARGO', 'REFERENCIA_CARGO', 'PADRAO_CARGO', 'NIVEL_CARGO', 'SIGLA_FUNCAO', 'NIVEL_FUNCAO', 'FUNCAO', 'CODIGO_ATIVIDADE', 'ATIVIDADE', 'OPCAO_PARCIAL', 'COD_ORG_LOTACAO', 'TIPO_VINCULO', 'SITUACAO_VINCULO', 'DATA_INICIO_AFASTAMENTO', 'DATA_TERMINO_AFASTAMENTO', 'REGIME_JURIDICO', 'JORNADA_DE_TRABALHO', 'DATA_INGRESSO_CARGOFUNCAO', 'DATA_NOMEACAO_CARGOFUNCAO', 'DATA_INGRESSO_ORGAO', 'DOCUMENTO_INGRESSO_SERVICOPUBLICO', 'DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO', 'DIPLOMA_INGRESSO_CARGOFUNCAO', 'DIPLOMA_INGRESSO_ORGAO', 'DIPLOMA_INGRESSO_SERVICOPUBLICO', 'UF_EXERCICIO'], 'string', 'max' => 191],
            [['COD_UORG_LOTACAO', 'COD_UORG_EXERCICIO'], 'string', 'max' => 15],
            [['COD_ORGSUP_LOTACAO', 'COD_ORG_EXERCICIO', 'COD_ORGSUP_EXERCICIO'], 'string', 'max' => 5],
            [['COD_ORG_EXERCICIO'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['COD_ORG_EXERCICIO' => 'id']],
            [['COD_ORG_LOTACAO'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['COD_ORG_LOTACAO' => 'id']],
            [['COD_ORGSUP_EXERCICIO'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['COD_ORGSUP_EXERCICIO' => 'id']],
            [['COD_ORGSUP_LOTACAO'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['COD_ORGSUP_LOTACAO' => 'id']],
            [['servidor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Servidor::className(), 'targetAttribute' => ['servidor_id' => 'id']],
            [['COD_UORG_EXERCICIO'], 'exist', 'skipOnError' => true, 'targetClass' => Uorg::className(), 'targetAttribute' => ['COD_UORG_EXERCICIO' => 'id']],
            [['COD_UORG_LOTACAO'], 'exist', 'skipOnError' => true, 'targetClass' => Uorg::className(), 'targetAttribute' => ['COD_UORG_LOTACAO' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'servidor_id' => Yii::t('app', 'Servidor ID'),
            'MATRICULA' => Yii::t('app', 'Matricula'),
            'DESCRICAO_CARGO' => Yii::t('app', 'Descricao  Cargo'),
            'CLASSE_CARGO' => Yii::t('app', 'Classe  Cargo'),
            'REFERENCIA_CARGO' => Yii::t('app', 'Referencia  Cargo'),
            'PADRAO_CARGO' => Yii::t('app', 'Padrao  Cargo'),
            'NIVEL_CARGO' => Yii::t('app', 'Nivel  Cargo'),
            'SIGLA_FUNCAO' => Yii::t('app', 'Sigla  Funcao'),
            'NIVEL_FUNCAO' => Yii::t('app', 'Nivel  Funcao'),
            'FUNCAO' => Yii::t('app', 'Funcao'),
            'CODIGO_ATIVIDADE' => Yii::t('app', 'Codigo  Atividade'),
            'ATIVIDADE' => Yii::t('app', 'Atividade'),
            'OPCAO_PARCIAL' => Yii::t('app', 'Opcao  Parcial'),
            'COD_UORG_LOTACAO' => Yii::t('app', 'Cod  Uorg  Lotacao'),
            'COD_ORG_LOTACAO' => Yii::t('app', 'Cod  Org  Lotacao'),
            'COD_ORGSUP_LOTACAO' => Yii::t('app', 'Cod  Orgsup  Lotacao'),
            'COD_UORG_EXERCICIO' => Yii::t('app', 'Cod  Uorg  Exercicio'),
            'COD_ORG_EXERCICIO' => Yii::t('app', 'Cod  Org  Exercicio'),
            'COD_ORGSUP_EXERCICIO' => Yii::t('app', 'Cod  Orgsup  Exercicio'),
            'TIPO_VINCULO' => Yii::t('app', 'Tipo  Vinculo'),
            'SITUACAO_VINCULO' => Yii::t('app', 'Situacao  Vinculo'),
            'DATA_INICIO_AFASTAMENTO' => Yii::t('app', 'Data  Inicio  Afastamento'),
            'DATA_TERMINO_AFASTAMENTO' => Yii::t('app', 'Data  Termino  Afastamento'),
            'REGIME_JURIDICO' => Yii::t('app', 'Regime  Juridico'),
            'JORNADA_DE_TRABALHO' => Yii::t('app', 'Jornada  De  Trabalho'),
            'DATA_INGRESSO_CARGOFUNCAO' => Yii::t('app', 'Data  Ingresso  Cargofuncao'),
            'DATA_NOMEACAO_CARGOFUNCAO' => Yii::t('app', 'Data  Nomeacao  Cargofuncao'),
            'DATA_INGRESSO_ORGAO' => Yii::t('app', 'Data  Ingresso  Orgao'),
            'DOCUMENTO_INGRESSO_SERVICOPUBLICO' => Yii::t('app', 'Documento  Ingresso  Servicopublico'),
            'DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO' => Yii::t('app', 'Data  Diploma  Ingresso  Servicopublico'),
            'DIPLOMA_INGRESSO_CARGOFUNCAO' => Yii::t('app', 'Diploma  Ingresso  Cargofuncao'),
            'DIPLOMA_INGRESSO_ORGAO' => Yii::t('app', 'Diploma  Ingresso  Orgao'),
            'DIPLOMA_INGRESSO_SERVICOPUBLICO' => Yii::t('app', 'Diploma  Ingresso  Servicopublico'),
            'UF_EXERCICIO' => Yii::t('app', 'Uf  Exercicio'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODORGEXERCICIO()
    {
        return $this->hasOne(Organization::className(), ['id' => 'COD_ORG_EXERCICIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODORGLOTACAO()
    {
        return $this->hasOne(Organization::className(), ['id' => 'COD_ORG_LOTACAO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODORGSUPEXERCICIO()
    {
        return $this->hasOne(Organization::className(), ['id' => 'COD_ORGSUP_EXERCICIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODORGSUPLOTACAO()
    {
        return $this->hasOne(Organization::className(), ['id' => 'COD_ORGSUP_LOTACAO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServidor()
    {
        return $this->hasOne(Servidor::className(), ['id' => 'servidor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODUORGEXERCICIO()
    {
        return $this->hasOne(Uorg::className(), ['id' => 'COD_UORG_EXERCICIO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODUORGLOTACAO()
    {
        return $this->hasOne(Uorg::className(), ['id' => 'COD_UORG_LOTACAO']);
    }
}
