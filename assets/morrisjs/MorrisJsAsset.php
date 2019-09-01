<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 9/21/17 11:52 PM
 */

namespace yivic\yivicCms\assets\morrisjs;

use yivic\yivicCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package yivic\yivicCms
 * Manage morris.js assets for chart drawing
 */
class MorrisJsAsset extends AssetBundle
{
	public $sourcePath = '@yivic/yivicCms/assets/morrisjs/dist';
	public $css = [
		'morris.css'
	];

	public $js = [
	    'morris.min.js'
	];
	public $depends = [
	];
}