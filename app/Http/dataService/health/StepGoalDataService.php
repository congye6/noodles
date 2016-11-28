<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-28
 * Time: 21:07
 */

namespace App\Http\dataService\health;


interface StepGoalDataService{
	public function addStepGoal($userName,$goal);

	public function updateStepGoal($userName,$goal);
}