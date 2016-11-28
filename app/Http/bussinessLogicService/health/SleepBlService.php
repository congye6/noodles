<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-28
 * Time: 11:37
 */

namespace App\Http\bussinessLogicService\health;


interface SleepBlService{

	public function todaySleepInfo($userName);

	/**
	 * 获取深度睡眠时间和浅睡眠时间
	 * @param $userName
	 * @return mixed
	 */
	public function deepOrLightSleep($userName);

	/**
	 * 用于睡眠折线图
	 * @param $userName
	 * @return mixed
	 */
	public function sleepStatistic($userName);

	/**
	 * 最近几天的睡眠历史
	 * 时间单位化成小时和分钟
	 * @param $userName
	 * @return mixed
	 */
	public function sleepHistory($userName);

}