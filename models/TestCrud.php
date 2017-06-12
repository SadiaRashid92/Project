<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_crud".
 *
 * @property int $id
 * @property string $flag_title
 * @property string $flag_desc
 * @property string $date_created
 * @property int $flag_status
 * @property int $created_by
 */
class TestCrud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test_crud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_created'], 'safe'],
            [['flag_status', 'created_by'], 'integer'],
            [['flag_title', 'flag_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'flag_title' => 'Flag Title',
            'flag_desc' => 'Flag Desc',
            'date_created' => 'Date Created',
            'flag_status' => 'Flag Status',
            'created_by' => 'Created By',
        ];
    }
}
