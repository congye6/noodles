<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-25
 * Time: 14:25
 */

namespace App\Http\dataService\impl\health;


use App\Http\dataService\health\StepDataService;
use App\Http\tool\DateTool;
use App\Http\tool\ObjectTool;
use App\Http\vo\StepVO;
use Illuminate\Database\Eloquent\Model;

class StepData extends Model  implements StepDataService {

	protected $table = 'StepInDay';

	protected $fillable = ['userName','date','step','walkTime','heat','distance'];

	public function getStepsInDay($beginDate,$endDate,$userName){
		$allStep=StepData::where('userName',$userName)->get();
		$result=array();
		foreach ($allStep as $step){

			if(DateTool::isBetween($step->date,$beginDate,$endDate)) {
				array_push($result, $step);
			}
		}
		return $result;
	}

	public function addStepsInDay(StepVO $stepVO){
		StepData::create(ObjectTool::objectToArray($stepVO));
	}

	public function getAllStep($userName){
		return StepData::where('userName',$userName)->get();
	}

	public function getSteps($date,$userName){
		return StepData::where([['userName',$userName],['date',$date]])->get();
	}
}