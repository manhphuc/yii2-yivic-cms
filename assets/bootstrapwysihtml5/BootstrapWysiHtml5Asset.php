<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 9/21/17 11:52 PM
 */

namespace yivic\yivicCms\assets\bootstrapwysihtml5;

use yivic\yivicCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package yivic\yivicCms
 * Manage date picker resources using bootstrap
 */
class BootstrapWysiHtml5Asset extends AssetBundle
{
	public $sourcePath = '@yivic/yivicCms/assets/bootstrapwysihtml5/dist';
	public $css = [
		'bootstrap3-wysihtml5.min.css'
	];
    public $js = [
	    'bootstrap3-wysihtml5.all.min.js'
	];
	public $depends = [
        'yii\bootstrap\BootstrapAsset'
	];
}