<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "remuneracao".
 *
 * @property integer $id
 * @property string $ANO
 * @property string $MES
 * @property string $ID_SERVIDOR_PORTAL
 * @property string $CPF
 * @property string $NOME
 * @property string $REMUNERACAO_BASICA_BRUTA
 * @property string $REMUNERACAO_BASICA_BRUTA_USD
 * @property string $ABATE_TETO
 * @property string $ABATE_TETO_USD
 * @property string $GRATIFICACAO_NATALINA
 * @property string $GRATIFICACAO_NATALINA_USD
 * @property string $ABATE_TETO_GRATIFICACAO_NATALINA
 * @property string $ABATE_TETO_GRATIFICACAO_NATALINA_USD
 * @property string $FERIAS
 * @property string $FERIAS_USD
 * @property string $OUTRAS_REMUNERACOES_EVENTUAIS
 * @property string $OUTRAS_REMUNERACOES_EVENTUAIS_USD
 * @property string $IRRF
 * @property string $IRRF_USD
 * @property string $PSS_RPGS
 * @property string $PSS_RPGS_USD
 * @property string $PENSAO_MILITAR
 * @property string $PENSAO_MILITAR_USD
 * @property string $FUNDO_DE_SAUDE
 * @property string $FUNDO_DE_SAUDE_USD
 * @property string $TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL
 * @property string $TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL_USD
 * @property string $DEMAIS_DEDUCOES
 * @property string $DEMAIS_DEDUCOES_USD
 * @property string $REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS
 * @property string $REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS_USD
 * @property string $VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL
 * @property string $VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL_USD
 * @property string $VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR
 * @property string $VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR_USD
 * @property string $TOTAL_DE_VERBAS_INDENIZATORIAS
 * @property string $TOTAL_DE_VERBAS_INDENIZATORIAS_USD
 * @property string $TOTAL_DE_HONORARIOS_JETONS
 */
class Remuneracao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'remuneracao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ANO', 'MES', 'ID_SERVIDOR_PORTAL', 'CPF', 'NOME', 'REMUNERACAO_BASICA_BRUTA', 'REMUNERACAO_BASICA_BRUTA_USD', 'ABATE_TETO', 'ABATE_TETO_USD', 'GRATIFICACAO_NATALINA', 'GRATIFICACAO_NATALINA_USD', 'ABATE_TETO_GRATIFICACAO_NATALINA', 'ABATE_TETO_GRATIFICACAO_NATALINA_USD', 'FERIAS', 'FERIAS_USD', 'OUTRAS_REMUNERACOES_EVENTUAIS', 'OUTRAS_REMUNERACOES_EVENTUAIS_USD', 'IRRF', 'IRRF_USD', 'PSS_RPGS', 'PSS_RPGS_USD', 'PENSAO_MILITAR', 'PENSAO_MILITAR_USD', 'FUNDO_DE_SAUDE', 'FUNDO_DE_SAUDE_USD', 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL', 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL_USD', 'DEMAIS_DEDUCOES', 'DEMAIS_DEDUCOES_USD', 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS', 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS_USD', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL_USD', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR_USD', 'TOTAL_DE_VERBAS_INDENIZATORIAS', 'TOTAL_DE_VERBAS_INDENIZATORIAS_USD', 'TOTAL_DE_HONORARIOS_JETONS'], 'string', 'max' => 191],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ANO' => 'Ano',
            'MES' => 'Mes',
            'ID_SERVIDOR_PORTAL' => 'Id  Servidor  Portal',
            'CPF' => 'Cpf',
            'NOME' => 'Nome',
            'REMUNERACAO_BASICA_BRUTA' => 'Remuneracao  Basica  Bruta',
            'REMUNERACAO_BASICA_BRUTA_USD' => 'Remuneracao  Basica  Bruta  Usd',
            'ABATE_TETO' => 'Abate  Teto',
            'ABATE_TETO_USD' => 'Abate  Teto  Usd',
            'GRATIFICACAO_NATALINA' => 'Gratificacao  Natalina',
            'GRATIFICACAO_NATALINA_USD' => 'Gratificacao  Natalina  Usd',
            'ABATE_TETO_GRATIFICACAO_NATALINA' => 'Abate  Teto  Gratificacao  Natalina',
            'ABATE_TETO_GRATIFICACAO_NATALINA_USD' => 'Abate  Teto  Gratificacao  Natalina  Usd',
            'FERIAS' => 'Ferias',
            'FERIAS_USD' => 'Ferias  Usd',
            'OUTRAS_REMUNERACOES_EVENTUAIS' => 'Outras  Remuneracoes  Eventuais',
            'OUTRAS_REMUNERACOES_EVENTUAIS_USD' => 'Outras  Remuneracoes  Eventuais  Usd',
            'IRRF' => 'Irrf',
            'IRRF_USD' => 'Irrf  Usd',
            'PSS_RPGS' => 'Pss  Rpgs',
            'PSS_RPGS_USD' => 'Pss  Rpgs  Usd',
            'PENSAO_MILITAR' => 'Pensao  Militar',
            'PENSAO_MILITAR_USD' => 'Pensao  Militar  Usd',
            'FUNDO_DE_SAUDE' => 'Fundo  De  Saude',
            'FUNDO_DE_SAUDE_USD' => 'Fundo  De  Saude  Usd',
            'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL' => 'Taxa  De  Ocupacao  Imovel  Funcional',
            'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL_USD' => 'Taxa  De  Ocupacao  Imovel  Funcional  Usd',
            'DEMAIS_DEDUCOES' => 'Demais  Deducoes',
            'DEMAIS_DEDUCOES_USD' => 'Demais  Deducoes  Usd',
            'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS' => 'Remuneracao  Apos  Deducoes  Obrigatorias',
            'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS_USD' => 'Remuneracao  Apos  Deducoes  Obrigatorias  Usd',
            'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL' => 'Verbas  Indenizatorias  Em  Sistemas  De  Pessoal  Civil',
            'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL_USD' => 'Verbas  Indenizatorias  Em  Sistemas  De  Pessoal  Civil  Usd',
            'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR' => 'Verbas  Indenizatorias  Em  Sistemas  De  Pessoal  Militar',
            'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR_USD' => 'Verbas  Indenizatorias  Em  Sistemas  De  Pessoal  Militar  Usd',
            'TOTAL_DE_VERBAS_INDENIZATORIAS' => 'Total  De  Verbas  Indenizatorias',
            'TOTAL_DE_VERBAS_INDENIZATORIAS_USD' => 'Total  De  Verbas  Indenizatorias  Usd',
            'TOTAL_DE_HONORARIOS_JETONS' => 'Total  De  Honorarios  Jetons',
        ];
    }
}
