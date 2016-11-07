<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-07
 * Time: 19:56
 */

namespace App\Http\dataService\impl\activity;

use App\Http\dataService\activity\ActivityDataService;
use App\Http\tool\ObjectToArray;
use App\Http\vo\ActivityInfoVO;
use Illuminate\Database\Eloquent\Model;

class ActivityData extends Model implements ActivityDataService {
	protected $table = 'Activity';

	protected $fillable = ['description','startTime','endTime','sportType','enterFee','publisher'];

	public function addActivity(ActivityInfoVO $vo){
		ActivityData::create(ObjectToArray::run($vo));
	}

}