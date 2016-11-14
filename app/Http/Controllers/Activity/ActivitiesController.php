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
use App\Http\Controllers\Controller;
use App\Http\tool\ObjectTool;
use App\Http\vo\ActivityInfoVO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class ActivitiesController extends Controller {

	private $activityBl;

	private $partnerBl;

	function __construct(ActivityBlService $activityBl,PartnerBlService $partnerBl){
		$this->activityBl=$activityBl;
		$this->partnerBl=$partnerBl;
	}

	public function activities(){
		$activities=$this->activityBl->getActivities();
        return view('activity.activities')->with('activities',$activities);
    }

    public function activity($activityId){
		$activityVO=$this->activityBl->getActivity($activityId);
	    return view('activity.activityDetail')->with('activityVO',$activityVO);
    }

    public function joinActivity($activityId){
		$result=$this->partnerBl->joinActivity($activityId,$_COOKIE['userName']);
	    return $result;
    }



}