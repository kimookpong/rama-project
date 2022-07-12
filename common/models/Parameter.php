<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "parameter".
 *
 * @property int $param_id
 * @property int|null $x
 * @property int|null $y
 * @property int|null $z
 * @property int|null $test_the_limit
 * @property int|null $toolx_3word
 * @property int|null $toolx_fruit
 * @property int|null $toolx_recall
 * @property int|null $toolx_fruit_delay
 */
class Parameter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parameter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['x', 'y', 'z', 'test_the_limit', 'toolx_3word', 'toolx_fruit', 'toolx_recall', 'toolx_fruit_delay'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'param_id' => 'Param ID',
            'x' => 'พารามิเตอร์ X',
            'y' => 'พารามิเตอร์ Y',
            'z' => 'พารามิเตอร์ Z',
            'test_the_limit' => 'ชุดเตรียมความพร้อม',
            'toolx_3word' => 'จำคำ 3 คำ',
            'toolx_fruit' => 'พูดชื่อผลไม้',
            'toolx_recall' => 'ทวนคำ 3 คำ',
            'toolx_fruit_delay' => 'ระยะเวลารอพูดชื่อผลไม้',
        ];
    }
}
