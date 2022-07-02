<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "toolx_fruid".
 *
 * @property int $id Auto
 * @property int $toolx_id รหัสtoolx_id
 * @property string|null $wordfruit คำที่ตัดมาได้
 * @property int|null $fruit_id math กับผลไม้ใน DB id ไหน
 * @property int $point 0 ไม่ math 1=math
 */
class ToolxFruid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toolx_fruid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['toolx_id'], 'required'],
            [['toolx_id', 'fruit_id', 'point'], 'integer'],
            [['wordfruit'], 'string', 'max' => 255],
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
            'wordfruit' => 'Wordfruit',
            'fruit_id' => 'Fruit ID',
            'point' => 'Point',
        ];
    }
}
