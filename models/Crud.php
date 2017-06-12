<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "crud".
 *
 * @property int $id
 * @property string $Name
 * @property string $Address
 * @property string $Email
 */
class Crud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'crud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Address', 'Email'], 'required'],
            [['Address', 'Email'], 'string'],
            [['Name'], 'string', 'max' => 55],
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
            'Email' => 'Email',
           'esign_ssn_authentication'=> 'eSign SSN Authentication Required',

        ];
    }
}
