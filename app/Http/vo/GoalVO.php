<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-01
 * Time: 20:48
 */

namespace App\Http\vo;


class GoalVO{
	public $userId;

	public $id;

	public $description;

	//每日，本周，今日
	public $time;

	//睡眠，运动，体重
	public $type;

	//目标值
	public $value;

}