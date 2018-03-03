<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Admin".
 *
 * @property int $ID
 * @property string $Surname
 * @property string $Name
 * @property string $Patronymic
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Surname', 'Name', 'Patronymic'], 'string'],
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
        ];
    }
}
