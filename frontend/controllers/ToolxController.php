<?php

namespace frontend\controllers;

use common\models\Toolx;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\UploadedFile;
use Yii;

/**
 * ToolxController implements the CRUD actions for Toolx model.
 */
class ToolxController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Toolx models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $id = Yii::$app->helpers->decodeUrl('id');
        $model = Toolx::find()->where(['register_id' => $id])->one();
        if (empty($model)) {
            $model = new Toolx();
            $model->register_id = $id;
        }
        $model->save(false);


        $this->layout = 'toolx';
        return $this->render('index', [
            'id' => $id
        ]);
    }

    public function actionStart()
    {
        $id = Yii::$app->helpers->decodeUrl('id');
        $this->layout = 'toolx';
        if ($this->request->isPost) {
            return $this->render('counter', [
                'id' => $id
            ]);
        }
        return $this->render('start', [
            'id' => $id
        ]);
    }

    public function actionTest()
    {
        $path = Yii::getAlias('@webroot') . '/records' . '/';
        $id = Yii::$app->helpers->decodeUrl('id');
        $this->layout = 'toolx';
        $model = Toolx::find()->where(['register_id' => $id])->one();
        if ($this->request->isPost) {
            $file = UploadedFile::getInstanceByName('file_audio');
            $file_audio = '';
            if ($file) {
                $fileName = date('Ymd_His_') . md5($file->baseName . time()) . '.wav';
                if ($file->saveAs($path . $fileName)) {
                    $file_audio = $fileName;
                }
            }
            $model->voiceregsiter = $file_audio;
            $model->save(false);
        }
        return $this->render('test', [
            'id' => $id,
            'model' => $model,
        ]);
    }

    /**
     * Finds the Toolx model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $toolx_id Toolx ID
     * @return Toolx the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($toolx_id)
    {
        if (($model = Toolx::findOne(['toolx_id' => $toolx_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
