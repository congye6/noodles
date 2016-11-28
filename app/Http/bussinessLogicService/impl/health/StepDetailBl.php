<?php
namespace App\Http\bussinessLogicService\impl\health;
use App\Http\bussinessLogicService\health\StepDetailBlService;
use App\Http\dataService\health\StepDataService;
use App\Http\dataService\health\StepDetailDataService;
use App\Http\dataService\health\StepGoalDataService;
use App\Http\tool\DateTool;
use App\Http\vo\StepTotalVO;
use App\Http\vo\StepVO;

/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-15
 * Time: 19:35
 */
class StepDetailBl implements StepDetailBlService {
	private $data;

    private $goalData;

	public function __construct(StepDetailDataService $dataService,StepGoalDataService $goalData){
		$this->data=$dataService;
        $this->goalData=$goalData;
	}

	public function completeRate($userName){
        $step=$this->getTodayStepsInTotal($userName)->step;
        $goal=$this->goalData->getStepGoal($userName);

        if($step>=$goal)
            return 100;
        else
            return 100*$step/$goal;
    }

	public function getTodayStepsInMinute($userName,$date){
//		$this->createData($userName);
		if($date=='today')
			$date=DateTool::today();
		$stepList=$this->data->getStepsInMinute($userName,$date);
		return $stepList;
	}

	public function getTodayStepsInTotal($userName){
		$stepList=$this->data->getStepsInMinute($userName,DateTool::today());
		$stepTotal=new StepTotalVO();
		foreach ($stepList as $step){
			$stepTotal->add($step);
		}
		$stepTotal->distance=round($stepTotal->distance/1000,1);
		return $stepTotal;
	}


	public function stepRate($userName,$date){
		$stepList=$this->getTodayStepsInMinute($userName,$date);
		$stepStatistic=array(0,0,0,0);
		foreach ($stepList as $step){
			$hour=explode(':',$step->time)[0];
			$stepStatistic[intval($hour/6)]=$stepStatistic[intval($hour/6)]+$step->step;
		}
		return $stepStatistic;
	}

	/**
	 * 返回20分钟内行走大于200步的stepvo
	 * TODO:相邻时间要进行合并
	 * @param $userName
	 * @return mixed
	 */
	public function getTodayMainSteps($userName,$date){
		$stepList=$this->getTodayStepsInMinute($userName,$date);
		$stepStatistic=array();
		$hourArray=array();
		foreach ($stepList as $step){
			if($step->step>200){
				//按时间排序
				$hour=explode(':',$step->time)[0];
				array_push($hourArray,(int)$hour);
				array_push($stepStatistic,$step);
				array_multisort($hourArray,$stepStatistic);
			}


		}
		return $stepStatistic;
	}

	private function createData($userName){
		for($i=0;$i<10;$i++){
			$hour=mt_rand(0,23);
			$minute=mt_rand(0,2)*20;
			$time=$hour.':'.$minute;
			$this->data->addStepsInMinute(new StepVO($userName,mt_rand(50,2000),DateTool::today(),mt_rand(1,20),mt_rand(20,200),mt_rand(200,1000),$time));
		}
	}
}