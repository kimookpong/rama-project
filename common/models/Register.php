<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "register".
 *
 * @property int $register_id รหัสลงทะเบียน(Auto)
 * @property int|null $case_id รหัส case
 * @property string $casecode รหัสที่สร้างขึ้นมาเพื่อแทนผู้ทดสอบ
 * @property string|null $name ชื่อ
 * @property string|null $surname สกุล
 * @property string|null $disease control,case
 * @property int|null $age
 * @property string $gender M,F,O
 * @property int $provinces_id
 * @property string|null $email
 * @property string|null $tel เบอร์โทร
 * @property string $datetest วันที่ทดสอบ
 * @property int $month
 * @property int $year
 * @property int|null $user_id รหัสผู้ส่งทดสอบ
 * @property string|null $source online,beta
 * @property string $create_at
 * @property string $update_at
 * @property int $flagdel 1=Del 
 */
class Register extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'register';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['case_id', 'age', 'provinces_id', 'month', 'year', 'docter_id', 'flagdel'], 'integer'],
            [['provinces_id', 'datetest', 'month', 'year', 'create_at', 'update_at'], 'required'],
            [['datetest', 'create_at', 'update_at'], 'safe'],
            [['casecode', 'source'], 'string', 'max' => 50],
            [['name', 'surname'], 'string', 'max' => 100],
            [['disease', 'tel'], 'string', 'max' => 20],
            [['gender'], 'string', 'max' => 3],
            [['email'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'register_id' => 'Register ID',
            'case_id' => 'Case ID',
            'casecode' => 'Casecode',
            'name' => 'Name',
            'surname' => 'Surname',
            'disease' => 'Disease',
            'age' => 'Age',
            'gender' => 'Gender',
            'provinces_id' => 'Provinces ID',
            'email' => 'Email',
            'tel' => 'Tel',
            'datetest' => 'Datetest',
            'month' => 'Month',
            'year' => 'Year',
            'docter_id' => 'User ID',
            'source' => 'Source',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'flagdel' => 'Flagdel',
        ];
    }
}
