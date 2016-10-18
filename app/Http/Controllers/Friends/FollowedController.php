<?php
namespace App\Http\Controllers\Friends;
use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:29
 */
class FollowedController extends Controller {
    public function followedFriends(){
        return view('friends.followed');
    }
}