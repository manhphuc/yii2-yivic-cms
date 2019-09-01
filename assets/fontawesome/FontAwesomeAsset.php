<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 9/21/17 11:52 PM
 */

namespace yivic\yivicCms\assets\fontawesome;

use yivic\yivicCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package yivic\yivicCms
 * Manage Font Awesome resources
 */
class FontAwesomeAsset extends AssetBundle
{
	public $sourcePath = '@yivic/yivicCms/assets/fontawesome/dist';
	public $css = [
		'css/font-awesome.min.css'
	];

	public $js = [
	];
	public $depends = [
	];
}