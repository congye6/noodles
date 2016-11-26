<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-14
 * Time: 20:42
 */

namespace App\Http\bussinessLogicService\health;


interface StepDetailBlService{

	public function getTodayStepsInMinute($userName,$date);

	public function getTodayStepsInTotal($userName);

	/**
	 * 返回20分钟内行走大于500步的stepvo
	 * 相邻时间要进行合并
	 * @param $userName
	 * @return mixed
	 */
	public function getTodayMainSteps($userName,$date);

	/**
	 * 计算行走步数在四个时间段的分布
	 * 四个时间段：凌晨，早上，下午，晚上
	 * @param $userName
	 * @param $date
	 * @return mixed
	 */
	public function stepRate($userName,$date);

	//TODO：每日目标


}