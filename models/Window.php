<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Window".
 *
 * @property int $ID
 * @property int $WindowNum
 *
 * @property Ticket[] $tickets
 * @property Operator $iD
 */
class Window extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Window';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'WindowNum'], 'integer'],
            [['WindowNum'], 'unique'],
            [['ID'], 'unique'],
            [['ID'], 'exist', 'skipOnError' => true, 'targetClass' => Operator::className(), 'targetAttribute' => ['ID' => 'WindowNum']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'WindowNum' => 'Window Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['WindowNum' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getID()
    {
        return $this->hasOne(Operator::className(), ['WindowNum' => 'ID']);
    }
}
