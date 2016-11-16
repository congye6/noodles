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
		return strtotime($time)<strtotime(self::now());
	}

	static public function isLatter($end,$start){
		return strtotime($end)>strtotime($start);
	}



	static public function now(){
		return date('Y-m-d H:i',time()+8*3600);
	}

	static public function today(){
		return date('Y-m-d',time()+8*3600);
	}

	/**
	 * 计算两个时间相差多少天多少小时
	 * @param $startTime
	 * @param $endTime
	 * @return array
	 */
	static public function minus($endTime,$startTime){
		$second=strtotime($endTime)-strtotime($startTime);
		$hour=$second/3600;
		$day=intval($hour/24);
		$hour=$hour%24;
		return ['day'=>$day,'hour'=>$hour];
	}

}