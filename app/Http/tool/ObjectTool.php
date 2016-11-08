<?php
namespace App\Http\tool;
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-07
 * Time: 11:34
 */
class ObjectTool{
	static function objectToArray($obj){
		$arr = is_object($obj) ? get_object_vars($obj) : $obj;
		return $arr;
	}

	static function objectToJson($obj){
		return json_encode($obj,JSON_UNESCAPED_UNICODE);
	}

}