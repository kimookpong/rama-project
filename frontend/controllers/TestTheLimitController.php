<?php

namespace frontend\controllers;

use Yii;
use common\models\Testandlimit;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\UploadedFile;

/**
 * TestTheLimitController implements the CRUD actions for Testandlimit model.
 */
class TestTheLimitController extends Controller
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
     * Lists all Testandlimit models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $id = Yii::$app->helpers->decodeUrl('id');
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $model = Testandlimit::find()->where(['register_id' => $id])->one();
        if (empty($model)) {
            $model = new Testandlimit();
            $model->register_id = $id;
        }
        $model->save(false);

        $this->layout = 'testthelimit';
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
        $this->layout = 'testthelimit';
        if ($this->request->isPost) {
            $model = Testandlimit::find()->where(['register_id' => $id])->one();
            $model->score = 0;
            $model->save(false);
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
        $this->layout = 'testthelimit';
        $id = Yii::$app->helpers->decodeUrl('id');
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $question = Yii::$app->helpers->decodeUrl('question');
        $model = Testandlimit::find()->where(['register_id' => $id])->one();
        if ($this->request->isPost) {
            $answer = Yii::$app->request->post('speech_text');

            //function Upload File
            $file_audio = Yii::$app->helpers->uploadFile('file_audio', 'testthelimit');

            if ($question == 1) {
                $model->qustion1 =  $answer;
                $model->voicepath1 = $file_audio;
                $model->save();
                return $this->redirect(['test', 'id' => $id, 'question' => $question + 1]);
            } else if ($question == 2) {
                $model->qustion2 =  $answer;
                $model->voicepath2 = $file_audio;
                $model->save();
                return $this->redirect(['test', 'id' => $id, 'question' => $question + 1]);
            } else {
                $model->qustion3 =  $answer;
                $model->voicepath3 = $file_audio;
                $model->save();
                return $this->redirect(['inprocess', 'id' => $id]);
            }
        }
        return $this->render('test', [
            'question' => $question,
        ]);
    }

    public function actionResult()
    {
        $this->layout = 'testthelimit';
        $id = Yii::$app->helpers->decodeUrl('id');
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $model = Testandlimit::find()->where(['register_id' => $id])->one();
        return $this->render('result', [
            'model' => $model,
            'id' => $id,
        ]);
    }

    public function actionInprocess()
    {
        $this->layout = 'testthelimit';
        $id = Yii::$app->helpers->decodeUrl('id');
        if (empty($id)) {
            return $this->redirect(['site/index']);
        }
        $model = Testandlimit::find()->where(['register_id' => $id])->one();
        return $this->render('process', [
            'model' => $model,
            'id' => $id,
        ]);
    }

    public function actionProcess($id)
    {
        $this->layout = false;
        $model = Testandlimit::find()->where(['register_id' => $id])->one();
        $model->score = 0;
        $model->qustion1 = Yii::$app->helpers->googleAPI(Yii::$app->params['frontend'] . '/' . $model->voicepath1);
        $model->qustion2 = Yii::$app->helpers->googleAPI(Yii::$app->params['frontend'] . '/' . $model->voicepath2);
        $model->qustion3 = Yii::$app->helpers->googleAPI(Yii::$app->params['frontend'] . '/' . $model->voicepath3);
        if (!empty($model->qustion1)) {
            $model->score = $model->score + 1;
        }
        if (!empty($model->qustion2)) {
            $model->score = $model->score + 1;
        }
        if (!empty($model->qustion3)) {
            $model->score = $model->score + 1;
        }
        $model->save();

        echo  'success';
        /*
        return $this->render('json', [
            'model' => $model,
        ]);
        */
    }

    /**
     * Finds the Testandlimit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $testandlimit_id Testandlimit ID
     * @return Testandlimit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($testandlimit_id)
    {
        if (($model = Testandlimit::findOne(['testandlimit_id' => $testandlimit_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
