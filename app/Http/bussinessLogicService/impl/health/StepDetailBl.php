<?php
namespace App\Http\bussinessLogicService\impl\health;
use App\Http\bussinessLogicService\health\StepDetailBlService;
use App\Http\dataService\health\StepDetailDataService;
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


	public function __construct(StepDetailDataService $dataService){
		$this->data=$dataService;
	}

	public function getTodayStepsInMinute($userName,$date){

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
		return $stepTotal;
	}

	/**
	 * 返回20分钟内行走大于500步的stepvo
	 * 相邻时间要进行合并
	 * @param $userName
	 * @return mixed
	 */
	public function getTodayMainSteps($userName){

	}

	private function createData($userName){
		for($i=0;$i<10;$i++){
			$hour=mt_rand(0,23);
			$minute=mt_rand(0,60);
			$time=$hour.':'.$minute;
			$this->data->addStepsInMinute(new StepVO($userName,mt_rand(50,2000),DateTool::today(),mt_rand(1,20),mt_rand(500,1000),mt_rand(200,1000),$time));
		}
	}
}