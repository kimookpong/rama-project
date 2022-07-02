<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testandlimit".
 *
 * @property int $testandlimit_id รหัส testandlimit(Auto)
 * @property int $register_id รหัสลงทะเบียน
 * @property string|null $qustion1 คำตอบข้อ1จากผู้ทดสอบ
 * @property string|null $qustion2 คำตอบข้อ2จากผู้ทดสอบ
 * @property string|null $qustion3 คำตอบข้อ3จากผู้ทดสอบ
 * @property string|null $voicepath1 ตำแหน่งไฟล์เสียงข้อ1
 * @property string|null $voicepath2 ตำแหน่งไฟล์เสียงข้อ2
 * @property string|null $voicepath3 ตำแหน่งไฟล์เสียงข้อ3
 * @property int $score คะแนน
 * @property int|null $user_id ผู้บันทึกข้อมูล
 * @property string|null $userrecord_qustion1 บันทึกการได้ยินเสียงโดย User
 * @property string|null $userrecord_qustion2 บันทึกการได้ยินเสียงโดย User
 * @property string|null $userrecord_qustion3 บันทึกการได้ยินเสียงโดย User
 * @property int|null $voicequality1 คุณภาพภาพเสียงดี
 * @property int|null $voicequality2 คุณภาพภาพเสียงเบา
 * @property int|null $voicequality3 คุณภาพภาพเสียงมีเสียงรบกวน
 * @property string $create_at
 * @property string $update_at
 * @property int $flagdel 1=ลบ
 * @property int $success 1=สมบูรณ์
 */
class Testandlimit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testandlimit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['register_id', 'create_at', 'update_at'], 'required'],
            [['register_id', 'score', 'user_id', 'voicequality1', 'voicequality2', 'voicequality3', 'flagdel', 'success'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['qustion1', 'qustion2', 'qustion3', 'voicepath1', 'voicepath2', 'voicepath3', 'userrecord_qustion1', 'userrecord_qustion2', 'userrecord_qustion3'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'testandlimit_id' => 'Testandlimit ID',
            'register_id' => 'Register ID',
            'qustion1' => 'Qustion 1',
            'qustion2' => 'Qustion 2',
            'qustion3' => 'Qustion 3',
            'voicepath1' => 'Voicepath 1',
            'voicepath2' => 'Voicepath 2',
            'voicepath3' => 'Voicepath 3',
            'score' => 'Score',
            'user_id' => 'User ID',
            'userrecord_qustion1' => 'Userrecord Qustion 1',
            'userrecord_qustion2' => 'Userrecord Qustion 2',
            'userrecord_qustion3' => 'Userrecord Qustion 3',
            'voicequality1' => 'Voicequality 1',
            'voicequality2' => 'Voicequality 2',
            'voicequality3' => 'Voicequality 3',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'flagdel' => 'Flagdel',
            'success' => 'Success',
        ];
    }
}
