<?php
namespace App\Http\Controllers\Friends;
use App\Http\bussinessLogicService\friends\FriendsBlService;
use App\Http\Controllers\Controller;
use App\Http\vo\FollowedVO;

/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:29
 */
class FollowedController extends Controller {

	private $bl;

	public function __construct(FriendsBlService $bl){
		$this->bl=$bl;
	}

	public function followedFriends(){

		$friends=$this->bl->inquiryFollowedFriends($_COOKIE['userName']);

        return view('friends.followed')->with('friends',$friends);
    }

    public function cancelFollowed($followed){
    	return $this->bl->deleteFollowedFriend(new FollowedVO($_COOKIE['userName'],$followed));
    }

    public function followedFriend($followed){
		return $this->bl->addFollowedFriend(new FollowedVO($_COOKIE['userName'],$followed));
    }
}