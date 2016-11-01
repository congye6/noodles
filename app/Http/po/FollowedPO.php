<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-01
 * Time: 19:17
 */

namespace App\Http\po;


class FollowedPO{
	private $userId;

	private $followedUser;

	/**
	 * @return mixed
	 */
	public function getUserId()
	{
		return $this->userId;
	}

	/**
	 * @param mixed $userId
	 */
	public function setUserId($userId)
	{
		$this->userId = $userId;
	}

	/**
	 * @return mixed
	 */
	public function getFollowedUser()
	{
		return $this->followedUser;
	}

	/**
	 * @param mixed $followedUser
	 */
	public function setFollowedUser($followedUser)
	{
		$this->followedUser = $followedUser;
	}



}