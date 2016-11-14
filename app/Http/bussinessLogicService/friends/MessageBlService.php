<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-13
 * Time: 14:33
 */

namespace App\Http\bussinessLogicService\friends;


use App\Http\vo\MessageVO;

interface MessageBlService{
	public function sendMessage(MessageVO $message);

	public function readMessage($userName);
}