<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property int $id
 * @property string $files_part
 * @property string|null $files_name ชื่อไฟล์
 * @property string $case_id
 * @property int $user_id
 * @property int $flagdel
 * @property string $create_at
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'create_at'], 'required'],
            [['id', 'user_id', 'flagdel'], 'integer'],
            [['create_at'], 'safe'],
            [['files_part', 'files_name'], 'string', 'max' => 100],
            [['case_id'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'files_part' => 'Files Part',
            'files_name' => 'Files Name',
            'case_id' => 'Case ID',
            'user_id' => 'User ID',
            'flagdel' => 'Flagdel',
            'create_at' => 'Create At',
        ];
    }
}
