<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 9/21/17 11:52 PM
 */

namespace yivic\yivicCms\assets\icheck;

use yivic\yivicCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package yivic\yivicCms
 * Manage iCheck resources
 */
class IcheckAsset extends AssetBundle
{
	public $sourcePath = '@yivic/yivicCms/assets/icheck/dist';
	public $css = [
		'square/blue.css'
	];

	public $js = [
	    'icheck.min.js'
	];
	public $depends = [
	    // Need jQuery to be loaded first
	    'yii\web\JqueryAsset'
	];
}