<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uorg".
 *
 * @property string $id
 * @property string $name
 * @property string $organization_id
 *
 * @property Cadastro[] $cadastros
 * @property Cadastro[] $cadastros0
 * @property Organization $organization
 */
class Uorg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'uorg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'string', 'max' => 15],
            [['name'], 'string', 'max' => 191],
            [['organization_id'], 'string', 'max' => 5],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
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
            'organization_id' => Yii::t('app', 'Organization ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCadastros()
    {
        return $this->hasMany(Cadastro::className(), ['COD_UORG_EXERCICIO' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCadastros0()
    {
        return $this->hasMany(Cadastro::className(), ['COD_UORG_LOTACAO' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'organization_id']);
    }
}
