<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "records".
 *
 * @property int $id
 * @property string $Name
 * @property string $Address
 */
class Records extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'records';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Address'], 'required'],
            [['Name', 'Address'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'Address' => 'Address',
        ];
    }
}
