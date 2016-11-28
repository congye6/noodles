<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-28
 * Time: 21:09
 */

namespace App\Http\dataService\impl\health;


use App\Http\dataService\health\StepGoalDataService;
use Illuminate\Database\Eloquent\Model;

class StepGoalData extends Model implements StepGoalDataService {
	protected $table = 'StepGoal';

	protected $fillable = ['userName','goal'];

	public function addStepGoal($userName,$goal){
		StepGoalData::create(['userName'=>$userName,'goal'=>$goal]);
	}

	public function updateStepGoal($userName,$goal){
		$data=StepGoalData::where('userName',$userName)->get();
		if($data->count()>0)
			StepGoalData::where('userName',$userName)->update(['goal'=>$goal]);
		else
			$this->addStepGoal($userName,$goal);
	}
}