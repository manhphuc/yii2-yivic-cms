<?php
/**
 * Created by PhpStorm.
 * Author: manhphucofficial@yahoo.com
 * Date time: 10/10/17 10:34 PM
 */

namespace yivic\yivicCms\libs\helpers;

use yivic\yivicCms\libs\helpers\NpBaseHelper as BaseHelper;

class NpSecurityHelper extends BaseHelper
{
    /**
     * @param string $strToHash string to be hashed
     * @param string $salt salt to add extra difficulty
     * @return string
     */
    public static function hashString($strToHash, $salt = '')
    {
        return md5($strToHash . $salt);
    }
}