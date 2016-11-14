<?php
/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016-11-13
 * Time: 15:10
 */

namespace App\Http\dataService\impl\friends;


use App\Http\dataService\friends\FriendsDataService;
use App\Http\tool\ObjectTool;
use App\Http\tool\StringTool;
use App\Http\vo\FollowedVO;
use Illuminate\Database\Eloquent\Model;

class FriendsData extends Model implements FriendsDataService {
	protected $table = 'Followed';

	protected $fillable = ['userName','followed'];

	public function addFollowedFriends(FollowedVO $vo){
		FriendsData::create(ObjectTool::objectToArray($vo));
	}

	public function deleteFollowedFriends(FollowedVO $vo){
		FriendsData::where([['userName',$vo->userName],['followed',$vo->followed]])->delete();
	}

	public function getFollowedFriends($userName){
		return FriendsData::where('userName',$userName)->get();
	}

	public function getFans($userName){
		return FriendsData::where('followed',$userName)->get();
	}
}