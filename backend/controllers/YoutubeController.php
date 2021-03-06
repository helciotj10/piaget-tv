<?php

namespace backend\controllers;

use Yii;
use common\models\Youtube;
use common\models\YoutubeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * YoutubeController implements the CRUD actions for Youtube model.
 */
class YoutubeController extends Controller
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
     * Lists all Youtube models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new YoutubeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //$dataProvider->query->andWhere(['tipo'=>'recente']);
        //$dataProvider->setSort(['defaultOrder' => ['ordem'=>SORT_ASC]]);

       /* $searchModelp = new YoutubeSearch();
        $dataProviderp = $searchModelp->search(Yii::$app->request->queryParams);
        $dataProviderp->query->andWhere(['tipo'=>'publicidade']);
        $dataProviderp->setSort(['defaultOrder' => ['ordem'=>SORT_ASC]]);*/

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            //'searchModelp' => $searchModelp,
            //'dataProviderp' => $dataProviderp,
        ]);
    }

    /**
     * Displays a single Youtube model.
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
     * Creates a new Youtube model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Youtube();

        if ($model->load(Yii::$app->request->post())) {

           // $model->tipo = $tipo;

            $model->fotop = UploadedFile::getInstance($model,'fotop');

            if($model->fotop != NULL){
              $model->fotop->saveAs('../../frontend/web/images/covers/'.$model->fotop->baseName.'.'.$model->fotop->extension);
              $model->foto = 'images/covers/'.$model->fotop->baseName.'.'.$model->fotop->extension;
            }

            $model->save(false);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionPrograma($id)
    {
        $model = new Youtube();

        if ($model->load(Yii::$app->request->post())) {

            $model->programa_id = $id;

            $model->fotop = UploadedFile::getInstance($model,'fotop');

            if($model->fotop != NULL){
              $model->fotop->saveAs('../../frontend/web/images/covers/'.$model->fotop->baseName.'.'.$model->fotop->extension);
              $model->foto = 'images/covers/'.$model->fotop->baseName.'.'.$model->fotop->extension;
            }

            $model->save(false);

            return $this->redirect(['noticia/view', 'id' => $model->programa_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Youtube model.
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
              $model->foto = 'images/covers/'.$model->fotop->baseName.'.'.$model->fotop->extension;
            }

            $model->save(false);

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Youtube model.
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
     * Finds the Youtube model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Youtube the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Youtube::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
