<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-28
 * Time: 11:22
 */

namespace App\Http\dataService\impl\health;


use App\Http\dataService\health\SleepDataService;
use App\Http\tool\ObjectTool;
use App\Http\vo\SleepVO;
use Illuminate\Database\Eloquent\Model;

class SleepData extends Model  implements SleepDataService {

	protected $table = 'Sleep';

	protected $fillable = ['userName','date','sleep','deepSleep','lightSleep','bedTime'];


	public function addSleepData(SleepVO $sleepVO){
		SleepData::create(ObjectTool::objectToArray($sleepVO));
	}

	public function getSleepData($userName,$date){
		return SleepData::where([['userName',$userName],['date',$date]])->first();
	}

	public function getSleepHistory($userName){
		return SleepData::where('userName',$userName)->get();
	}

}