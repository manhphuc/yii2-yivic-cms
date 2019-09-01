<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 9/29/17 2:25 PM
 */

namespace yivic\yivicCms\assets\adminlte;

use yivic\yivicCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class AdminLteAsset
 * @package yivic\yivicCms\assets\adminlte
 * Manage css, js, fonts for AdminLte theme
 * https://github.com/almasaeed2010/AdminLTE
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@yivic/yivicCms/assets/adminlte/dist';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
        'css/adminlte-custom.css',
    ];

    public $js = [
        'js/adminlte.min.js'
    ];
    public $depends = [
    ];
}
