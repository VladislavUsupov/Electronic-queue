<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Users".
 *
 * @property string $Surname
 * @property string $Name
 * @property string $Patronymic
 * @property string $Role
 * @property string $Password
 * @property string $Username
 * @property int $ID
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Surname', 'Name', 'Patronymic', 'Role'], 'string'],
            [['ID'], 'required'],
            [['ID'], 'integer'],
            [['Password'], 'string', 'max' => 10],
            [['Password'], 'string', 'max' => 10],
            [['Username'], 'string', 'max' => 20],
            [['ID'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Surname' => 'Surname',
            'Name' => 'Name',
            'Patronymic' => 'Patronymic',
            'Role' => 'Role',
            'Password' => 'Password',
            'Username' => 'Username',
            'ID' => 'ID',
        ];
    }
}
