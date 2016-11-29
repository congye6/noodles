<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:32
 */

namespace App\Http\Controllers\Friends;


use App\Http\bussinessLogicService\friends\MessageBlService;
use App\Http\Controllers\Controller;
use App\Http\vo\MessageVO;

class MessageController extends Controller {

	private $bl;

	public function __construct(MessageBlService $bl){
		$this->bl=$bl;
	}


	public function messages(){
		$messages=$this->bl->readMessage($_COOKIE['userName']);
        return view('friends.comments')->with(['messages'=>$messages]);
    }

    public function sendMessage($reciever,$message){
		return $this->bl->sendMessage(new MessageVO($_COOKIE['userName'],$reciever,$message));
    }
}