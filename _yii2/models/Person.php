<?php

namespace app\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "person".
 *
 * @property integer $id
 * @property string $name
 * @property string $cpf
 *
 * @property Cadastro[] $cadastros
 * @property Remuneracao[] $remuneracaos
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
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
        return $this->hasMany(Cadastro::className(), ['person_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRemuneracaos()
    {
        return $this->hasMany(Remuneracao::className(), ['person_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLastPayment()
    {
        $remuneracao = $this->hasMany(Remuneracao::className(), ['person_id' => 'id'])
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
}
