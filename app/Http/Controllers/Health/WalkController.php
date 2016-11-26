<?php
/**
 * Created by PhpStorm.
 * User: congye6
 * Date: 2016-10-17
 * Time: 13:35
 */

namespace App\Http\Controllers\Health;


use App\Http\bussinessLogicService\health\StepBlService;
use App\Http\bussinessLogicService\health\StepDetailBlService;
use App\Http\Controllers\Controller;
use App\Http\tool\DateTool;

class WalkController extends Controller {

	private $stepBl;

	private $stepDetailBl;

	public function __construct(StepDetailBlService $detailBlService,StepBlService $blService){
		$this->stepBl=$blService;
		$this->stepDetailBl=$detailBlService;
	}

	public function getWalkInfo(){

		$stepTotalVO=$this->stepBl->getStepsByDay($_COOKIE["userName"],DateTool::today());

		$mainStep=$this->stepDetailBl->getTodayMainSteps($_COOKIE["userName"],DateTool::today());
		return view('health.walk')->with(['stepTotal'=>$stepTotalVO,'mainStep'=>$mainStep]);
	}

	public function getStepInMinute($date){
		return $this->stepDetailBl->getTodayStepsInMinute($_COOKIE['userName'],$date);
	}

	public function getStepRate($date){
		return $this->stepDetailBl->stepRate($_COOKIE['userName'],$date);
	}

	public function stepHistory(){
		return $this->stepBl->getHistorySteps($_COOKIE['userName']);
	}



}