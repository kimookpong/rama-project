<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ad8".
 *
 * @property int $ad8_id รหัส ad8(auto)
 * @property int $register_id รหัสลงทะเบียน
 * @property int|null $respondent ผู้ตอบ 1=ผู้สูงอายุ,2=ผู้ดูแลหรือญาติ
 * @property int|null $question1 1=ใช่,2=ไม่ใช่,3=ไม่ทราบ
 * @property int|null $question2 1=ใช่,2=ไม่ใช่,3=ไม่ทราบ
 * @property int|null $question3 1=ใช่,2=ไม่ใช่,3=ไม่ทราบ
 * @property int|null $question4 1=ใช่,2=ไม่ใช่,3=ไม่ทราบ
 * @property int|null $question5 1=ใช่,2=ไม่ใช่,3=ไม่ทราบ
 * @property int|null $question6 1=ใช่,2=ไม่ใช่,3=ไม่ทราบ
 * @property int|null $question7 1=ใช่,2=ไม่ใช่,3=ไม่ทราบ
 * @property int|null $question8 1=ใช่,2=ไม่ใช่,3=ไม่ทราบ
 * @property int $score 0=ตอบไม่ครบทุกข้อ 
 * @property string $create_at
 * @property string $update_at
 * @property int $flagdel 1=ลบ
 * @property int $success บันทึก 1 กรณีทำครบทุกข้อ
 */
class Ad8 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ad8';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['register_id', 'create_at', 'update_at'], 'required'],
            [['register_id', 'respondent', 'question1', 'question2', 'question3', 'question4', 'question5', 'question6', 'question7', 'question8', 'score', 'flagdel', 'success'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ad8_id' => 'Ad 8 ID',
            'register_id' => 'Register ID',
            'respondent' => 'Respondent',
            'question1' => 'Question 1',
            'question2' => 'Question 2',
            'question3' => 'Question 3',
            'question4' => 'Question 4',
            'question5' => 'Question 5',
            'question6' => 'Question 6',
            'question7' => 'Question 7',
            'question8' => 'Question 8',
            'score' => 'Score',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'flagdel' => 'Flagdel',
            'success' => 'Success',
        ];
    }
}
