<?php
namespace App\Http\dataService\friends;
use App\Http\vo\FollowedVO;

/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-13
 * Time: 14:38
 */
interface FriendsDataService{
	public function addFollowedFriends(FollowedVO $vo);

	public function deleteFollowedFriends(FollowedVO $vo);

	public function getFollowedFriends($userName);

	public function getFans($userName);
}