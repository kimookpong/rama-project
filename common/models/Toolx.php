<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "toolx".
 *
 * @property int $toolx_id รหัสtoolx_id(Auto)
 * @property int $register_id รหัสลงทะเบียน
 * @property string $regsiter1 คำที่ 1 Random
 * @property string $regsiter2 คำที่ 2 Random
 * @property string $regsiter3 คำที่ 3 Random
 * @property string $datenow วันนี้วันอะไร
 * @property string|null $caseregsiter คำตอบ 3 คำมารวดเดียว
 * @property string|null $regsiterwordseg คำตอบ 3 คำที่แยกโดย Word Segmentation
 * @property string|null $orientation วันนี้วันอะไร
 * @property string|null $fruitfluency ข้อความพูดผลไม้
 * @property string|null $fruitwordseg ข้อความพูดผลไม้แยก
 * @property string|null $recall ทบทวน 3 คำ
 * @property string|null $recallwordseg ทบทวน 3 คำแยกค
 * @property string|null $voiceregsiter ตำแหน่งไฟล์เสียงtoolxพูดตามเสียง
 * @property string|null $voiceorientationpath ตำแหน่งไฟล์เสียงวันนี้วันอะไร
 * @property string|null $voicefruitluency ตำแหน่งไฟล์เสียงผลไม้
 * @property string|null $voicerecall ตำแหน่งไฟล์เสียงทบทวน3คำ
 * @property int|null $user_id ผู้บันทึกข้อมูล
 * @property int $regsiter_score คะแนนพูดตาม
 * @property int $fruitfluency_score คะแนนผลไม้
 * @property int $wordregsiter_score คะแนนทบทวบ3คำ
 * @property int $orientation_score คะแนนวันนี้วันอะไร
 * @property string|null $user_a_record_regsiter_1 บันทึกการได้ยินเสียงจากระบบโดย ShadowingA คำที่ 1
 * @property string|null $user_a_record_regsiter_2 บันทึกการได้ยินเสียงจากระบบโดย ShadowingA คำที่ 2
 * @property string|null $user_a_record_regsiter_3 บันทึกการได้ยินเสียงจากระบบโดย ShadowingA คำที่ 3
 * @property string|null $user_b_record_regsiter_1 บันทึกการได้ยินเสียงจากเคสโดย ShadowingB คำที่ 1
 * @property string|null $user_b_record_regsiter_2 บันทึกการได้ยินเสียงจากเคสโดย ShadowingB คำที่ 2
 * @property string|null $user_b_record_regsiter_3 บันทึกการได้ยินเสียงจากเคสโดย ShadowingB คำที่ 3
 * @property string|null $user_b_record_orientation บันทึกการได้ยินคำตอบถามวัน ShadowingB
 * @property string|null $user_b_record_friut บันทึกการได้ยินเสียงผลไม้  ShadowingB
 * @property string|null $user_b_record_recall1 บันทึกการได้ยินเสียงทบทวนคำ1 ShadowingB
 * @property string|null $user_b_record_recall2 บันทึกการได้ยินเสียงทบทวนคำ2 ShadowingB
 * @property string|null $user_b_record_recall3 บันทึกการได้ยินเสียงทบทวนคำ2 ShadowingB
 * @property string $create_at
 * @property string $update_at
 * @property int $flagdel
 * @property int $success
 */
class Toolx extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'toolx';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['register_id', 'create_at', 'update_at'], 'required'],
            [['register_id', 'user_b_record_friut_score', 'user_id_a', 'user_id_b', 'regsiter_score', 'fruitfluency_score', 'wordregsiter_score', 'orientation_score', 'flagdel', 'success'], 'integer'],
            [['fruitfluency', 'fruitwordseg', 'user_b_record_friut'], 'string'],
            [['create_at', 'update_at'], 'safe'],
            [['regsiter1', 'regsiter2', 'regsiter3', 'voiceregsiter', 'voiceorientationpath', 'voicefruitluency', 'voicerecall', 'user_a_record_regsiter_1', 'user_a_record_regsiter_2', 'user_a_record_regsiter_3', 'user_b_record_regsiter_1', 'user_b_record_regsiter_2', 'user_b_record_regsiter_3', 'user_b_record_orientation', 'user_b_record_recall1', 'user_b_record_recall2', 'user_b_record_recall3'], 'string', 'max' => 100],
            [['datenow'], 'string', 'max' => 30],
            [['caseregsiter', 'regsiterwordseg', 'orientation', 'recall', 'recallwordseg'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'toolx_id' => 'Toolx ID',
            'register_id' => 'Register ID',
            'regsiter1' => 'Regsiter 1',
            'regsiter2' => 'Regsiter 2',
            'regsiter3' => 'Regsiter 3',
            'datenow' => 'Datenow',
            'caseregsiter' => 'Caseregsiter',
            'regsiterwordseg' => 'Regsiterwordseg',
            'orientation' => 'Orientation',
            'fruitfluency' => 'Fruitfluency',
            'fruitwordseg' => 'Fruitwordseg',
            'recall' => 'Recall',
            'recallwordseg' => 'Recallwordseg',
            'voiceregsiter' => 'Voiceregsiter',
            'voiceorientationpath' => 'Voiceorientationpath',
            'voicefruitluency' => 'Voicefruitluency',
            'voicerecall' => 'Voicerecall',
            'user_id' => 'User ID',
            'regsiter_score' => 'Regsiter Score',
            'fruitfluency_score' => 'Fruitfluency Score',
            'wordregsiter_score' => 'Wordregsiter Score',
            'orientation_score' => 'Orientation Score',
            'user_a_record_regsiter_1' => 'User A Record Regsiter  1',
            'user_a_record_regsiter_2' => 'User A Record Regsiter  2',
            'user_a_record_regsiter_3' => 'User A Record Regsiter  3',
            'user_b_record_regsiter_1' => 'User B Record Regsiter  1',
            'user_b_record_regsiter_2' => 'User B Record Regsiter  2',
            'user_b_record_regsiter_3' => 'User B Record Regsiter  3',
            'user_b_record_orientation' => 'User B Record Orientation',
            'user_b_record_friut' => 'User B Record Friut',
            'user_b_record_recall1' => 'User B Record Recall 1',
            'user_b_record_recall2' => 'User B Record Recall 2',
            'user_b_record_recall3' => 'User B Record Recall 3',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'flagdel' => 'Flagdel',
            'success' => 'Success',
        ];
    }
}
