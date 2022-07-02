<?php

namespace frontend\controllers;

use common\models\Ad8;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
    public function actionView($ad8_id)
    {
        return $this->render('view', [
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

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ad8_id' => $model->ad8_id]);
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
    public function actionUpdate($ad8_id)
    {
        $model = $this->findModel($ad8_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ad8_id' => $model->ad8_id]);
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
