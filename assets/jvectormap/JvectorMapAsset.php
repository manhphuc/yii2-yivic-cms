<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 9/21/17 11:52 PM
 */

namespace yivic\yivicCms\assets\jvectormap;

use yivic\yivicCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package yivic\yivicCms
 * Manage jVectorMap http://jvectormap.com/
 */
class JvectorMapAsset extends AssetBundle
{
	public $sourcePath = '@yivic/yivicCms/assets/jvectormap/dist';
	public $css = [
	    'jquery-jvectormap.css'
	];

	public $js = [
	    'jquery-jvectormap.js'
	];
	public $depends = [
	    'yii\web\JqueryAsset'
	];
}