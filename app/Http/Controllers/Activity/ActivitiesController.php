<?php
/**
 * Created by PhpStorm.
 * User: cong
 * Date: 2016-10-18
 * Time: 17:26
 */

namespace App\Http\Controllers\Activity;


use App\Http\Controllers\Controller;

class ActivitiesController extends Controller {
    public function activities(){
        return view('activity.activities');
    }

}