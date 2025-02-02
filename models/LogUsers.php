<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Modelo para a tabela "pkg_log".
 * =======================================
 * MagnusBilling
 *
 * @package MagnusBilling
 * @author Adilson Leffa Magnus
 * @copyright Copyright (C) 2005 - 2023 MagnusSolution. All rights reserved.
 *
 * This software is released under the terms of the GNU Lesser General Public License v3.
 * A copy is available from http://www.gnu.org/copyleft/lesser.html.
 *
 * Please submit bug reports, patches, etc. to https://github.com/magnusbilling/mbilling/issues.
 * =======================================
 * Magnusbilling.com <info@magnusbilling.com>
 * 19/09/2012
 */
class LogUsers extends ActiveRecord
{
    /**
     * @return string the associated database table name.
     */
    public static function tableName()
    {
        return 'pkg_log';
    }

    /**
     * @return string[] the primary key(s) for this table.
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * @return array the validation rules for model attributes.
     */
    public function rules()
    {
        return [
            [['id_user', 'id_log_actions'], 'integer'],
            [['date'], 'string', 'max' => 100],
            [['ip'], 'string', 'max' => 16],
            [['description'], 'safe'],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery the relationships.
     */
    public function getIdUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }

    public function getIdLogActions()
    {
        return $this->hasOne(LogActions::class, ['id' => 'id_log_actions']);
    }
}
