<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fruit".
 *
 * @property int $fruit_id
 * @property string $fruit ผลไม้
 * @property string|null $keyword คำใกล้เคียง {k,w}
 */
class Fruit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fruit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keyword'], 'string'],
            [['fruit'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fruit_id' => 'Fruit ID',
            'fruit' => 'Fruit',
            'keyword' => 'Keyword',
        ];
    }
}
