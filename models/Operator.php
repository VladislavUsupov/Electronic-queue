<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Operator".
 *
 * @property int $ID
 * @property string $Surname
 * @property string $Name
 * @property string $Patronymic
 * @property int $WindowNum
 * @property string $Status
 *
 * @property Window $window
 */
class Operator extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Operator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Surname', 'Name', 'Patronymic', 'WindowNum'], 'required'],
            [['Surname', 'Name', 'Patronymic', 'Status'], 'string'],
            [['WindowNum'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Surname' => 'Surname',
            'Name' => 'Name',
            'Patronymic' => 'Patronymic',
            'WindowNum' => 'Window Num',
            'Status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWindow()
    {
        return $this->hasOne(Window::className(), ['ID' => 'WindowNum']);
    }
}
