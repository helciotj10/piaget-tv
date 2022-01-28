<?php

namespace backend\controllers;

use Yii;
use common\models\Top;
use common\models\TopSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * TopController implements the CRUD actions for Top model.
 */
class TopController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Top models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TopSearch();
        $searchModel->tipo = 'top';
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $searchModelp = new TopSearch();
        $searchModelp->tipo = 'proposta';
        $dataProviderp = $searchModelp->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'searchModelp' => $searchModelp,
            'dataProviderp' => $dataProviderp,
        ]);
    }

    /**
     * Displays a single Top model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Top model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Top();

        if ($model->load(Yii::$app->request->post())) {

            $model->fotop = UploadedFile::getInstance($model,'fotop');

            if($model->fotop != NULL){
              $model->fotop->saveAs('../../frontend/web/images/covers/'.$model->fotop->baseName.'.'.$model->fotop->extension);
              $model->imagem = 'images/covers/'.$model->fotop->baseName.'.'.$model->fotop->extension;
            }

            $model->save(false);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Top model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->fotop = UploadedFile::getInstance($model,'fotop');

            if($model->fotop != NULL){
              $model->fotop->saveAs('../../frontend/web/images/covers/'.$model->fotop->baseName.'.'.$model->fotop->extension);
              $model->imagem = 'images/covers/'.$model->fotop->baseName.'.'.$model->fotop->extension;
            }

            $model->save(false);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionVotar($id)
    {
        $model = $this->findModel($id);

        $model->votos++;
        
        $model->save();

        echo "<script>window.close();</script>";
    }

    /**
     * Deletes an existing Top model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Top model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Top the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Top::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
