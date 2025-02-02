<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\models\UserType;


/**
 * Model for the "group_user" table.
 * =======================================
 * MagnusBilling
 *
 * @package MagnusBilling
 * @author Adilson
 * @copyright Copyright (C) 2005 - 2023 MagnusSolution.
 * =======================================
 *
 * This software is released under the GNU Lesser General Public License v3.
 * A copy is available at http://www.gnu.org/copyleft/lesser.html.
 *
 * Please report issues at https://github.com/magnusbilling/mbilling/issues
 *
 * MagnusBilling <info@magnusbilling.com>
 * 15/04/2013
 */

/**
 * This is the model class for table "pkg_group_user".
 *
 * @property int $id
 * @property string $name
 * @property int|null $id_user_type
 * @property int|null $hidden_prices
 * @property int|null $hidden_batch_update
 * @property string|null $user_prefix
 *
 * @property Module[] $modules
 * @property GroupModule[] $groupModules
 * @property User[] $users
 * @property UserType $userType
 */
class GroupUser extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pkg_group_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['id_user_type', 'hidden_prices', 'hidden_batch_update'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['user_prefix'], 'string', 'max' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getModules()
    {
        return $this->hasMany(Module::class, ['id' => 'id_module'])
            ->viaTable('group_module', ['id_group' => 'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupModules()
    {
        return $this->hasMany(GroupModule::class, ['id_group' => 'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function getUsers()
    {
        return $this->hasMany(User::class, ['id_group' => 'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function getUserType()
    {
        return $this->hasOne(UserType::class, ['id' => 'id_user_type']);
    }
}