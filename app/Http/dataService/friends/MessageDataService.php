<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-13
 * Time: 14:39
 */

namespace App\Http\dataService\friends;


use App\Http\vo\MessageVO;

interface MessageDataService{

	public function addMessage(MessageVO $message);

	public function getMessages($username);

}