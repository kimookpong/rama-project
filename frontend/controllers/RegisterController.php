<?php

namespace frontend\controllers;

use common\models\Cases;
use common\models\Register;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
            'query' => Register::find(),
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
    public function actionView($register_id)
    {
        return $this->render('view', [
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
        $model = new Register();
        $this->layout = 'reg';
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->validate()) {

                $modelCase = new Cases();
                $modelCase->name = $model->name;
                $modelCase->surname = $model->surname;
                $modelCase->provinces_id = $model->provinces_id;
                $modelCase->email = $model->email;
                $modelCase->tel = $model->tel;
                $modelCase->create_at = date('Y-m-d H:i:s');
                $modelCase->update_at = date('Y-m-d H:i:s');
                $modelCase->flagdel = 0;
                $modelCase->save(false);

                $model->case_id = $modelCase->caseid;
                $model->save();
                return $this->redirect(['ad8/create', 'reg_id' => $model->register_id]);
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
        if (($model = Register::findOne(['register_id' => $register_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
