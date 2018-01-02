<?php

namespace app\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use yii\helpers\Html;

/**
 * This is the model class for table "organization".
 *
 * @property string $id
 * @property string $name
 * @property string $parent_id
 *
 * @property Cadastro[] $cadastros
 * @property Cadastro[] $cadastros0
 * @property Cadastro[] $cadastros1
 * @property Cadastro[] $cadastros2
 * @property Uorg[] $uorgs
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organization';
    }

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'message',
                // 'slugAttribute' => 'slug',
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_id'], 'required'],
            [['id', 'parent_id'], 'string', 'max' => 5],
            [['name'], 'string', 'max' => 191],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'parent_id' => Yii::t('app', 'Parent ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUrl()
    {
        return Html::a($this->name, "/orgao/".$this->slug);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCadastrosOrgExercicio()
    {
        return $this->hasMany(Cadastro::className(), ['COD_ORG_EXERCICIO' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCadastrosOrgLotacao()
    {
        return $this->hasMany(Cadastro::className(), ['COD_ORG_LOTACAO' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCadastrosOrgSupExercicio()
    {
        return $this->hasMany(Cadastro::className(), ['COD_ORGSUP_EXERCICIO' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCadastrosOrgSupLotacao()
    {
        return $this->hasMany(Cadastro::className(), ['COD_ORGSUP_LOTACAO' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUorgs()
    {
        return $this->hasMany(Uorg::className(), ['organization_id' => 'id']);
    }
}
