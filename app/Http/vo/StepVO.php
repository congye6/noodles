<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-14
 * Time: 19:51
 */

namespace App\Http\vo;


class StepVO{

	public $userName;

	public $step;

	public $date;

	public $walkTime;

	public $heat;

	public $distance;

	//具体时间，每天的总数据没有这个属性
	public $time;

	/**
	 * StepVO constructor.
	 * @param $userName
	 * @param $step
	 * @param $date
	 * @param $walkTime
	 * @param $heat
	 * @param $distance
	 * @param $time
	 */
	public function __construct($userName, $step, $date, $walkTime, $heat, $distance, $time){
		$this->userName = $userName;
		$this->step = $step;
		$this->date = $date;
		$this->walkTime = $walkTime;
		$this->heat = $heat;
		$this->distance = $distance;
		$this->time = $time;
	}


}