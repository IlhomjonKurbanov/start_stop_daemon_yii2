<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class BackgroundRunnerController extends Controller
{

    public $market_id;

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function options($actionID)
    {
        return [
            'market_id',
        ];
    }

    public function optionAliases()
    {
        return [
            'm' => 'market_id',
        ];
    }

    public function actionParseShop()
    {
        while (true) {
            /** Receive argument m from daemon*/
            $id = $this->market_id;

            /** Parse market */

            /** Get data from market API */

            /** Save to DB */

            sleep(100);
        }
    }

}
