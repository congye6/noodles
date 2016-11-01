<?php
namespace App\Http\po;
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-10-31
 * Time: 19:06
 */
class ActivityInfoPO{
	private $id;

	//string 项目介绍
	private $introduction;

	//string year-month-day
	private $startDate;

	private $endDate;

	//int 运动类型，当前仅有追踪器一种
	private $sportType;

	//参加竞赛的保证金
	private $enterFee;

	//发布者
	private $publisher;

	//参与者id列表
	private $partnerList;

	/**
	 * @return mixed
	 */
	public function getId(){
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id){
		$this->id = $id;
	}



	/**
	 * @return mixed
	 */
	public function getIntroduction(){
		return $this->introduction;
	}

	/**
	 * @param mixed $introduction
	 */
	public function setIntroduction($introduction){
		$this->introduction = $introduction;
	}

	/**
	 * @return mixed
	 */
	public function getStartDate(){
		return $this->startDate;
	}

	/**
	 * @param mixed $startDate
	 */
	public function setStartDate($startDate){
		$this->startDate = $startDate;
	}

	/**
	 * @return mixed
	 */
	public function getEndDate(){
		return $this->endDate;
	}

	/**
	 * @param mixed $endDate
	 */
	public function setEndDate($endDate){
		$this->endDate = $endDate;
	}

	/**
	 * @return mixed
	 */
	public function getSportType(){
		return $this->sportType;
	}

	/**
	 * @param mixed $sportType
	 */
	public function setSportType($sportType){
		$this->sportType = $sportType;
	}

	/**
	 * @return mixed
	 */
	public function getEnterFee(){
		return $this->enterFee;
	}

	/**
	 * @param mixed $enterFee
	 */
	public function setEnterFee($enterFee){
		$this->enterFee = $enterFee;
	}

	/**
	 * @return mixed
	 */
	public function getPublisher(){
		return $this->publisher;
	}

	/**
	 * @param mixed $publisher
	 */
	public function setPublisher($publisher){
		$this->publisher = $publisher;
	}

	/**
	 * @return mixed
	 */
	public function getPartnerList(){
		return $this->partnerList;
	}

	/**
	 * @param mixed $partnerList
	 */
	public function setPartnerList($partnerList){
		$this->partnerList = $partnerList;
	}


}