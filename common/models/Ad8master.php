<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ad8_master".
 *
 * @property int $id
 * @property string|null $head
 * @property string|null $title
 */
class Ad8master extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ad8_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['head', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'head' => 'Head',
            'title' => 'Title',
        ];
    }
}
