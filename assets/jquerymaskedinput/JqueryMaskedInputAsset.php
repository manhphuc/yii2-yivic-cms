<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 9/21/17 11:29 PM
 */

namespace yivic\yivicCms\assets\jquerymaskedinput;

use yivic\yivicCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class JqueryPluginsAsset
 * @package yivic\yivicCms\assets\jquerymaskedinput
 * Handle masked input
 * http://digitalbush.com/projects/masked-input-plugin/
 */
class JqueryMaskedInputAsset extends AssetBundle
{
	public $sourcePath = '@yivic/yivicCms/assets/jquerymaskedinput/dist';
	public $css = [
	];

	public $js = [
	    'jquery.maskedinput.js',
	];
	public $depends = [
		// Need Jquery to be loaded first
		'yii\web\JqueryAsset',
	];
}