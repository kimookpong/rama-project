<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wordregister".
 *
 * @property int $wordreg_id
 * @property string $word คำที่ใช่ random
 * @property int $verbtype ประเภทคำ 1,2,3
 * @property string|null $voicepart ตำแหน่งไฟล์
 */
class Wordregister extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wordregister';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['word', 'verbtype'], 'required'],
            [['verbtype'], 'integer'],
            [['word', 'voicepart'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'wordreg_id' => 'Wordreg ID',
            'word' => 'Word',
            'verbtype' => 'Verbtype',
            'voicepart' => 'Voicepart',
        ];
    }
}
