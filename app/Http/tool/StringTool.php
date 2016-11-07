<?php
namespace App\Http\tool;
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-07
 * Time: 20:24
 */

class StringTool{
	static function isNull($str){
		if($str==null)
			return true;
		if($str=='')
			return true;
		return false;
	}
}

