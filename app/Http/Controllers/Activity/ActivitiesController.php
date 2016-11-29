<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:26
 */

namespace App\Http\Controllers\Activity;


use App\Http\bussinessLogicService\activity\ActivityBlService;
use App\Http\bussinessLogicService\activity\PartnerBlService;
use App\Http\bussinessLogicService\health\StepBlService;
use App\Http\Controllers\Controller;
use App\Http\tool\ObjectTool;
use App\Http\vo\ActivityInfoVO;
use App\Http\vo\PartnerActivityVO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class ActivitiesController extends Controller {

	private $activityBl;

	private $partnerBl;

	private $stepBl;

	function __construct(ActivityBlService $activityBl,PartnerBlService $partnerBl,StepBlService $stepBl){
		$this->activityBl=$activityBl;
		$this->partnerBl=$partnerBl;
		$this->stepBl=$stepBl;
	}

	public function activities(){
		$activities=$this->activityBl->getActivities();

        return view('activity.activities')->with('activities',$activities);
    }

    public function activity($activityId){
		$activityVO=$this->activityBl->getActivity($activityId);

	    //统计各参与者的运动步数
	    $steps=array();
	    $partnerList=$activityVO->partnerList;
	    $startDate=substr($activityVO->activity->startTime,0,10);
	    $endDate=substr($activityVO->activity->endTime,0,10);
	    foreach ($partnerList as $partner){
			$step=$this->stepBl->getStepTotal($partner,$startDate,$endDate);
		    array_push($steps,new PartnerActivityVO($partner,$step));
	    }

		rsort($steps);
	    return view('activity.activityDetail')->with(['activityVO'=>$activityVO,'steps'=>$steps]);
    }

    public function joinActivity($activityId){
		$result=$this->partnerBl->joinActivity($activityId,$_COOKIE['userName']);
	    return $result;
    }



}