<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 10/11/17 11:21 AM
 */

namespace yivic\yivicCms\libs\override\web;

use yii\filters\AccessControl;

class NpControllerBackend extends NpController
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => null,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
}