<?php

namespace backend\controllers;

use common\models\Fruit;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FruitController implements the CRUD actions for fruit model.
 */
class FruitController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => \yii\filters\AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
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
     * Lists all fruit models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model =  Fruit::find()->all();

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Displays a single fruit model.
     * @param int $fruit_id Fruit ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($fruit_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($fruit_id),
        ]);
    }

    /**
     * Creates a new fruit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new fruit();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'fruit_id' => $model->fruit_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing fruit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $fruit_id Fruit ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($fruit_id)
    {
        $model = $this->findModel($fruit_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'fruit_id' => $model->fruit_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing fruit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $fruit_id Fruit ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($fruit_id)
    {
        $this->findModel($fruit_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the fruit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $fruit_id Fruit ID
     * @return fruit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($fruit_id)
    {
        if (($model = fruit::findOne(['fruit_id' => $fruit_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
