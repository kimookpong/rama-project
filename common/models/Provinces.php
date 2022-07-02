<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "provinces".
 *
 * @property int $provinces_id
 * @property string $code
 * @property string $name_th
 * @property string $name_en
 * @property int $geography_id
 */
class Provinces extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provinces';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provinces_id', 'code', 'name_th', 'name_en'], 'required'],
            [['provinces_id', 'geography_id'], 'integer'],
            [['code'], 'string', 'max' => 2],
            [['name_th', 'name_en'], 'string', 'max' => 150],
            [['provinces_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'provinces_id' => 'Provinces ID',
            'code' => 'Code',
            'name_th' => 'Name Th',
            'name_en' => 'Name En',
            'geography_id' => 'Geography ID',
        ];
    }
}
