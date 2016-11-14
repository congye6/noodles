<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:30
 */

namespace App\Http\Controllers\Friends;


use App\Http\bussinessLogicService\friends\FriendsBlService;
use App\Http\Controllers\Controller;

class FansController extends Controller {

	private $bl;

	public function __construct(FriendsBlService $friendsBlService){
		$this->bl=$friendsBlService;
	}

	public function fans(){
		$friends=$this->bl->inquiryFans($_COOKIE['userName']);
        return view('friends.fans')->with('friends',$friends);
    }
}