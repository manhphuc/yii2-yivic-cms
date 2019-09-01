<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 9/21/17 11:52 PM
 */

namespace yivic\yivicCms\assets\ionicons;

use yivic\yivicCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class IoniconsAsset
 * @package yivic\yivicCms
 * Manage css for Ionicons fonts
 * http://ionicons.com/
 */
class IoniconsAsset extends AssetBundle
{
	public $sourcePath = '@yivic/yivicCms/assets/ionicons/dist';
	public $css = [
		'css/ionicons.min.css'
	];

	public $js = [
	];
	public $depends = [
	];
}