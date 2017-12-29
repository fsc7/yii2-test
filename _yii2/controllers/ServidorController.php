<?php

namespace app\controllers;

use Yii;
use app\models\Servidor;
use app\models\ServidorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ServidorController implements the CRUD actions for Servidor model.
 */
class ServidorController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Servidor models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->redirect('/site/index');
        /*
        $searchModel = new ServidorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        */
    }

    /**
     * Lists all results in Servidor models.
     * @return mixed
     */
    public function actionResults()
    {
        $search = false;
        $searchModel = new ServidorSearch();
        $request = Yii::$app->request;
        if (!$request->get('page')){
          if ($searchModel->load($request->post())){
            $search = true;
          }
        }
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
          return $this->render('results', [
              'searchModel' => $searchModel,
              'dataProvider' => $dataProvider,
          ]);
    }

    /**
     * Displays a single Status model.
     * @param string $slug
     * @return mixed
     */
    public function actionSlug($slug)
    {
      $model = Servidor::find()->where(['slug'=>$slug])->one();
      if (!is_null($model)) {
          return $this->render('view', [
              'model' => $model,
          ]);
      } else {
        return $this->redirect('/servidor/index');
      }
    }

    /**
     * Displays a single Servidor model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Servidor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Servidor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Servidor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Servidor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Servidor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Servidor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Servidor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
