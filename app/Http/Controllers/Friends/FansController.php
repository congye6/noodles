<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:30
 */

namespace App\Http\Controllers\Friends;


use App\Http\Controllers\Controller;

class FansController extends Controller {
    public function fans(){
        return view('friends.fans');
    }
}