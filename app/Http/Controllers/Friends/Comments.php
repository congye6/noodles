<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:32
 */

namespace App\Http\Controllers\Friends;


use App\Http\Controllers\Controller;

class Comments extends Controller {
    public function comments(){
        return view('friends.comments');
    }
}