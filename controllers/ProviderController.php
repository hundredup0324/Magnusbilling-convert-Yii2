<?php

/**
 * Acoes do modulo "Provider".
 *
 * =======================================
 * ###################################
 * MagnusBilling
 *
 * @package MagnusBilling
 * @author Adilson Leffa Magnus.
 * @copyright Copyright (C) 2005 - 2025 MagnusSolution. All rights reserved.
 * ###################################
 *
 * This software is released under the terms of the GNU Lesser General Public License v2.1
 * A copy of which is available from http://www.gnu.org/copyleft/lesser.html
 *
 * Please submit bug reports, patches, etc to https://github.com/magnusbilling/mbilling/issues
 * =======================================
 * Magnusbilling.org <info@magnusbilling.org>
 * 04/01/2025
 */

namespace app\controllers;

use Yii;
use app\models\Provider;

use yii\console\Controller;
use yii\data\ActiveDataProvider;

class ProviderController extends Controller
{

    public function actionIndex()
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


        $this->layout = 'magnus_layout';
        return $this->render('index', [
            'dataProvider' => $provider,
            'gridColumns' => [],
            'searchModel' => []
        ]);
    }
}
