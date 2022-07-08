<?php

namespace frontend\controllers;

use common\models\Toolx;
use common\models\Wordregister;
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
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
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
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $thai_day = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัส', 'ศุกร์', 'เสาร์'];
        $this->layout = 'toolx';
        if ($this->request->isPost) {
            $model = Toolx::find()->where(['register_id' => $id])->one();
            $model->regsiter1 = Wordregister::find()->where(['verbtype' => 1])->orderBy(['wordreg_id' => SORT_ASC])->one()->word;
            $model->regsiter2 = Wordregister::find()->where(['verbtype' => 2])->orderBy(['wordreg_id' => SORT_ASC])->one()->word;
            $model->regsiter3 = Wordregister::find()->where(['verbtype' => 3])->orderBy(['wordreg_id' => SORT_ASC])->one()->word;
            $model->datenow = $thai_day[date('w')];
            $model->save();
            return $this->render('counter', [
                'id' => $id
            ]);
        }
        return $this->render('start', [
            'id' => $id
        ]);
    }

    public function actionFalse()
    {
        $id = Yii::$app->helpers->decodeUrl('id');
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $this->layout = 'toolx';
        return $this->render('false', [
            'id' => $id,
        ]);
    }
    public function actionSuccess()
    {
        $id = Yii::$app->helpers->decodeUrl('id');
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $this->layout = 'toolx';
        return $this->render('success', [
            'id' => $id,
        ]);
    }

    public function actionResult()
    {
        $id = Yii::$app->helpers->decodeUrl('id');
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $this->layout = 'toolx';
        return $this->render('result', [
            'id' => $id,
        ]);
    }


    public function actionTestRecall()
    {
        $id = Yii::$app->helpers->decodeUrl('id');
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $this->layout = 'toolx';
        $model = Toolx::find()->where(['register_id' => $id])->one();

        if ($this->request->isPost) {

            //function Upload File
            $file_audio = Yii::$app->helpers->uploadFile('file_audio', 'toolx');

            $model->voicerecall = $file_audio;
            $model->recall = Yii::$app->helpers->googleAPI(Yii::$app->params['frontend'] . '/' . $file_audio);
            if (!empty($model->recall)) {
                $count = 0;
                $text_seperate = Yii::$app->helpers->wordcut($model->recall);
                if ($text_seperate) {
                    if (in_array($model->regsiter1, $text_seperate['tokens'])) {
                        $count = $count + 1;
                    }
                    if (in_array($model->regsiter2, $text_seperate['tokens'])) {
                        $count = $count + 1;
                    }
                    if (in_array($model->regsiter3, $text_seperate['tokens'])) {
                        $count = $count + 1;
                    }
                    $model->recallwordseg = implode(',', $text_seperate['tokens']);
                }
                $model->wordregsiter_score = $count;
                $model->save(false);
            }
            return $this->redirect(['result', 'id' => $id]);
        }

        return $this->render('test_recall', [
            'id' => $id,
            'model' => $model,
        ]);
    }
    public function actionTestFruit()
    {
        $id = Yii::$app->helpers->decodeUrl('id');
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $this->layout = 'toolx';
        $model = Toolx::find()->where(['register_id' => $id])->one();
        $model->fruitfluency_score = 0;
        if ($this->request->isPost) {
            //function Upload File
            $file_audio = Yii::$app->helpers->uploadFile('file_audio', 'toolx');
            $model->fruitfluency = Yii::$app->helpers->googleAPI(Yii::$app->params['frontend'] . '/' . $file_audio);
            $text_seperate = Yii::$app->helpers->wordcut($model->fruitfluency);
            if ($text_seperate) {
                $model->fruitwordseg = implode(',', $text_seperate['tokens']);
            }

            foreach ($text_seperate['tokens'] as $word) {
                if (1) {
                    $model->fruitfluency_score = $model->fruitfluency_score + 1;
                }
            }
            $model->voicefruitluency = $file_audio;
            $model->save();

            return $this->redirect(['test-recall', 'id' => $id]);
        }

        return $this->render('test_fruit', [
            'id' => $id,
            'model' => $model,
        ]);
    }

    public function actionTestWhatDay()
    {
        $id = Yii::$app->helpers->decodeUrl('id');
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $this->layout = 'toolx';
        $model = Toolx::find()->where(['register_id' => $id])->one();

        if ($this->request->isPost) {
            //function Upload File
            $file_audio = Yii::$app->helpers->uploadFile('file_audio', 'toolx');
            $model->orientation = Yii::$app->helpers->googleAPI(Yii::$app->params['frontend'] . '/' . $file_audio);
            $model->voiceorientationpath = $file_audio;

            if (stristr($model->orientation, $model->datenow)) {
                $model->orientation_score = 1;
            }
            $model->save();

            return $this->redirect(['test-fruit', 'id' => $id]);
        }

        return $this->render('test_date', [
            'id' => $id,
            'model' => $model,
        ]);
    }
    public function actionTest()
    {
        $id = Yii::$app->helpers->decodeUrl('id');
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $this->layout = 'toolx';
        $model = Toolx::find()->where(['register_id' => $id])->one();
        if ($this->request->isPost) {

            //function Upload File
            $file_audio = Yii::$app->helpers->uploadFile('file_audio', 'toolx');

            $model->voiceregsiter = $file_audio;
            $model->caseregsiter = Yii::$app->helpers->googleAPI(Yii::$app->params['frontend'] . '/' . $file_audio);
            if (!empty($model->caseregsiter)) {
                $count = 0;
                $text_seperate = Yii::$app->helpers->wordcut($model->caseregsiter);
                if ($text_seperate) {
                    if (in_array($model->regsiter1, $text_seperate['tokens'])) {
                        $count = $count + 1;
                    }
                    if (in_array($model->regsiter2, $text_seperate['tokens'])) {
                        $count = $count + 1;
                    }
                    if (in_array($model->regsiter3, $text_seperate['tokens'])) {
                        $count = $count + 1;
                    }
                    $model->regsiterwordseg = implode(',', $text_seperate['tokens']);
                }
                $model->regsiter_score = $count;
                $model->save(false);

                //if ($count == 3) {
                return $this->redirect(['test-what-day', 'id' => $id]);
                //} else {
                //    return $this->redirect(['false', 'id' => $id]);
                //}
            } else {
                return $this->redirect(['false', 'id' => $id]);
            }
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
