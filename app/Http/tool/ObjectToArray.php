<?php
namespace App\Http\tool;
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-07
 * Time: 11:34
 */
class ObjectToArray{
	static function run($obj){
		$arr = is_object($obj) ? get_object_vars($obj) : $obj;
		return $arr;
	}
}