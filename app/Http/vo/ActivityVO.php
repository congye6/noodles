<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-10
 * Time: 10:31
 */

namespace App\Http\vo;


class ActivityVO{
	public $activity;

	public $isBegin;

	public $day;

	public $hour;

	/**
	 * ActivityVO constructor.
	 * @param $activity
	 * @param $isBegin
	 * @param $day
	 * @param $hour
	 */
	public function __construct($activity, $isBegin, $day, $hour){
		$this->activity = $activity;
		$this->isBegin = $isBegin;
		$this->day = $day;
		$this->hour = $hour;
	}


}