<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-27
 * Time: 11:39
 */

namespace App\Http\vo;


class BodyStatisticVO{
	public $weight;

	public $time;

	//标记是上涨还是下降
	public $isIncrease;

	//变化率
	public $rate;

	//差距
	public $gap;

	/**
	 * BodyStatisticVO constructor.
	 * @param $weight
	 * @param $time
	 * @param $isIncrease
	 * @param $rate
	 * @param $gap
	 */
	public function __construct($weight, $time, $isIncrease, $rate, $gap){
		$this->weight = $weight;
		$this->time = $time;
		$this->isIncrease = $isIncrease;
		$this->rate = $rate;
		$this->gap = $gap;
	}


}