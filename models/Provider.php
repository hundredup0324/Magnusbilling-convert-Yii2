<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Modelo para a tabela "Provider".
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
 * 25/06/2012
 */
class Provider extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pkg_provider';
    }

    /**
     * {@inheritdoc}
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provider_name'], 'required'],
            [['description'], 'string', 'max' => 100],
            [['credit_control', 'credit'], 'number'],
            [['provider_name'], 'unique'],
        ];
    }
}