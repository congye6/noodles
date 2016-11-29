<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-29
 * Time: 10:33
 */

namespace App\Http\bussinessLogicService\impl\user;


use App\Http\bussinessLogicService\user\UserBlService;
use App\Http\dataService\user\UserDataService;

class UserBl implements UserBlService {

	private $data;

	public function __construct(UserDataService $data){
		$this->data=$data;
	}

	/**
	 * 3级以上才可以发送消息
	 * @param $userName
	 * @return mixed
	 */
	public function isCanSendMessage($userName){
		$userData=$this->data->getUser($userName);
		return $userData->level>=3;
	}

	/**
	 * 2级以上用户才可以关注
	 * @param $userName
	 * @return mixed
	 */
	public function isCanFollow($userName){
		$userData=$this->data->getUser($userName);
		return $userData->level>=2;
	}

	/**
	 * 增加使用noodles天数
	 * 1天为1级用户，7天以内为2级，7天以上为3级
	 * @param $userName
	 * @return mixed
	 */
	public function addWalkDay($userName){

	}

	public function getUser($userName){
		return $this->data->getUser($userName);
	}



}