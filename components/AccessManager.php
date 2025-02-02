<?php
namespace app\components;

use Yii;
use yii\base\Component;
use app\models\Sip;  // Assuming Sip is a model
use yii\db\Query;

/**
 * =======================================
 * ###################################
 * MagnusBilling
 *
 * @package MagnusBilling
 * @author Heitor Gianastasio Pipet de Oliveira.
 * @copyright Copyright (C) 2005 - 2023 MagnusSolution. All rights reserved.
 * ###################################
 *
 * This software is released under the terms of the GNU Lesser General Public License v2.1
 * A copy of which is available from http://www.gnu.org/copyleft/lesser.html
 *
 * Please submit bug reports, patches, etc to https://github.com/magnusbilling/mbilling/issues
 * =======================================
 * Magnusbilling.com <info@magnusbilling.com>
 *
 */

class AccessManager extends Component
{
    private static $instance;
    private static $config;

    private $module;
    private $action;

    private function __construct($module)
    {
        $this->setModule($module);
    }

    public static function getInstance($module)
    {
        if (is_null(self::$instance)) {
            self::$instance = new AccessManager($module);
            self::$config   = require Yii::getAlias('@app/config/permissions.php');
        } else {
            self::$instance->setModule($module);
        }
        return self::$instance;
    }

    private function getResult($canDoIt)
    {
        if (in_array($this->module, self::$config['only_admin']) && !Yii::$app->user->identity->isAdmin) {
            return false;
        }

        return $canDoIt;
    }

    public function canRead()
    {
        return $this->getResult(strpos($this->action, 'r') !== false);
    }

    public function canCreate()
    {
        return $this->getResult(strpos($this->action, 'c') !== false);
    }

    public function canUpdate()
    {
        return $this->getResult(strpos($this->action, 'u') !== false);
    }

    public function canDelete()
    {
        return $this->getResult(strpos($this->action, 'd') !== false);
    }

    private function setModule($module)
    {
        $this->module = $module;
        $this->action = Yii::$app->session->get('action.' . $module, '');
    }

    public function checkAccess($user, $pass)
    {
        $filterUser = '((s.username COLLATE utf8_bin = :key OR s.email COLLATE utf8_bin LIKE :key) AND UPPER(MD5(s.password)) = :key1)';
        $filterSip  = '(t.name COLLATE utf8_bin = :key AND UPPER(MD5(t.secret)) = :key1)';
        
        $modelSip = (new Query())
            ->select('*')
            ->from(['t' => 'pkg_sip'])
            ->leftJoin(['s' => 'pkg_user'], 't.id_user = s.id')
            ->where(['or', $filterUser, $filterSip])
            ->addParams([
                ':key' => trim($user),
                ':key1' => strtoupper(trim($pass)),
            ])
            ->one();
        
        return $modelSip;
    }

    public function checkAccessLogin($user, $pass)
    {
        $filterUser = '((s.username COLLATE utf8_bin = :key OR s.email COLLATE utf8_bin LIKE :key) AND UPPER(SHA1(s.password)) = :key1)';
        $filterSip  = '(t.name COLLATE utf8_bin = :key AND UPPER(SHA1(t.secret)) = :key1)';
        
        $modelSip = (new Query())
            ->select('*')
            ->from(['t' => 'pkg_sip'])
            ->leftJoin(['s' => 'pkg_user'], 't.id_user = s.id')
            ->where(['or', $filterUser, $filterSip])
            ->addParams([
                ':key' => trim($user),
                ':key1' => strtoupper(trim($pass)),
            ])
            ->one();
        
        return $modelSip;
    }
}
