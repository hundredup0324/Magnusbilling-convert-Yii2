<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\LoginForm;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\helpers\Url;

use app\models\User;
use app\models\LogUsers;
use yii\db\Expression;
use yii\db\Query;

use app\components\AccessManager;

use rahulabs\widgets\toastr\Notification;



class AuthenticationController extends Controller
{
    private $menu = [];

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

    public function actionIndex()
    {
        if(Yii::$app->session->get('logged')){
            return $this->redirect(['velzon/index']);
        } else{
            $this->layout = 'magnus_layout';
            return $this->render('login');
        }
        // $this->layout = 'magnus_layout';
        // return $this->render('login');
       
    }

    public function actionLogin()
    {
        $request = Yii::$app->request;
        $data = json_decode($request->getRawBody(), true);
        $user = isset($data['user']) ? $data['user'] : null;
        $password = isset($data['password']) ? $data['password'] : null;



        $this->verifyLogin();

        if (!Yii::$app->request->get('remote')) {
            $modelSip = AccessManager::getInstance('authentication')->checkAccessLogin($user, $password);
            if ($modelSip) {
                $user = $modelSip->idUser->username;
                $password = $modelSip->idUser->password;
            }
        }

        $modelUser = (new Query())
            ->select('*')  // Or select specific columns
            ->from('pkg_user')  // Table name
            ->where(['username' => $user])  // Condition
            ->one();



        if (isset($modelUser->is_group->idUserType->id) && $modelUser->is_group->idUserType->id == 1) {
            $condition = "username COLLATE utf8_bin = :user AND UPPER(password) COLLATE utf8_bin = :pass ";
        } else {
            $condition = "((username COLLATE utf8_bin = :user OR email LIKE :user) 
                               AND (password COLLATE utf8_bin = :pass OR UPPER(SHA1(password)) COLLATE utf8_bin = :pass)) ";

            // Check if sipuser_login is enabled in the config and append to the condition
            if (isset($this->config['global']['sipuser_login']) && $this->config['global']['sipuser_login'] == 1) {
                $condition .= " OR (id = (SELECT id_user 
                                              FROM pkg_sip 
                                              WHERE name COLLATE utf8_bin = :user 
                                              AND UPPER(SHA1(secret)) COLLATE utf8_bin = :pass))";
            }
        }


        $modelUser = User::find()
            ->where(['username' => $user, 'password' => $password])  // Condition
            ->one();


        $loginkey = $request->post('loginkey', false);

        if (strlen($loginkey) > 5 && $loginkey == $modelUser['loginkey']) {
            $modelUser->active = 1;
            $modelUser->loginkey = '';
            $modelUser->save();

            $mail = new Mail(Mail::$TYPE_SIGNUPCONFIRM, $modelUser->id);
            $mail->send();
        }


        if (!$modelUser) {
            Yii::$app->session->set('logged', false);
            return $this->asJson([
                'success' => false,
                'msg' => 'Username and password combination is invalid',
            ]);
        }


        $this->checkCaptcha();

        if ($modelUser->active == 0) {
            Yii::$app->session->set('logged', false);
            return $this->asJson([
                'success' => false,
                'msg' => 'Username is disabled',
            ]);
        }



        $idUserType = $modelUser->group->userType->id;
        


        Yii::$app->session->set('isAdmin', $idUserType == 1);
        Yii::$app->session->set('isAgent', $idUserType == 2);
        Yii::$app->session->set('isClient', $idUserType == 3);
        Yii::$app->session->set('isClientAgent', isset($modelUser->id_user) && $modelUser->id_user > 1);
        Yii::$app->session->set('id_plan', $modelUser->id_plan);
        Yii::$app->session->set('credit', $modelUser['credit'] ?? 0);
        Yii::$app->session->set('username', $modelUser['username']);
        Yii::$app->session->set('logged', true);
        Yii::$app->session->set('id_user', $modelUser['id']);
        Yii::$app->session->set('id_agent', $modelUser['id_user'] ?? 1);
        Yii::$app->session->set('name_user', $modelUser->firstname . ' ' . $modelUser->lastname);
        Yii::$app->session->set('id_group', $modelUser->id_group);
        Yii::$app->session->set('user_type', $idUserType);
        Yii::$app->session->set('systemName', $_SERVER['SCRIPT_FILENAME']);
        Yii::$app->session->set('session_start', time());
        $userCount = User::find()
            ->where(['!=', 'credit', 0])
            ->count();
        Yii::$app->session->set('userCount', $userCount);
        Yii::$app->session->set('hidden_prices', $modelUser->group->hidden_prices);
        Yii::$app->session->set('hidden_batch_update', $modelUser->group->hidden_batch_update);

        // Google Authenticator logic here (same as the Yii1 version but using Yii2 session)

        if (Yii::$app->request->get('securityLogin')) {
            return $this->redirect('../../../');
        }

        if (Yii::$app->request->get('remote')) {
            return $this->redirect('../..');
        }
        Yii::$app->session->setFlash('success', 'Welcome to login!');
        return $this->asJson([
            'success' => Yii::$app->session->get('username'),
            'msg' => Yii::$app->session->get('name_user'),
        ]);
        // return $this->redirect(['authentication/index']); 
    }

    private function mountMenu()
    {
        $modelGroupModule = GroupModule::find()->getGroupModule(Yii::$app->session->get('id_group'), Yii::$app->session->get('isClient'), Yii::$app->session->get('id_user'));

        Yii::$app->session->set('action', $this->getActions($modelGroupModule));
        Yii::$app->session->set('menu', $this->getMenu($modelGroupModule));
    }

    public function actionLogoff()
    {
        Yii::$app->session->destroy();   // Destroy the session
        Yii::$app->session->close();
           // Close the session to remove the session cookie
        return $this->redirect(['authentication/index']); 
    }

    public function actionCheck()
    {
        if (Yii::$app->session->get('logged')) {
            $this->mountMenu();
            $modelGroupUserGroup = GroupUserGroup::find()->where(['id_group_user' => Yii::$app->session->get('id_group')])->count();
            $modelGroupUser = GroupUser::findOne(Yii::$app->session->get('id_group'));

            Yii::$app->session->set('adminLimitUsers', $modelGroupUserGroup);
            Yii::$app->session->set('licence', $this->config['global']['licence']);
            Yii::$app->session->set('email', $this->config['global']['admin_email']);
            Yii::$app->session->set('currency', $this->config['global']['base_currency']);
            Yii::$app->session->set('language', $this->config['global']['base_language']);
            Yii::$app->session->set('decimal', $this->config['global']['decimal_precision']);
            Yii::$app->session->set('base_country', $this->config['global']['base_country']);
            Yii::$app->session->set('version', $this->config['global']['version']);
            Yii::$app->session->set('asterisk_version', $this->config['global']['asterisk_version']);
            Yii::$app->session->set('social_media_network', $this->config['global']['social_media_network']);
            Yii::$app->session->set('show_playicon_cdr', $this->config['global']['show_playicon_cdr']);
        } else {
            // Set default session values if not logged in
        }

        return $this->asJson([
            'success' => true,
        ]);
    }


    public function actionGoogleAuthenticator()
    {
        require_once 'lib/GoogleAuthenticator/GoogleAuthenticator.php';

        $ga = new PHPGangsta_GoogleAuthenticator();
        $modelUser = User::findOne(Yii::$app->session->get('id_user'));

        $secret = $modelUser->google_authenticator_key;
        $oneCodePost = Yii::$app->request->post('oneCode');

        $checkResult = $ga->verifyCode($secret, $oneCodePost, 2);

        if ($checkResult) {
            $success = true;
            Yii::$app->session->set('checkGoogleAuthenticator', false);
            $modelUser->googleAuthenticator_enable = 1;
            $modelUser->save();
            MagnusLog::insertLOG(1, 'Username Login on the panel - User ' . Yii::$app->session->get('username'));
        } else {
            $success = false;
        }

        return $this->asJson([
            'success' => $success,
            'msg' => Yii::$app->session->get('name_user'),
        ]);
    }

    public function actionChangePassword()
    {
        $passwordChanged = false;
        $id_user = Yii::$app->session->get('id_user');
        $currentPassword = Yii::$app->request->post('current_password');
        $newPassword = Yii::$app->request->post('password');
        $isClient = Yii::$app->session->get('isClient');
        $errors = '';

        $modelUser = User::find()
            ->where(['id' => $id_user, 'password' => $currentPassword])
            ->one();

        if ($modelUser) {
            try {
                $modelUser->password = $newPassword;
                $passwordChanged = $modelUser->save();
            } catch (\Exception $e) {
                $errors = $this->getErrorMySql($e);
            }

            $msg = $passwordChanged ? Yii::t('yii', 'Password change success!') : $errors;
        } else {
            $msg = Yii::t('yii', 'Current Password incorrect.');
        }

        return $this->asJson([
            'success' => $passwordChanged,
            'msg' => $msg,
        ]);
    }

    public function actionImportLogo()
    {
        if (Yii::$app->request->isPost && UploadedFile::getInstanceByName('logo')) {
            $logo = UploadedFile::getInstanceByName('logo');
            $uploaddir = Yii::getAlias('@webroot/resources/images/');
            $uploadfile = Yii::$app->session->get('isAgent') ? $uploaddir . 'logo_custom_' . Yii::$app->session->get('id_user') . '.png' : $uploaddir . 'logo_custom.png';

            if (Util::valid_extension($logo->name, ['png'])) {
                $logo->saveAs($uploadfile);
            }
        }

        return $this->asJson([
            'success' => true,
            'msg' => 'Refresh the system to see the new logo',
        ]);
    }

    public function actionImportWallpapers()
    {
        if (Yii::$app->request->isPost && UploadedFile::getInstanceByName('wallpaper')) {
            $wallpaper = UploadedFile::getInstanceByName('wallpaper');
            $uploaddir = Yii::getAlias('@webroot/resources/images/wallpapers/');
            $uploadfile = $uploaddir . 'Customization.jpg';

            if (Util::valid_extension($wallpaper->name, ['jpg'])) {
                $wallpaper->saveAs($uploadfile);

                $modelConfiguration = Configuration::find()->where(['config_key' => 'wallpaper'])->one();
                if ($modelConfiguration) {
                    $modelConfiguration->config_value = 'Customization';
                    try {
                        $success = $modelConfiguration->save();
                        $msg = Yii::t('yii', 'Refresh the system to see the new logo');
                    } catch (\Exception $e) {
                        $success = false;
                        $msg = $this->getErrorMySql($e);
                    }
                }
            }
        }

        return $this->asJson([
            'success' => $success ?? false,
            'msg' => $msg ?? 'error',
        ]);
    }

    public function actionImportLoginBackground()
    {
        $success = false;
        $msg = 'error';

        if (Yii::$app->request->isPost && UploadedFile::getInstanceByName('loginbackground')) {
            $background = UploadedFile::getInstanceByName('loginbackground');
            $uploadfile = Yii::getAlias('@webroot/resources/images/lock-screen-background.jpg');

            try {
                $background->saveAs($uploadfile);
                $success = true;
                $msg = 'Refresh the system to see the new wallpaper';
            } catch (\Exception $e) {
                $msg = 'Error saving the file';
            }
        }

        // Copy to different folders (to be adjusted based on your server structure)
        $colors = ['black', 'blue', 'gray', 'orange', 'purple', 'red', 'yellow', 'green'];
        foreach ($colors as $color) {
            $types = ['crisp', 'neptune', 'triton'];
            foreach ($types as $type) {
                copy(Yii::getAlias('@webroot/resources/images/lock-screen-background.jpg'), Yii::getAlias("@webroot/$color-$type/resources/images/lock-screen-background.jpg"));
            }
        }

        return $this->asJson([
            'success' => $success,
            'msg' => $msg,
        ]);
    }

    public function actionForgetPassword()
    {
        $email = Yii::$app->request->post('email');
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $modelUser = User::find()->where(['email' => $email])->all();

            if (count($modelUser) > 1) {
                $success = false;
                $msg = "Email in use more than 1 account, contact administrator";
            } elseif (count($modelUser) == 1) {
                if ($modelUser[0]->is_group->idUserType->id == 1) {
                    $success = false;
                    $msg = "You can't request admin password";
                } else {
                    $mail = new Mail(Mail::$TYPE_FORGETPASSWORD, $modelUser[0]->id);
                    try {
                        $mail->send();
                    } catch (\Exception $e) {
                        // handle error
                    }
                    $success = true;
                    $msg = "Your password was sent to your email";
                }
            } else {
                $success = false;
                $msg = "Email not found";
            }
        } else {
            $success = false;
            $msg = "Email not found";
        }

        return $this->asJson([
            'success' => $success,
            'msg' => $msg,
        ]);
    }

    public function actionCancelCreditNotification()
    {
        if (Yii::$app->request->get('key') && Yii::$app->request->get('id')) {
            $modelUser = User::findOne(Yii::$app->request->get('id'));

            if ($modelUser && sha1($modelUser->id . $modelUser->username . $modelUser->password) == Yii::$app->request->get('key')) {
                $modelUser->credit_notification = '-1';
                $modelUser->save();
                return '<br><center><font color=green>' . Yii::t('zii', "Success") . '</font></center>';
            }
        }
    }

    public function verifyLogin()
    {
        $modelLogUsers = LogUsers::find()
            ->where(['ip' => Yii::$app->request->getUserIP()])
            ->andWhere(['>', 'date', new Expression('DATE_SUB(NOW(), INTERVAL 5 MINUTE)')])
            ->orderBy(['id' => SORT_DESC])
            ->limit(3)
            ->all();

        if (count($modelLogUsers) >= 3) {
            $invalid = 0;
            foreach ($modelLogUsers as $log) {
                if (preg_match('/Username and password combination is invalid/', $log->description)) {
                    $invalid++;
                }
            }

            if ($invalid >= 3) {
                Yii::$app->session->set('logged', false);
                Yii::info('IP blocked after 3 failing attempts. IP: ' . Yii::$app->request->getUserIP(), __METHOD__);
                MagnusLog::insertLOG(1, 'IP blocked after 3 failing attempts. IP: ' . Yii::$app->request->getUserIP());

                return $this->asJson([
                    'success' => false,
                    'msg' => Yii::t('zii', "IP blocked after 3 failing attempts.") . "<br><b>" . Yii::t('zii', "Wait 5 minutes and try again.") . "</b>" . "<br> IP: " . Yii::$app->request->getUserIP(),
                ]);
            }
        }
    }

    public function checkCaptcha()
    {
        if (!empty($this->config['global']['reCaptchaSecret']) && !empty($this->config['global']['reCaptchaKey'])) {
            $post_data = http_build_query([
                'secret' => $this->config['global']['reCaptchaSecret'],
                'response' => Yii::$app->request->post('key'),
            ]);

            $opts = [
                'http' => [
                    'method' => 'POST',
                    'header' => 'Content-type: application/x-www-form-urlencoded',
                    'content' => $post_data,
                ],
            ];

            $context = stream_context_create($opts);
            $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);

            $response = json_decode($response);

            if ($response->success !== true || $response->hostname !== Yii::$app->request->getHostName()) {
                return $this->asJson([
                    'success' => false,
                    'msg' => 'Invalid captcha. Refresh the page to generate new code',
                ]);
            }
        }
    }
}
