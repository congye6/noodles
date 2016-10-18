<?php
namespace App\Http\Controllers\Activity;
use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:14
 */
class PublishController extends Controller {
    public function publishActivity(){
        return view('activity.publish');
    }
}