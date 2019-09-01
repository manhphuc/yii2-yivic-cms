<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 9/21/17 11:52 PM
 */

namespace yivic\yivicCms\assets\bootstrapdaterangepicker;

use yivic\yivicCms\libs\override\web\NpAssetBundle as AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package yivic\yivicCms
 * Manage date picker resources using bootstrap
 */
class BootstrapDateRangePickerAsset extends AssetBundle
{
	public $sourcePath = '@yivic/yivicCms/assets/bootstrapdaterangepicker/dist';
	public $css = [
		'daterangepicker.css'
	];
    public $js = [
	    'daterangepicker.js'
	];
	public $depends = [
	    'yivic\yivicCms\assets\bootstrapdatepicker\BootstrapDatePickerAsset'
	];
}