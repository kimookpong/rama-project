<?php

namespace frontend\controllers;

use common\models\Testandlimit;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
        $dataProvider = new ActiveDataProvider([
            'query' => Testandlimit::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'testandlimit_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Testandlimit model.
     * @param int $testandlimit_id Testandlimit ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($testandlimit_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($testandlimit_id),
        ]);
    }

    /**
     * Creates a new Testandlimit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Testandlimit();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'testandlimit_id' => $model->testandlimit_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Testandlimit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $testandlimit_id Testandlimit ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($testandlimit_id)
    {
        $model = $this->findModel($testandlimit_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'testandlimit_id' => $model->testandlimit_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Testandlimit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $testandlimit_id Testandlimit ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($testandlimit_id)
    {
        $this->findModel($testandlimit_id)->delete();

        return $this->redirect(['index']);
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
