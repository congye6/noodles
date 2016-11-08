<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-08
 * Time: 15:44
 */

namespace App\Http\tool;


class DateTool{
	static public function isPast($time){
		return strtotime($time)<self::now();
	}

	static public function isLatter($end,$start){
		return strtotime($end)>strtotime($start);
	}

	static private function now(){
		return strtotime(date('Y-m-d H:i',time()+8*3600));
	}

}