<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-13
 * Time: 14:36
 */

namespace App\Http\bussinessLogicService\impl\friends;


use App\Http\bussinessLogicService\friends\FriendsBlService;
use App\Http\dataService\friends\FriendsDataService;
use App\Http\vo\FollowedVO;

class FriendsBl implements FriendsBlService {

	private $data;

	public function __construct(FriendsDataService $friendsData){
		$this->data=$friendsData;
	}

	public function addFollowedFriend(FollowedVO $vo){
		if($vo->isNull())
			return '网页异常，请刷新后重试';


		$this->data->addFollowedFriends($vo);
		return 'true';
	}

	public function deleteFollowedFriend(FollowedVO $vo){
		if($vo->isNull())
			return '网页异常，请刷新后重试';

		$this->data->deleteFollowedFriends($vo);
		return 'true';
	}

	public function inquiryFollowedFriends($userName){

		return $this->data->getFollowedFriends($userName);
	}


	public function inquiryFans($userName){
		return $this->data->getFans($userName);
	}
}