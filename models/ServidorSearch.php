<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Servidor;

/**
 * ServidorSearch represents the model behind the search form about `app\models\Servidor`.
 */
class ServidorSearch extends Servidor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Id_SERVIDOR_PORTAL'], 'integer'],
            [['NOME', 'CPF', 'MATRICULA', 'DESCRICAO_CARGO', 'CLASSE_CARGO', 'REFERENCIA_CARGO', 'PADRAO_CARGO', 'NIVEL_CARGO', 'SIGLA_FUNCAO', 'NIVEL_FUNCAO', 'FUNCAO', 'CODIGO_ATIVIDADE', 'ATIVIDADE', 'OPCAO_PARCIAL', 'COD_UORG_LOTACAO', 'UORG_LOTACAO', 'COD_ORG_LOTACAO', 'ORG_LOTACAO', 'COD_ORGSUP_LOTACAO', 'ORGSUP_LOTACAO', 'COD_UORG_EXERCICIO', 'UORG_EXERCICIO', 'COD_ORG_EXERCICIO', 'ORG_EXERCICIO', 'COD_ORGSUP_EXERCICIO', 'ORGSUP_EXERCICIO', 'TIPO_VINCULO', 'SITUACAO_VINCULO', 'DATA_INICIO_AFASTAMENTO', 'DATA_TERMINO_AFASTAMENTO', 'REGIME_JURIDICO', 'JORNADA_DE_TRABALHO', 'DATA_INGRESSO_CARGOFUNCAO', 'DATA_NOMEACAO_CARGOFUNCAO', 'DATA_INGRESSO_ORGAO', 'DOCUMENTO_INGRESSO_SERVICOPUBLICO', 'DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO', 'DIPLOMA_INGRESSO_CARGOFUNCAO', 'DIPLOMA_INGRESSO_ORGAO', 'DIPLOMA_INGRESSO_SERVICOPUBLICO', 'UF_EXERCICIO'], 'safe'],
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
        $query = Servidor::find();

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
            'Id_SERVIDOR_PORTAL' => $this->Id_SERVIDOR_PORTAL,
        ]);

        $query->andFilterWhere(['like', 'NOME', $this->NOME])
            ->andFilterWhere(['like', 'CPF', $this->CPF])
            ->andFilterWhere(['like', 'MATRICULA', $this->MATRICULA])
            ->andFilterWhere(['like', 'DESCRICAO_CARGO', $this->DESCRICAO_CARGO])
            ->andFilterWhere(['like', 'CLASSE_CARGO', $this->CLASSE_CARGO])
            ->andFilterWhere(['like', 'REFERENCIA_CARGO', $this->REFERENCIA_CARGO])
            ->andFilterWhere(['like', 'PADRAO_CARGO', $this->PADRAO_CARGO])
            ->andFilterWhere(['like', 'NIVEL_CARGO', $this->NIVEL_CARGO])
            ->andFilterWhere(['like', 'SIGLA_FUNCAO', $this->SIGLA_FUNCAO])
            ->andFilterWhere(['like', 'NIVEL_FUNCAO', $this->NIVEL_FUNCAO])
            ->andFilterWhere(['like', 'FUNCAO', $this->FUNCAO])
            ->andFilterWhere(['like', 'CODIGO_ATIVIDADE', $this->CODIGO_ATIVIDADE])
            ->andFilterWhere(['like', 'ATIVIDADE', $this->ATIVIDADE])
            ->andFilterWhere(['like', 'OPCAO_PARCIAL', $this->OPCAO_PARCIAL])
            ->andFilterWhere(['like', 'COD_UORG_LOTACAO', $this->COD_UORG_LOTACAO])
            ->andFilterWhere(['like', 'UORG_LOTACAO', $this->UORG_LOTACAO])
            ->andFilterWhere(['like', 'COD_ORG_LOTACAO', $this->COD_ORG_LOTACAO])
            ->andFilterWhere(['like', 'ORG_LOTACAO', $this->ORG_LOTACAO])
            ->andFilterWhere(['like', 'COD_ORGSUP_LOTACAO', $this->COD_ORGSUP_LOTACAO])
            ->andFilterWhere(['like', 'ORGSUP_LOTACAO', $this->ORGSUP_LOTACAO])
            ->andFilterWhere(['like', 'COD_UORG_EXERCICIO', $this->COD_UORG_EXERCICIO])
            ->andFilterWhere(['like', 'UORG_EXERCICIO', $this->UORG_EXERCICIO])
            ->andFilterWhere(['like', 'COD_ORG_EXERCICIO', $this->COD_ORG_EXERCICIO])
            ->andFilterWhere(['like', 'ORG_EXERCICIO', $this->ORG_EXERCICIO])
            ->andFilterWhere(['like', 'COD_ORGSUP_EXERCICIO', $this->COD_ORGSUP_EXERCICIO])
            ->andFilterWhere(['like', 'ORGSUP_EXERCICIO', $this->ORGSUP_EXERCICIO])
            ->andFilterWhere(['like', 'TIPO_VINCULO', $this->TIPO_VINCULO])
            ->andFilterWhere(['like', 'SITUACAO_VINCULO', $this->SITUACAO_VINCULO])
            ->andFilterWhere(['like', 'DATA_INICIO_AFASTAMENTO', $this->DATA_INICIO_AFASTAMENTO])
            ->andFilterWhere(['like', 'DATA_TERMINO_AFASTAMENTO', $this->DATA_TERMINO_AFASTAMENTO])
            ->andFilterWhere(['like', 'REGIME_JURIDICO', $this->REGIME_JURIDICO])
            ->andFilterWhere(['like', 'JORNADA_DE_TRABALHO', $this->JORNADA_DE_TRABALHO])
            ->andFilterWhere(['like', 'DATA_INGRESSO_CARGOFUNCAO', $this->DATA_INGRESSO_CARGOFUNCAO])
            ->andFilterWhere(['like', 'DATA_NOMEACAO_CARGOFUNCAO', $this->DATA_NOMEACAO_CARGOFUNCAO])
            ->andFilterWhere(['like', 'DATA_INGRESSO_ORGAO', $this->DATA_INGRESSO_ORGAO])
            ->andFilterWhere(['like', 'DOCUMENTO_INGRESSO_SERVICOPUBLICO', $this->DOCUMENTO_INGRESSO_SERVICOPUBLICO])
            ->andFilterWhere(['like', 'DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO', $this->DATA_DIPLOMA_INGRESSO_SERVICOPUBLICO])
            ->andFilterWhere(['like', 'DIPLOMA_INGRESSO_CARGOFUNCAO', $this->DIPLOMA_INGRESSO_CARGOFUNCAO])
            ->andFilterWhere(['like', 'DIPLOMA_INGRESSO_ORGAO', $this->DIPLOMA_INGRESSO_ORGAO])
            ->andFilterWhere(['like', 'DIPLOMA_INGRESSO_SERVICOPUBLICO', $this->DIPLOMA_INGRESSO_SERVICOPUBLICO])
            ->andFilterWhere(['like', 'UF_EXERCICIO', $this->UF_EXERCICIO]);

        return $dataProvider;
    }
}
