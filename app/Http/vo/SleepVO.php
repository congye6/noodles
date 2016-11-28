<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-28
 * Time: 11:13
 */

namespace App\Http\vo;


class SleepVO{
	public $userName;

	public $date;

	//睡眠时间，以分钟为单位，下同
	public $sleep;

	public $deepSleep;

	public $lightSleep;

	//入睡时间，23:45
	public $bedTime;

}