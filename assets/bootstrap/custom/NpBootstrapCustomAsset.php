<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 10/11/17 1:27 PM
 */

namespace yivic\yivicCms\assets\bootstrap\custom;

use yivic\yivicCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class NpBootstrapCustomAsset
 * @package yivic\yivicCms\assets\bootstrap\custom
 */
class NpBootstrapCustomAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';
    public $js = [
        'js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}