<?php

namespace app\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "servidor".
 *
 * @property integer $id
 * @property string $name
 * @property string $cpf
 *
 * @property Cadastro[] $cadastros
 * @property Remuneracao[] $remuneracaos
 */
class Servidor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servidor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name', 'cpf'], 'string', 'max' => 191],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'name',
                'immutable' => true,
                'ensureUnique'=>true,
                // 'slugAttribute' => 'slug',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'cpf' => 'Cpf',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCadastros()
    {
        return $this->hasMany(Cadastro::className(), ['servidor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRemuneracaos()
    {
        return $this->hasMany(Remuneracao::className(), ['servidor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLastPayment()
    {
        $remuneracao = $this->hasMany(Remuneracao::className(), ['servidor_id' => 'id'])
                    ->orderBy(['ANO' => SORT_DESC, 'MES' => SORT_DESC])->one();
        return $remuneracao['REMUNERACAO_BASICA_BRUTA'];
    }

    /**
     * @return string
     */
    public function getFormattedName()
    {
        return ucwords(strtolower($this->name));
    }

    public function getRelatedOrganization()
    {
        $organizations = array();
        $cadastros = $this->hasMany(Cadastro::className(), ['servidor_id' => 'id'])->all();
        foreach($cadastros as $cad){
          if (!in_array($cad->cODORGEXERCICIO->name, $organizations)){
            $organizations[] = $cad->cODORGEXERCICIO->name;
          }
        }
        return implode(', ', $organizations);
    }

    public function getRelatedUOrg()
    {
        $uorg = array();
        $cadastros = $this->hasMany(Cadastro::className(), ['servidor_id' => 'id'])->all();
        foreach($cadastros as $cad){
          if (!is_null($cad->COD_UORG_EXERCICIO)){
            if (!in_array($cad->cODUORGEXERCICIO->name, $uorg)){
              $uorg[] = $cad->cODUORGEXERCICIO->name;
            }
          }
        }
        return implode(', ', $uorg);
    }
}
