<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-15
 * Time: 19:45
 */

namespace App\Http\vo;


class StepTotalVO{
	public $step;

	public $distance;

	public $heat;

	public $hour;

	public $minute;

	public function __construct(){
		$this->distance=0;
		$this->heat=0;
		$this->hour=0;
		$this->minute=0;
		$this->step=0;
	}

	public function add($step){
		$this->step=$this->step+$step->step;
		$this->distance=$this->distance+$step->distance;
		$this->heat=$this->heat+$step->heat;
		$this->minute=$this->minute+$step->walkTime;
		if($this->minute<60)
			return;
		$this->minute=$this->minute-60;
		$this->hour=$this->hour+1;
	}
}