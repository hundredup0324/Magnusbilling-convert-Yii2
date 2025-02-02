<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\models\GroupUser;
use app\models\Plan;

/**
 * Modelo para a tabela "User".
 * =======================================
 * ###################################
 * MagnusBilling
 *
 * @package MagnusBilling
 * @author Adilson Leffa Magnus.
 * @copyright Copyright (C) 2005 - 2023 MagnusSolution. All rights reserved.
 * ###################################
 *
 * This software is released under the terms of the GNU Lesser General Public License v3
 * A copy of which is available from http://www.gnu.org/copyleft/lesser.html
 *
 * Please submit bug reports, patches, etc to https://github.com/magnusbilling/mbilling/issues
 * =======================================
 * Magnusbilling.com <info@magnusbilling.com>
 * 19/09/2012
 */

class User extends ActiveRecord
{
    public $newPassword = null;

    public static function tableName()
    {
        return 'pkg_user';
    }

    public static function primaryKey()
    {
        return ['id'];
    }

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['id_user', 'id_group', 'id_plan', 'id_offer', 'active', 'enableexpire', 'expiredays',
              'typepaid', 'creditlimit', 'credit_notification', 'sipaccountlimit', 'restriction',
              'callingcard_pin', 'callshop', 'plan_day', 'active_paypal', 'boleto', 'boleto_day', 'calllimit', 'disk_space', 'id_group_agent',
              'transfer_dbbl_rocket_profit', 'transfer_bkash_profit', 'transfer_flexiload_profit', 'transfer_international_profit',
              'transfer_dbbl_rocket', 'transfer_bkash', 'transfer_flexiload', 'transfer_international',
              'transfer_bdservice_rate', 'transfer_show_selling_price', 'cpslimit',
              'restriction_use', 'credit_notification_daily', 'email_services', 'email_did', 'inbound_call_limit'], 'integer'],
            [['credit', 'contract_value'], 'number'],
            [['language', 'mix_monitor_format', 'calllimit_error'], 'string', 'max' => 5],
            [['zipcode', 'phone', 'mobile', 'vat'], 'string', 'max' => 20],
            [['city', 'state', 'country', 'loginkey'], 'string', 'max' => 40],
            [['lastname', 'firstname', 'redial', 'neighborhood'], 'string', 'max' => 50],
            [['company_website', 'dist'], 'string', 'max' => 100],
            [['address', 'email', 'email2', 'doc'], 'string', 'max' => 100],
            [['username'], 'string', 'min' => 4, 'max' => 20],
            [['description', 'prefix_local'], 'string', 'max' => 500],
            [['expirationdate', 'password', 'lastuse', 'company_name', 'commercial_name'], 'string', 'max' => 100],
            [['username'], 'unique', 'targetClass' => self::class, 'message' => 'This username has already been taken.'],
            [['username'], 'match', 'pattern' => '/^[a-zA-Z0-9]+$/', 'message' => 'Username must start with letters or numbers and contain no spaces.'],
            [['password'], 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (preg_match('/\s/', $this->$attribute)) {
            $this->addError($attribute, 'No spaces allowed in the password.');
        }

        if (in_array($this->$attribute, ['123456', '12345678', '012345'])) {
            $this->addError($attribute, 'Do not use simple or sequential passwords.');
        }

        if ($this->$attribute === $this->username) {
            $this->addError($attribute, 'Password cannot be the same as the username.');
        }
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $this->creationdate = date('Y-m-d H:i:s');
        }
        
        $this->contract_value = $this->contract_value ?: 0;
        
        return parent::beforeSave($insert);
    }

    // Relationship with GroupUser
    public function getGroup()
    {
        return $this->hasOne(GroupUser::class, ['id' => 'id_group']);
    }

    // Relationship with Plan
    public function getPlan()
    {
        return $this->hasOne(Plan::class, ['id' => 'id_plan']);
    }

    // Relationship with User (recursive relationship)
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }

  
}
