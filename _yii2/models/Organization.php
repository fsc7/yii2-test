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
                'attribute' => 'name',
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
          [['id', 'name', 'parent_id', 'slug'], 'required'],
          [['id', 'parent_id'], 'string', 'max' => 5],
          [['name'], 'string', 'max' => 191],
          [['sigla'], 'string', 'max' => 10],
          [['slug'], 'string', 'max' => 255],
          [['slug'], 'unique'],
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
            'sigla' => Yii::t('app', 'Sigla'),
            'slug' => Yii::t('app', 'Slug'),
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
     * @return string
     */
    public function getFormattedName()
    {
        return ucwords(strtolower($this->name));
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentOrg()
    {
        if ($this->parent_id){
            return $org_sup = $this->hasOne(Organization::className(), ['id' => 'parent_id']);
        } else {
            return null;
        }
    }

    public function getParentName()
    {
        if ($this->getParentOrg()){
            return $this->parentOrg->name;
        } else {
          return null;
        }
    }
}
