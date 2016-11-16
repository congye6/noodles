<?php
namespace App\Http\dataService\impl\health;
use App\Http\dataService\health\StepDetailDataService;
use App\Http\tool\ObjectTool;
use App\Http\vo\StepVO;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-14
 * Time: 20:14
 */
class StepDetailData extends Model  implements StepDetailDataService {

	protected $table = 'StepInMinute';

	protected $fillable = ['userName','date','time','step','walkTime','heat','distance'];

	public function getStepsInMinute($userName,$date){
		return StepDetailData::where([['userName',$userName],['date',$date]])->get();
	}

	public function addStepsInMinute(StepVO $stepVO){

		StepDetailData::create(ObjectTool::objectToArray($stepVO));
	}


}