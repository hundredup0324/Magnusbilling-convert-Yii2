<?php

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Response;
use yii\web\Controller;
use app\models\LoginForm;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\base\ViewNotFoundException;
use yii\web\JsExpression;
use yii\data\ActiveDataProvider;
use app\models\Provider;



class RouteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
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

    public function actionProvider()
    {
       
        $query = Provider::find();

    $provider = new ActiveDataProvider([
        'query' => $query,
        'pagination' => [
            'pageSize' => 10,
        ],
        'sort' => [
            'defaultOrder' => [
                'id' => SORT_DESC,
                'provider_name' => SORT_ASC,
            ]
        ],
    ]);

    // Extract data from ActiveDataProvider
    $data = array_map(function ($model) {
        return $model->attributes;
    }, $provider->getModels());

    $this->layout = 'magnus_layout';

    return $this->render('provider', [
        'dataProvider' => $data,  // Pass extracted data
        'gridColumns' => [],
        'searchModel' => []
    ]);
    }
    public function actionTrunk()
    {
       
        $this->layout = 'magnus_layout';
        return $this->render('trunk');
    }

    public function actionRoot($action = '')
    {

        $this->layout = 'magnus_layout';
        try {
            return $this->render($action);
        } catch (ViewNotFoundException $e) {
            throw new NotFoundHttpException();
        }
    }
}
