<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-10-31
 * Time: 19:48
 */

namespace App\Http\po;


class PartnerPO{

	private $id;

	//排名
	private $index;

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
	public function getIndex()
	{
		return $this->index;
	}

	/**
	 * @param mixed $index
	 */
	public function setIndex($index)
	{
		$this->index = $index;
	}

	//TODO 完善具体信息





}