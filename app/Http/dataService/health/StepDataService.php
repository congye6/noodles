<?php
namespace App\Http\dataService\health;
use App\Http\vo\StepVO;

/**
 * 管理每天的总步数
 * User: st0001
 * Date: 2016-11-14
 * Time: 19:39
 */
interface StepDataService{

	public function getStepsInDay($beginDate,$endDate,$userName);

	public function addStepsInDay(StepVO $StepsVO);


}