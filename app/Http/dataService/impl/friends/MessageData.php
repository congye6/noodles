<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-29
 * Time: 10:21
 */

namespace App\Http\dataService\impl\friends;


use App\Http\dataService\friends\MessageDataService;
use App\Http\tool\ObjectTool;
use App\Http\vo\MessageVO;
use Illuminate\Database\Eloquent\Model;

class MessageData extends Model implements MessageDataService {

	protected $table = 'Message';

	protected $fillable = ['sender','reciever','message'];

	public function addMessage(MessageVO $message){
		MessageData::create(ObjectTool::objectToArray($message));
	}

	public function getMessages($username){
		return MessageData::where('reciever',$username)->get();
	}


}