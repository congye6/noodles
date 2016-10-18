<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:27
 */

namespace App\Http\Controllers\Activity;


use App\Http\Controllers\Controller;

class MyActivitiesController extends Controller {
    public  function myActivity(){
        return view('activity.myActivity');
    }
}