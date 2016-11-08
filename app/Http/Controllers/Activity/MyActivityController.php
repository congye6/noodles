<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:27
 */

namespace App\Http\Controllers\Activity;


use App\Http\bussinessLogicService\activity\ActivityBlService;
use App\Http\Controllers\Controller;

class MyActivityController extends Controller {
	private $bl;

	function __construct(ActivityBlService $bl){
		$this->bl=$bl;
	}


	public  function myActivity(){
	    $activities=$this->bl->getMyActivities($_COOKIE['userName']);
        return view('activity.myActivity')->with('activities',$activities);
    }
}