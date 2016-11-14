<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-01
 * Time: 19:16
 */

namespace App\Http\vo;


use App\Http\tool\StringTool;

class FollowedVO{


	public $userName;

	public $followed;

	/**
	 * FollowedVO constructor.
	 * @param $userId
	 * @param $followedUser
	 */
	public function __construct($userId, $followedUser){
		$this->userName = $userId;
		$this->followed = $followedUser;
	}

	public function isNull(){
		return StringTool::isNull($this->userName)||StringTool::isNull($this->followed);
	}


}