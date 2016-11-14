<?php
/**
 * 管理每天具体时间的步数，二十分钟一段
 * User: st0001
 * Date: 2016-11-14
 * Time: 19:41
 */
namespace App\Http\dataService\health;


use App\Http\vo\StepVO;

interface StepDetailDataService{
	public function getStepsInMinute($userName,$date);

	public function addStepsInMinute(StepVO $stepVO);
}