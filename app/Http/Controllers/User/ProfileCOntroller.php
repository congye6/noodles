<?php
namespace App\Http\Controllers\User;
/**
 * Created by PhpStorm.
 * User: congye6
 * Date: 2016-10-21
 * Time: 17:07
 */



use App\Http\bussinessLogicService\activity\ActivityBlService;
use App\Http\bussinessLogicService\friends\FriendsBlService;
use App\Http\bussinessLogicService\health\BodyBlService;
use App\Http\bussinessLogicService\health\SleepBlService;
use App\Http\bussinessLogicService\health\StepBlService;
use App\Http\bussinessLogicService\user\UserBlService;
use App\Http\Controllers\Controller;

class ProfileController extends Controller {

	private $userBl;

	private $stepBl;

	private $activityBl;

	private $friendsBl;

	private $sleepBl;

	private $bodyBl;





	public function __construct(UserBlService $userBl,StepBlService $stepBl,ActivityBlService $activityBl
		,FriendsBlService $friendsBl,SleepBlService $sleepBl,BodyBlService $bodyBl){
		$this->userBl = $userBl;
		$this->stepBl = $stepBl;
		$this->activityBl = $activityBl;
		$this->friendsBl = $friendsBl;
		$this->sleepBl = $sleepBl;
		$this->bodyBl = $bodyBl;

	}


	public function profile($userName){
		$userInfo=$this->userBl->getUser($userName);

		$heat=$this->stepBl->getHeatTotal($userName);




		return view('user.profile')->with(['userName'=>$userName,'userInfo'=>$userInfo,'heat'=>$heat]);
	}

	public function myProfile(){
		return $this->profile($_COOKIE['userName']);
	}

}