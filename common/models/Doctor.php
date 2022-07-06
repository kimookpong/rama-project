<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "doctor".
 *
 * @property int $doctor_id
 * @property string|null $fullname
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doctor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'doctor_id' => 'Doctor ID',
            'fullname' => 'Fullname',
        ];
    }
}
