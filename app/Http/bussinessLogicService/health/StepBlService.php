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

}