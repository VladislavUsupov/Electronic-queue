<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ticket".
 *
 * @property int $ID
 * @property string $Date
 * @property int $WindowNum
 *
 * @property Window $windowNum
 */
class Ticket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Ticket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Date'], 'safe'],
            [['WindowNum'], 'integer'],
            [['WindowNum'], 'exist', 'skipOnError' => true, 'targetClass' => Window::className(), 'targetAttribute' => ['WindowNum' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Date' => 'Date',
            'WindowNum' => 'Window Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWindowNum()
    {
        return $this->hasOne(Window::className(), ['ID' => 'WindowNum']);
    }
}
