<?php

namespace backend\controllers;

use common\models\Cases;
use common\models\Files;
use common\models\Register;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * RegisterController implements the CRUD actions for register model.
 */
class RegisterController extends Controller
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
     * Lists all register models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Cases::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'register_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single register model.
     * @param int $register_id Register ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($case_id)
    {
        $modelFile = new Files();
        $modelFile->case_id = $case_id;
        $modelFile->user_id = Yii::$app->user->identity->id;
        $modelFile->create_at = date('Y-m-d h:i:s');
        $modelFile->flagdel = 0;
        if ($this->request->isPost) {
            if ($modelFile->load($this->request->post())) {
                $modelFile->files_part = $modelFile->upload($modelFile, 'files_part');
                $modelFile->save(false);
                return $this->redirect(['view', 'case_id' => $case_id]);
            }
        }
        return $this->render('view', [
            'model' => Cases::findOne($case_id),
            'modelFile' => $modelFile,
        ]);
    }

    public function actionFullpaper($register_id)
    {
        return $this->render('fullpaper', [
            'model' => $this->findModel($register_id),
        ]);
    }
    /**
     * Creates a new register model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new register();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'register_id' => $model->register_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing register model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $register_id Register ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($register_id)
    {
        $model = $this->findModel($register_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'register_id' => $model->register_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing register model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $register_id Register ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($register_id)
    {
        $this->findModel($register_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the register model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $register_id Register ID
     * @return register the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($register_id)
    {
        if (($model = register::findOne(['register_id' => $register_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
