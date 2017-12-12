<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Remuneracao;

/**
 * RemuneracaoSearch represents the model behind the search form about `app\models\Remuneracao`.
 */
class RemuneracaoSearch extends Remuneracao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ANO', 'MES', 'ID_SERVIDOR_PORTAL', 'CPF', 'NOME', 'REMUNERACAO_BASICA_BRUTA', 'REMUNERACAO_BASICA_BRUTA_USD', 'ABATE_TETO', 'ABATE_TETO_USD', 'GRATIFICACAO_NATALINA', 'GRATIFICACAO_NATALINA_USD', 'ABATE_TETO_GRATIFICACAO_NATALINA', 'ABATE_TETO_GRATIFICACAO_NATALINA_USD', 'FERIAS', 'FERIAS_USD', 'OUTRAS_REMUNERACOES_EVENTUAIS', 'OUTRAS_REMUNERACOES_EVENTUAIS_USD', 'IRRF', 'IRRF_USD', 'PSS_RPGS', 'PSS_RPGS_USD', 'PENSAO_MILITAR', 'PENSAO_MILITAR_USD', 'FUNDO_DE_SAUDE', 'FUNDO_DE_SAUDE_USD', 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL', 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL_USD', 'DEMAIS_DEDUCOES', 'DEMAIS_DEDUCOES_USD', 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS', 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS_USD', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL_USD', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR_USD', 'TOTAL_DE_VERBAS_INDENIZATORIAS', 'TOTAL_DE_VERBAS_INDENIZATORIAS_USD', 'TOTAL_DE_HONORARIOS_JETONS'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Remuneracao::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'ANO', $this->ANO])
            ->andFilterWhere(['like', 'MES', $this->MES])
            ->andFilterWhere(['like', 'ID_SERVIDOR_PORTAL', $this->ID_SERVIDOR_PORTAL])
            ->andFilterWhere(['like', 'CPF', $this->CPF])
            ->andFilterWhere(['like', 'NOME', $this->NOME])
            ->andFilterWhere(['like', 'REMUNERACAO_BASICA_BRUTA', $this->REMUNERACAO_BASICA_BRUTA])
            ->andFilterWhere(['like', 'REMUNERACAO_BASICA_BRUTA_USD', $this->REMUNERACAO_BASICA_BRUTA_USD])
            ->andFilterWhere(['like', 'ABATE_TETO', $this->ABATE_TETO])
            ->andFilterWhere(['like', 'ABATE_TETO_USD', $this->ABATE_TETO_USD])
            ->andFilterWhere(['like', 'GRATIFICACAO_NATALINA', $this->GRATIFICACAO_NATALINA])
            ->andFilterWhere(['like', 'GRATIFICACAO_NATALINA_USD', $this->GRATIFICACAO_NATALINA_USD])
            ->andFilterWhere(['like', 'ABATE_TETO_GRATIFICACAO_NATALINA', $this->ABATE_TETO_GRATIFICACAO_NATALINA])
            ->andFilterWhere(['like', 'ABATE_TETO_GRATIFICACAO_NATALINA_USD', $this->ABATE_TETO_GRATIFICACAO_NATALINA_USD])
            ->andFilterWhere(['like', 'FERIAS', $this->FERIAS])
            ->andFilterWhere(['like', 'FERIAS_USD', $this->FERIAS_USD])
            ->andFilterWhere(['like', 'OUTRAS_REMUNERACOES_EVENTUAIS', $this->OUTRAS_REMUNERACOES_EVENTUAIS])
            ->andFilterWhere(['like', 'OUTRAS_REMUNERACOES_EVENTUAIS_USD', $this->OUTRAS_REMUNERACOES_EVENTUAIS_USD])
            ->andFilterWhere(['like', 'IRRF', $this->IRRF])
            ->andFilterWhere(['like', 'IRRF_USD', $this->IRRF_USD])
            ->andFilterWhere(['like', 'PSS_RPGS', $this->PSS_RPGS])
            ->andFilterWhere(['like', 'PSS_RPGS_USD', $this->PSS_RPGS_USD])
            ->andFilterWhere(['like', 'PENSAO_MILITAR', $this->PENSAO_MILITAR])
            ->andFilterWhere(['like', 'PENSAO_MILITAR_USD', $this->PENSAO_MILITAR_USD])
            ->andFilterWhere(['like', 'FUNDO_DE_SAUDE', $this->FUNDO_DE_SAUDE])
            ->andFilterWhere(['like', 'FUNDO_DE_SAUDE_USD', $this->FUNDO_DE_SAUDE_USD])
            ->andFilterWhere(['like', 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL', $this->TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL])
            ->andFilterWhere(['like', 'TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL_USD', $this->TAXA_DE_OCUPACAO_IMOVEL_FUNCIONAL_USD])
            ->andFilterWhere(['like', 'DEMAIS_DEDUCOES', $this->DEMAIS_DEDUCOES])
            ->andFilterWhere(['like', 'DEMAIS_DEDUCOES_USD', $this->DEMAIS_DEDUCOES_USD])
            ->andFilterWhere(['like', 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS', $this->REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS])
            ->andFilterWhere(['like', 'REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS_USD', $this->REMUNERACAO_APOS_DEDUCOES_OBRIGATORIAS_USD])
            ->andFilterWhere(['like', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL', $this->VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL])
            ->andFilterWhere(['like', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL_USD', $this->VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_CIVIL_USD])
            ->andFilterWhere(['like', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR', $this->VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR])
            ->andFilterWhere(['like', 'VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR_USD', $this->VERBAS_INDENIZATORIAS_EM_SISTEMAS_DE_PESSOAL_MILITAR_USD])
            ->andFilterWhere(['like', 'TOTAL_DE_VERBAS_INDENIZATORIAS', $this->TOTAL_DE_VERBAS_INDENIZATORIAS])
            ->andFilterWhere(['like', 'TOTAL_DE_VERBAS_INDENIZATORIAS_USD', $this->TOTAL_DE_VERBAS_INDENIZATORIAS_USD])
            ->andFilterWhere(['like', 'TOTAL_DE_HONORARIOS_JETONS', $this->TOTAL_DE_HONORARIOS_JETONS]);

        return $dataProvider;
    }
}
