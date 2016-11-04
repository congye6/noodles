<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-01
 * Time: 20:36
 */

namespace App\Http\po;


class GoalPO{
	private $userId;

	private $description;

	//每日，本周，今日
	private $time;

	//睡眠，运动，体重
	private $type;

	//目标值
	private $value;

	private $id;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}



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
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * @return mixed
	 */
	public function getTime()
	{
		return $this->time;
	}

	/**
	 * @param mixed $time
	 */
	public function setTime($time)
	{
		$this->time = $time;
	}

	/**
	 * @return mixed
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param mixed $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @param mixed $value
	 */
	public function setValue($value)
	{
		$this->value = $value;
	}




}