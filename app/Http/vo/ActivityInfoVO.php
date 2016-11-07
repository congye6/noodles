<?php
namespace App\Http\vo;
use App\Http\tool\StringTool;

/**
 * 竞赛信息
 * User: congye6
 * Date: 2016-10-28
 * Time: 20:21
 */
class ActivityInfoVO{
	public $id;

	//string 项目介绍
	public $description;

	//string year-month-day
	public $startTime;

	public $endTime;

	//int 运动类型，当前仅有追踪器一种
	public $sportType;

	//参加竞赛的保证金
	public $enterFee;

	//发布者
	public $publisher;

	public function isNull(){
		return StringTool::isNull($this->description)||StringTool::isNull($this->startTime)||StringTool::isNull($this->endTime);
	}

	/**
	 * ActivityInfoVO constructor.
	 * @param $id
	 * @param $description
	 * @param $startDate
	 * @param $endDate
	 * @param $sportType
	 * @param $enterFee
	 * @param $publisher
	 */
	public function __construct($description, $startDate, $endDate, $sportType, $enterFee, $publisher){

		$this->description = $description;
		$this->startTime = $startDate;
		$this->endTime = $endDate;
		$this->sportType = $sportType;
		$this->enterFee = $enterFee;
		$this->publisher = $publisher;
		$this->id=0;
	}


}