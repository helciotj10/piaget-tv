<?php

namespace backend\controllers;

use Yii;
use common\models\Album;
use backend\controllers\AlbumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Fotografia;
use yii\web\UploadedFile;

/**
 * AlbumController implements the CRUD actions for Album model.
 */
class AlbumController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index', 'making', 'create', 'view', 'delete', 'update','upload', 'deletefoto'],
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
        ];
    }

    /**
     * Lists all Album models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlbumSearch();
        $searchModel->tipo = 1;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionMaking()
    {
        $searchModel = new AlbumSearch();
        $searchModel->tipo = 2;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Album model.
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
     * Creates a new Album model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Album();

        if ($model->load(Yii::$app->request->post())) {

            $model->img_file = UploadedFile::getInstances($model, 'img_file');

            if($model->img_file)
            {
                $model->save();

                foreach ($model->img_file as $img_file) {
                    
                    

                    $foto = new Fotografia();
                    $foto->id_album = $model->id;
                    $rand = rand();

                    //pmd virtual directory de IIS ficheiro 
                    $img_file->saveAs('../../frontend/web/images/img'.$rand.'.'.$img_file->extension);

                    $foto->img = 'images/img'.$rand.'.'.$img_file->extension;

                    $foto->save();

                }
            }

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Album model.
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
                $model->save();

                foreach ($model->img_file as $img_file) {
                    
                    

                    $foto = new Fotografia();
                    $foto->id_album = $model->id;
                    $rand = rand();

                    $img_file->saveAs('../../frontend/web/images/img'.$rand.'.'.$img_file->extension);

                    $foto->img = 'images/img'.$rand.'.'.$img_file->extension;

                    $foto->save();

                }
            }

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDeletefoto($id)
    {
        Fotografia::findOne($id)->delete();

        return $this->redirect(['view', 'id' => $id]);
    }

    /**
     * Deletes an existing Album model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        foreach ($model->fotografias as $foto) {
            
            $foto->delete();

        }

        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Album model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Album the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Album::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
