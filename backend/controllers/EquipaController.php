<?php

namespace backend\controllers;

use Yii;
use common\models\Equipa;
use common\models\EquipaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * EquipaController implements the CRUD actions for Equipa model.
 */
class EquipaController extends Controller
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
     * Lists all Equipa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EquipaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort->defaultOrder = ['ordem' => SORT_ASC];

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Equipa model.
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
     * Creates a new Equipa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Equipa();

        if ($model->load(Yii::$app->request->post())) {

            $model->img_file = UploadedFile::getInstances($model, 'img_file');

            if($model->img_file)
            {
                //$model->save();

                foreach ($model->img_file as $img_file) {
                    
                    

                    //$foto = new Fotografia();
                    //$foto->id_album = $model->id;
                    $rand = rand();

                    $img_file->saveAs('../../frontend/web/images/liveradio/equipa'.$rand.'.'.$img_file->extension);

                    $model->imagem = 'images/liveradio/equipa'.$rand.'.'.$img_file->extension;

                    $model->save(false);

                }
            }

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Equipa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->img_file = UploadedFile::getInstances($model, 'img_file');

            if($model->img_file)
            {
                //$model->save();

                foreach ($model->img_file as $img_file) {
                    
                    

                    //$foto = new Fotografia();
                    //$foto->id_album = $model->id;
                    $rand = rand();

                    $img_file->saveAs('../../frontend/web/equipa'.$rand.'.'.$img_file->extension);

                    $model->imagem = 'equipa'.$rand.'.'.$img_file->extension;

                    $model->save(false);

                }
            }

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Equipa model.
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
     * Finds the Equipa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Equipa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Equipa::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
