<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "case".
 *
 * @property int $caseid รหัส case(Auto)
 * @property string|null $name ชื่อ
 * @property string|null $surname สกุล
 * @property int|null $provinces_id
 * @property string|null $email email
 * @property string|null $tel เบอร์โทร
 * @property string $create_at
 * @property string $update_at
 * @property int $flagdel 1=Del 
 */
class Cases extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'case';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provinces_id', 'flagdel'], 'integer'],
            [['create_at', 'update_at'], 'required'],
            [['create_at', 'update_at'], 'safe'],
            [['name', 'surname'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 50],
            [['tel'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'caseid' => 'Caseid',
            'name' => 'Name',
            'surname' => 'Surname',
            'provinces_id' => 'Provinces ID',
            'email' => 'Email',
            'tel' => 'Tel',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'flagdel' => 'Flagdel',
        ];
    }
}
