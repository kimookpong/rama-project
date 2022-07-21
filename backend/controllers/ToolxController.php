<?php

namespace backend\controllers;

use common\models\Toolx;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Testandlimit;
/**
 * ToolxController implements the CRUD actions for toolx model.
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
     * Lists all toolx models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => toolx::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'toolx_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single toolx model.
     * @param int $toolx_id Toolx ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($toolx_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($toolx_id),
        ]);
    }

    /**
     * Creates a new toolx model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new toolx();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'toolx_id' => $model->toolx_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing toolx model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $toolx_id Toolx ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($toolx_id)
    {
        $model = $this->findModel($toolx_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'toolx_id' => $model->toolx_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

 public function actionShodowingb($toolx_id)
    {
        $model = $this->findModel($toolx_id);
        if(isset($_POST['userrecord_qustion1'])){
        $modelttl =  Testandlimit::find()->where(['register_id' => $model->register_id])->one();
        $modelttl->userrecord_qustion1 = $_POST['userrecord_qustion1'];
        $modelttl->userrecord_qustion2 = $_POST['userrecord_qustion2'];
        $modelttl->userrecord_qustion3 = $_POST['userrecord_qustion3'];
        $modelttl->voicequality1 = $_POST['voicequality1'];
        $modelttl->voicequality2 = $_POST['voicequality2'];
        $modelttl->voicequality3 = $_POST['voicequality3'];
        $modelttl->user_id = $_POST['user_id'];
        $modelttl->save(false);
        }

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['shodowingb', 'toolx_id' => $model->toolx_id]);
        }

        return $this->render('shodowingb', [
            'model' => $model,
        ]);
    }

    public function actionEntering($toolx_id)
    {
        $model = $this->findModel($toolx_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['register/index', 'toolx_id' => $model->toolx_id]);
        }

        return $this->render('entering', [
            'model' => $model,
        ]);
    }
    /**
     * Deletes an existing toolx model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $toolx_id Toolx ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($toolx_id)
    {
        $this->findModel($toolx_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the toolx model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $toolx_id Toolx ID
     * @return toolx the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($toolx_id)
    {
        if (($model = toolx::findOne(['toolx_id' => $toolx_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
