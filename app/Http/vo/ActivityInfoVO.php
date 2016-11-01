<?php
namespace App\Http\vo;
/**
 * 竞赛信息
 * User: congye6
 * Date: 2016-10-28
 * Time: 20:21
 */
class ActivityInfoVO{
	public $id;

	//string 项目介绍
	public $introduction;

	//string year-month-day
	public $startDate;

	public $endDate;

	//int 运动类型，当前仅有追踪器一种
	public $sportType;

	//参加竞赛的保证金
	public $enterFee;

	//发布者
	public $publisher;

	//参与者id列表
	public $partnerList;

}