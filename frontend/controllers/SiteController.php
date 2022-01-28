<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Album;
use common\models\Noticia;
use common\models\Banner;
use common\models\Top;
use common\models\Youtube;
use common\models\YoutubeSearch;
use common\models\Publicidade;
use common\models\Equipa;
use common\models\Rubricas;
use common\models\Programacao;
use common\models\Entrevistas;
use common\models\Popup;
use common\models\Cartaz;
use common\models\Avancado;
use common\models\Contacto;
use common\models\Indexitem;
use common\models\IndexitemSearch;
use common\models\Texto;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex($id=0,$pub=0)
    {
       /* $noticias = Noticia::find()->orderBy([
          'data' => SORT_DESC
        ])->limit(3)->all(); */

        $propostas = Top::find()->where(['tipo' => 'proposta'])->orderBy([
          'ordem' => SORT_ASC
        ])->limit(6)->all();

        $tops = Top::find()->where(['tipo' => 'top'])->orderBy([
          'votos' => SORT_DESC
        ])->limit(6)->all();

        /*$banners = Banner::find()->orderBy([
          'id' => SORT_DESC
        ])->all(); */

        if ($id) {
            $principal = Youtube::find()->where(['tipo' => 'recente', 'id' => $id])->one();
        }else {
            $principal = Youtube::find()->where(['tipo' => 'recente'])->one();
        }

        if ($pub) {
            $publicidade = Youtube::find()->where(['tipo' => 'publicidade', 'id' => $id])->one();
        }else {
            $publicidade = Youtube::find()->where(['tipo' => 'publicidade'])->one();
        }

        
        $recentes = Youtube::find()->where(['tipo' => 'recente'])->orderBy([
          'ordem' => SORT_ASC
        ])->all();
        $publicidades = Youtube::find()->where(['tipo' => 'publicidade'])->orderBy([
          'ordem' => SORT_ASC
        ])->all();

        //$promo = Youtube::find()->where(['efeito' => 'PROMO VIDEO'])->one();
        //$publicidade = Youtube::find()->where(['efeito' => 'PUBLICIDADE'])->one();
           

        $publicidadesBanner = Publicidade::find()->all();

        $videosdestaque = Youtube::find()->all();

        /*$famosos = Youtube::find()->where(['efeito' => 'FAMOSOS NA UNIPIAGET'])->one();
        $familia = Youtube::find()->where(['efeito' => 'FAMILIA PIAGET'])->one();
        $navegando = Youtube::find()->where(['efeito' => 'NAVEGANDO'])->one();
        $mulher = Youtube::find()->where(['efeito' => 'INFO PIAGET'])->one();*/


        $texto = Texto::find()->all();

        /*$conteudos = Indexitem::find()->where(['indexItemEstado' => 1])->orderBy([
          'indexItemOrdem' => SORT_ASC
        ])->all();

        //Adiciona conteudo na ficheiro
        $file = '../views/site/conteudo.php';
        $current = "";
        foreach ($conteudos as $conteudo) {
            if ($conteudo->indexItemEstado) {
                $current .= $conteudo->indexItemConteudo;
            }
        }
        file_put_contents($file, $current);

        

        $popup = Popup::find()->one();*/
        
        $avancado = Avancado::find()->one(); 
        $cartaz = Cartaz::find()->orderBy([
          'id' => SORT_DESC
        ])->limit($avancado->cartazLimiteDeSlide)->all();

        /*$numeropro = 1;
        $numerotop = 1; */

         $popup = Popup::find()->one();

        $numerotop = 1;
        $numeropro = 1;
        return $this->render('index', [
            'texto' => $texto,
            'principal' => $principal,
            'recentes' => $recentes,
            'numeropro' => $numeropro,
            'numerotop' => $numerotop,
            'publicidade' => $publicidade,
            'publicidades' => $publicidades,
            'publicidadesBanner' => $publicidadesBanner,
             /*'famosos' => $famosos,
            'familia' => $familia,
            'navegando' => $navegando,
            'mulher' => $mulher,*/
            'popup' => $popup,
            'videosdestaque' => $videosdestaque,
            'tops' => $tops,
            'propostas' => $propostas,
            'cartaz' => $cartaz,
            /*'famosos' => $famosos,
            'promo' => $promo,
            'publicidade' => $publicidade,
            'publicidades' => $publicidades,
            'numeropro' => $numeropro,
            'numerotop' => $numerotop,
            
            'cartaz' => $cartaz,
            'conteudos' => $conteudos,*/
        ] );
    }

    public function actionEquipa()
    { 
        $equipa = Equipa::find()->orderBy([
          'ordem' => SORT_ASC
        ])->all();
        return $this->render('djs', [
            'equipa' => $equipa,
        ]);
    }

    public function actionGaleria()
    {
        $albuns = Album::find()->where(['tipo' => 1])->orderBy([
          'data' => SORT_DESC
        ])->all();

        return $this->render('galeria', [
            'albuns' => $albuns,
        ]);
    }

    public function actionMaking()
    {
        $albuns = Album::find()->where(['tipo' => 2])->orderBy([
          'data' => SORT_DESC
        ])->all();

        return $this->render('making', [
            'albuns' => $albuns,
        ]);
    }

    public function actionAlbum($id)
    {
        //$this->layout = 'main2';
        
        $album = $this->findAlbum($id);

        return $this->render('gallery', [
            'album' => $album,
        ]);
    }

    public function actionVideo($id)
    {
        //$this->layout = 'main2';
        
        $album = $this->findAlbum($id);

        return $this->render('gallery', [
            'album' => $album,
        ]);
    }

    public function actionProgramacao()
    {
        $segundas = Programacao::find()->where(['semana' => 'Segunda'])->orderBy([
          'hora' => SORT_ASC
        ])->all();

        $tercas = Programacao::find()->where(['semana' => 'terca'])->orderBy([
          'hora' => SORT_ASC
        ])->all();

        $quartas = Programacao::find()->where(['semana' => 'quarta'])->orderBy([
          'hora' => SORT_ASC
        ])->all();

        $quintas = Programacao::find()->where(['semana' => 'quinta'])->orderBy([
          'hora' => SORT_ASC
        ])->all();

        $sextas = Programacao::find()->where(['semana' => 'sexta'])->orderBy([
          'hora' => SORT_ASC
        ])->all();

        $sabados = Programacao::find()->where(['semana' => 'sabado'])->orderBy([
          'hora' => SORT_ASC
        ])->all();

        $domingos = Programacao::find()->where(['semana' => 'domingo'])->orderBy([
          'hora' => SORT_ASC
        ])->all();

        return $this->render('schedule', [
            'segundas' => $segundas,
            'tercas' => $tercas,
            'quartas' => $quartas,
            'quintas' => $quintas,
            'sextas' => $sextas,
            'sabados' => $sabados,
            'domingos' => $domingos,
        ]);
    }

    public function actionNoticias()
    {
        $programas = Noticia::find()->where(['tipo' => 1])->orderBy([
          'data' => SORT_DESC
        ])->limit(20)->all();

        return $this->render('programas', [
            'programas' => $programas,
        ]);
    }

    public function actionPrograma($id,$video=0)
    {

        $numeropro=1;
        $programa = Noticia::find()->where(['id' => $id])->one();

        if ($video) {
            $principal = Youtube::find()->where(['programa_id' => $id, 'id'=>$video])->one();
        }else {
            $principal = Youtube::find()->where(['programa_id' => $id])->orderBy([
                'ordem' => SORT_ASC
            ])->one();
        }

        $searchModel = new YoutubeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['programa_id'=>$id]);
        $dataProvider->setSort(['defaultOrder' => ['ordem'=>SORT_ASC]]);

        return $this->render('programa', [
            'programa' => $programa,
            'dataProvider' => $dataProvider,
            'principal' => $principal,
            'numeropro' => $numeropro,
        ]);
    }

    public function actionServicos()
    {
        $servicos = Noticia::find()->where(['tipo' => 2])->orderBy([
          'data' => SORT_DESC
        ])->limit(20)->all();

        return $this->render('servicos', [
            'servicos' => $servicos,
        ]);
    }

    public function actionFaq()
    {
        return $this->render('faq');
    }

    public function actionRubricas()
    { 
        $rubricas = Rubricas::find()->where(['estado' => 1])->orderBy([
          'posicao' => SORT_ASC
        ])->all();

        $avancado = Avancado::find()->where(['id' => 1])->one();

        return $this->render('rubricas', [
            'rubricas' => $rubricas,
            'avancado' => $avancado,
        ]);
    }

    public function actionVotar($id)
    {
        $model = Top::find()->where(['id' => $id])->one();

        $model->votos++;
        
        $model->save();

        echo "<script>window.close();</script>";
    }

    public function actionHistorico($rubrica)
    { 
        $rubricas = Rubricas::find()->where(['tipo' => $rubrica])->orderBy([
          'id' => SORT_DESC
        ])->all();

        $avancado = Avancado::find()->where(['id' => 1])->one();
        $avancado->rubricasVerLancamentosAntigos = 0;

        return $this->render('rubricas', [
            'rubricas' => $rubricas,
            'avancado' => $avancado,
        ]);
    }

    public function actionFamosos()
    {
        $entrevista = Entrevistas::find()->orderBy([
          'data' => SORT_DESC
        ])->one();

        $entrevistas = Entrevistas::find()->orderBy([
          'data' => SORT_DESC
        ])->limit(4)->all();

        return $this->render('famosos', [
            'entrevista' => $entrevista,
            'entrevistas' => $entrevistas,
        ]);
    }

    public function actionEntrevista($id)
    {
        $entrevista = Entrevistas::find()->where(['id' => $id])->one();

        $entrevistas = Entrevistas::find()->orderBy([
          'id' => SORT_DESC
        ])->limit(4)->all();

        return $this->render('famosos', [
            'entrevista' => $entrevista,
            'entrevistas' => $entrevistas,
        ]);
    }

    public function actionTop($id)
    {
        $propostas = Top::find()->where(['tipo' => 'proposta'])->orderBy([
          'ordem' => SORT_ASC
        ])->limit(6)->all();
        
        $musica = Top::find()->where(['youtube' => $id])->one();

        return $this->render('top', [
            'musica' => $musica,
            'propostas' => $propostas,
        ]);
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContactos()
    {
        $contactos = Contacto::find()->all();
        return $this->render('contact', [
            'contactos' => $contactos,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }


    protected function findAlbum($id)
    {
        if (($album = Album::findOne($id)) !== null) {
            return $album;
        } else {
            throw new NotFoundHttpException('Esta pagina não existe.');
        }
    }
}
