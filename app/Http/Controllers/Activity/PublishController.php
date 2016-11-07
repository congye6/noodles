<?php
namespace App\Http\Controllers\Activity;
use App\Http\bussinessLogicService\activity\ActivityBlService;
use App\Http\Controllers\Controller;
use App\Http\vo\ActivityInfoVO;

/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:14
 */
class PublishController extends Controller {
    private $bl;

	function __construct(ActivityBlService $bl){
		$this->bl=$bl;
	}

	public function publishActivity(){
        return view('activity.publish');
    }

    public function publish($description,$startTime,$endTime,$sportType,$enterFee){
		$activityInfoVO=new ActivityInfoVO($description,$startTime,$endTime,$sportType,$enterFee,$_COOKIE['userName']);
	    $result=$this->bl->publish($activityInfoVO);
	    return $result;
    }
}