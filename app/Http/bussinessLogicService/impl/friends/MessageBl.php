<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-29
 * Time: 10:24
 */

namespace App\Http\bussinessLogicService\impl\friends;


use App\Http\bussinessLogicService\friends\MessageBlService;
use App\Http\bussinessLogicService\user\UserBlService;
use App\Http\dataService\friends\MessageDataService;
use App\Http\vo\MessageVO;

class MessageBl implements MessageBlService {

	private $data;

	private $userBl;

	public function __construct(MessageDataService $data,UserBlService $useBl){
		$this->data=$data;
		$this->userBl=$useBl;
	}

	public function sendMessage(MessageVO $message){
		$sender=$message->sender;
		if(!$this->userBl->isCanSendMessage($sender))
			return '等级不够，还不能发送消息哦';

		$this->data->addMessage($message);
		return 'true';
	}

	public function readMessage($userName){
		return $this->data->getMessages($userName);
	}

}