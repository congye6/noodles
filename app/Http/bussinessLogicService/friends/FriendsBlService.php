<?php
namespace App\Http\bussinessLogicService\friends;
use App\Http\vo\FollowedVO;

interface FriendsBlService{
	public function addFollowedFriend(FollowedVO $vo);

	public function deleteFollowedFriend(FollowedVO $vo);

	public function inquiryFollowedFriends($userName);

	public function inquiryFans($userName);

}