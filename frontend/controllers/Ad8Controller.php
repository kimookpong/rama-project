<?php

namespace frontend\controllers;

use common\models\Ad8;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use Yii;

/**
 * Ad8Controller implements the CRUD actions for Ad8 model.
 */
class Ad8Controller extends Controller
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
     * Lists all Ad8 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Ad8::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'ad8_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ad8 model.
     * @param int $ad8_id Ad 8 ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView()
    {
        $ad8_id = Yii::$app->helpers->decodeUrl('ad8_id');
        $this->layout = 'ad8';
        return $this->render('view', [
            'model' => $this->findModel($ad8_id),
        ]);
    }
    public function actionFalse($ad8_id)
    {
        $this->layout = 'ad8';
        return $this->render('false', [
            'model' => $this->findModel($ad8_id),
        ]);
    }
    public function actionSuccess($ad8_id)
    {
        $this->layout = 'ad8';
        return $this->render('success', [
            'model' => $this->findModel($ad8_id),
        ]);
    }
    /**
     * Creates a new Ad8 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ad8();
        $this->layout = 'ad8';
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ad8_id' => $model->ad8_id, 'q' => "1"]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ad8 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ad8_id Ad 8 ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate()
    {
        $ad8_id = Yii::$app->helpers->decodeUrl('ad8_id');
        $this->layout = 'ad8';
        $model = $this->findModel($ad8_id);
        //$q = Yii::$app->helpers->decodeUrl('q');
        $a = 0;
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            if ($model->step == '9') {
                $model->question1 == 1 ? $a = $a + 1 : '';
                $model->question2 == 1 ? $a = $a + 1 : '';
                $model->question3 == 1 ? $a = $a + 1 : '';
                $model->question4 == 1 ? $a = $a + 1 : '';
                $model->question5 == 1 ? $a = $a + 1 : '';
                $model->question6 == 1 ? $a = $a + 1 : '';
                $model->question7 == 1 ? $a = $a + 1 : '';
                $model->question8 == 1 ? $a = $a + 1 : '';
                $model->score = $a;
                $model->success = '1';
                $model->save();
                if ($model->score <= 2) {
                    return $this->redirect(['success', 'ad8_id' => $model->ad8_id]);
                } else {
                    return $this->redirect(['false', 'ad8_id' => $model->ad8_id]);
                }
            }
            return $this->redirect(['update', 'ad8_id' => $model->ad8_id, 'q' => $model->step]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ad8 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ad8_id Ad 8 ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ad8_id)
    {
        $this->findModel($ad8_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ad8 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ad8_id Ad 8 ID
     * @return Ad8 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ad8_id)
    {
        if (($model = Ad8::findOne(['ad8_id' => $ad8_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
