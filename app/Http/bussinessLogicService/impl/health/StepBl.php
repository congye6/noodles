<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-15
 * Time: 20:17
 */

namespace App\Http\bussinessLogicService\impl\health;


use App\Http\bussinessLogicService\health\StepBlService;
use App\Http\bussinessLogicService\health\StepDetailBlService;
use App\Http\dataService\health\StepDataService;
use App\Http\tool\DateTool;
use App\Http\vo\StepVO;

class StepBl implements StepBlService {

	private $data;

	private $detailBl;

	public function __construct(StepDataService $stepDataService,StepDetailBlService $detailBl){
		$this->data=$stepDataService;
		$this->detailBl=$detailBl;
	}


	public function getHistorySteps($userName){
//		$this->createData($userName);

		$today=DateTool::today();
		$AWeekAgo=date('Y-m-d',time()+8*3600-7*24*3600);

		return $this->data->getStepsInDay($today,$AWeekAgo,$userName);
	}

	/**
	 * 获得某一天的运动数据，如果是今天则转给stepDetail计算
	 * @param $userName
	 * @param $date
	 * @return mixed
	 */
	public function getStepsByDay($userName,$date){
		if($date==DateTool::today())
			return $this->detailBl->getTodayStepsInTotal($userName);
		return $this->data->getSteps($date,$userName);
	}

	private function createData($userName){

		for($i=0;$i<10;$i++){
			$this->data->addStepsInDay(new StepVO($userName,mt_rand(1000,20000),date('Y-m-d',time()+8*3600-240*3600+$i*24*3600),mt_rand(30,200),mt_rand(5000,10000),mt_rand(2000,10000),null));
		}
	}
}