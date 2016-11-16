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

class WalkController extends Controller {

	private $stepBl;

	private $stepDetailBl;

	public function __construct(StepDetailBlService $detailBlService,StepBlService $blService){
		$this->stepBl=$blService;
		$this->stepDetailBl=$detailBlService;
	}

	public function getWalkInfo(){

		$stepTotalVO=$this->stepDetailBl->getTodayStepsInTotal($_COOKIE["userName"]);
		return view('health.walk')->with('stepTotal',$stepTotalVO);
	}

	public function getStepInMinute($date){
		return $this->stepDetailBl-$this->getStepsInMinute($_COOKIE['userName'],$date);
	}



}