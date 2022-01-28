<?php

namespace backend\controllers;

use Yii;
use common\models\Programacao;
use common\models\ProgramacaoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProgramacaoController implements the CRUD actions for Programacao model.
 */
class ProgramacaoController extends Controller
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
     * Lists all Programacao models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProgramacaoSearch();
        $searchModel->semana = 'Segunda';
        $dataProviderSegunda = $searchModel->search(Yii::$app->request->queryParams);
        $searchModel->semana = 'Terca';
        $dataProviderTerca = $searchModel->search(Yii::$app->request->queryParams);
        $searchModel->semana = 'Quarta';
        $dataProviderQuarta = $searchModel->search(Yii::$app->request->queryParams);
        $searchModel->semana = 'Quinta';
        $dataProviderQuinta = $searchModel->search(Yii::$app->request->queryParams);
        $searchModel->semana = 'Sexta';
        $dataProviderSexta = $searchModel->search(Yii::$app->request->queryParams);
        $searchModel->semana = 'Sabado';
        $dataProviderSabado = $searchModel->search(Yii::$app->request->queryParams);
        $searchModel->semana = 'Domingo';
        $dataProviderDomingo = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProviderSegunda' => $dataProviderSegunda,
            'dataProviderTerca' => $dataProviderTerca,
            'dataProviderQuarta' => $dataProviderQuarta,
            'dataProviderQuinta' => $dataProviderQuinta,
            'dataProviderSexta' => $dataProviderSexta,
            'dataProviderSabado' => $dataProviderSabado,
            'dataProviderDomingo' => $dataProviderDomingo,
        ]);
    }

    /**
     * Displays a single Programacao model.
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
     * Creates a new Programacao model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Programacao();

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
     * Updates an existing Programacao model.
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

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Programacao model.
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
     * Finds the Programacao model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Programacao the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Programacao::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
