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
use App\Http\dataService\impl\health\StepGoalData;
use App\Http\tool\DateTool;
use App\Http\vo\StepVO;

class StepBl implements StepBlService {

	private $stepData;

	private $detailBl;

	private $stepGoalData;

	public function __construct(StepDataService $stepDataService,StepGoalData $stepGoalData,StepDetailBlService $detailBl){
		$this->stepData=$stepDataService;
		$this->detailBl=$detailBl;
		$this->stepGoalData=$stepGoalData;
	}


	public function getHistorySteps($userName){
//		$this->createData($userName);

		$today=DateTool::today();
		$AWeekAgo=date('Y-m-d',time()+8*3600-7*24*3600);

		$datas=$this->stepData->getStepsInDay($AWeekAgo,$today,$userName);

		$dates=array();
		foreach ($datas as $data){
			array_push($dates,$data->date);
		}

		array_multisort($dates,SORT_DESC,$datas,SORT_DESC);


		return $datas;
	}

	/**
	 * 获得user在某个时间段的总步数
	 * @param $userName
	 * @param $startDate
	 * @param $endDate
	 * @return int
	 */
	public function getStepTotal($userName,$startDate,$endDate){
		$stepInfos=$this->stepData->getStepsInDay($startDate,$endDate,$userName);
		$stepTotal=0;
		foreach ($stepInfos as $info){
			$stepTotal=$info->step+$stepTotal;
		}
		return $stepTotal;
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
		return $this->stepData->getSteps($date,$userName);
	}

	/**
	 * 获取用户总共消耗的热量(千卡)
	 */
	public function getHeatTotal($userName){
		$stepInfos=$this->stepData->getAllStep($userName);
		$heatTotal=0;
		foreach ($stepInfos as $info){
			$heatTotal=$info->step+$heatTotal;
		}
		$heatTotal=round($heatTotal/1000,1);
		return $heatTotal;
	}

	public function setStepGoal($userName,$goal){
		$this->stepGoalData->updateStepGoal($userName,$goal);
		return 'true';
	}

	private function createData($userName){

		for($i=0;$i<10;$i++){
			$this->stepData->addStepsInDay(new StepVO($userName,mt_rand(1000,20000),date('Y-m-d',time()+8*3600-240*3600+$i*24*3600),mt_rand(30,200),mt_rand(5000,10000),mt_rand(2000,10000),null));
		}
	}
}