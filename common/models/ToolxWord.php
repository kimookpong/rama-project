<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "toolx_word".
 *
 * @property int $id Auto
 * @property int $toolx_id รหัสtoolx_id
 * @property string|null $word คำที่ตัดมาได้
 * @property int|null $wordreg_id math กับคำไหนใน DB
 * @property int $point
 */
class ToolxWord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toolx_word';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['toolx_id'], 'required'],
            [['toolx_id', 'wordreg_id', 'point'], 'integer'],
            [['word'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'toolx_id' => 'Toolx ID',
            'word' => 'Word',
            'wordreg_id' => 'Wordreg ID',
            'point' => 'Point',
        ];
    }
}
