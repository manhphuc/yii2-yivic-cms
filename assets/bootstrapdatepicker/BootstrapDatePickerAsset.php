<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 9/21/17 11:52 PM
 */

namespace yivic\yivicCms\assets\bootstrapdatepicker;

use yivic\yivicCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package yivic\yivicCms
 * Manage date picker resources using bootstrap
 */
class BootstrapDatePickerAsset extends AssetBundle
{
	public $sourcePath = '@yivic/yivicCms/assets/bootstrapdatepicker/dist';
	public $css = [
		'css/bootstrap-datepicker.min.css'
	];
    public $js = [
	    'js/bootstrap-datepicker.min.js'
	];
	public $depends = [
	    'yii\bootstrap\BootstrapAsset'
	];
}