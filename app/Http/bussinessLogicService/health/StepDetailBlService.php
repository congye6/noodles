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
	public function getTodayMainSteps($userName);

	//TODO：每日目标


}