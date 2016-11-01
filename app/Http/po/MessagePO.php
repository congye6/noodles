<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-01
 * Time: 20:17
 */

namespace App\Http\po;


class MessagePO{
	private $senderId;


	//接收者id
	private $recieverId;

	private $content;

	private $date;

	/**
	 * @return mixed
	 */
	public function getSenderId()
	{
		return $this->senderId;
	}

	/**
	 * @param mixed $senderId
	 */
	public function setSenderId($senderId)
	{
		$this->senderId = $senderId;
	}

	/**
	 * @return mixed
	 */
	public function getRecieverId()
	{
		return $this->recieverId;
	}

	/**
	 * @param mixed $recieverId
	 */
	public function setRecieverId($recieverId)
	{
		$this->recieverId = $recieverId;
	}

	/**
	 * @return mixed
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * @param mixed $content
	 */
	public function setContent($content)
	{
		$this->content = $content;
	}

	/**
	 * @return mixed
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * @param mixed $date
	 */
	public function setDate($date)
	{
		$this->date = $date;
	}


}