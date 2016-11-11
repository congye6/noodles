<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:26
 */

namespace App\Http\Controllers\Activity;


use App\Http\bussinessLogicService\activity\ActivityBlService;
use App\Http\Controllers\Controller;
use App\Http\tool\ObjectTool;
use App\Http\vo\ActivityInfoVO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class ActivitiesController extends Controller {

	private $bl;

	function __construct(ActivityBlService $bl){
		$this->bl=$bl;
	}

	public function activities(){
		$activities=$this->bl->getActivities();
        return view('activity.activities')->with('activities',$activities);
    }

    public function activity($activityId){
		$activityVO=$this->bl->getActivity($activityId);
	    return view('activity.activityDetail')->with('activityVO',$activityVO);
    }

    public function joinActivity($activityId){

    }



}