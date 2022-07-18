<?php

namespace backend\controllers;

use common\models\wordregister;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WordregisterController implements the CRUD actions for wordregister model.
 */
class WordregisterController extends Controller
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
     * Lists all wordregister models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => wordregister::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'wordreg_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single wordregister model.
     * @param int $wordreg_id Wordreg ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($wordreg_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($wordreg_id),
        ]);
    }

    /**
     * Creates a new wordregister model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new wordregister();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'wordreg_id' => $model->wordreg_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing wordregister model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $wordreg_id Wordreg ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($wordreg_id)
    {
        $model = $this->findModel($wordreg_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'wordreg_id' => $model->wordreg_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing wordregister model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $wordreg_id Wordreg ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($wordreg_id)
    {
        $this->findModel($wordreg_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the wordregister model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $wordreg_id Wordreg ID
     * @return wordregister the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($wordreg_id)
    {
        if (($model = wordregister::findOne(['wordreg_id' => $wordreg_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
