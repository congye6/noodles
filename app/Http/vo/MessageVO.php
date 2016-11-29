<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-01
 * Time: 20:15
 */

namespace App\Http\vo;


class MessageVO{
	public $sender;


	//接收者id
	public $reciever;

	public $message;

	/**
	 * MessageVO constructor.
	 * @param $sender
	 * @param $reciever
	 * @param $message
	 */
	public function __construct($sender, $reciever, $message){
		$this->sender = $sender;
		$this->reciever = $reciever;
		$this->message = $message;
	}


}