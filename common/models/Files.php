<?php

namespace common\models;


use Yii;
use yii\web\UploadedFile;

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
            [['id', 'files_name', 'files_part'], 'required'],
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
            'files_part' => 'ไฟล์',
            'files_name' => 'ชื่อไฟล์',
            'case_id' => 'Case ID',
            'user_id' => 'User ID',
            'flagdel' => 'Flagdel',
            'create_at' => 'Create At',
        ];
    }

    public function upload($model, $attribute)
    {
        $photo  = UploadedFile::getInstance($model, $attribute);
        $path = Yii::getAlias('@webroot') . '/uploads/';
        if ($photo) {
            $fileName = md5($photo->baseName . time()) . '.' . $photo->extension;
            if ($photo->saveAs($path . $fileName)) {
                return 'uploads/' . $fileName;
            }
        }
        return $model->getOldAttribute($attribute) ? $model->getOldAttribute($attribute) : null;
    }

    public function getFormatFile()
    {
        $format = explode(".", $this->files_part);
        return $format[1];
    }
    public function getFormatIcon()
    {
        $icon = $this->formatFile;
        if (in_array($icon, ['jpg', 'png', 'jpeg', 'gif'])) {
            return 'far fa-fw fa-image';
        } else if (in_array($icon, ['doc', 'docx'])) {
            return 'far fa-fw fa-file-word';
        } else if (in_array($icon, ['xls', 'xlsx'])) {
            return 'far fa-fw fa-file-excel';
        } else if (in_array($icon, ['pdf'])) {
            return 'far fa-fw fa-file-pdf';
        } else {
            return 'far fa-fw fa-file';
        }
    }
}
