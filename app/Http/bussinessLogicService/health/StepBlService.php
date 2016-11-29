<?php
namespace App\Http\bussinessLogicService\health;
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-14
 * Time: 20:41
 */
interface StepBlService{

	public function getHistorySteps($userName);

	/**
	 * 获得某一天的运动数据，如果是今天则转给stepDetail计算
	 * @param $userName
	 * @param $date
	 * @return mixed
	 */
	public function getStepsByDay($userName,$date);

	public function setStepGoal($userName,$goal);

	/**
	 * 获取用户在某个时间段内行走的总步数
	 * @param $userName
	 * @param $startDate
	 * @param $endDate
	 * @return mixed
	 */
	public function getStepTotal($userName,$startDate,$endDate);

	/**
	 * 获取用户总共消耗的热量
	 * @param $userName
	 * @param $startDate
	 * @param $endDate
	 * @return mixed
	 */
	public function getHeatTotal($userName);

}